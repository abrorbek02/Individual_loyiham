@extends('layouts.clientTemplate')

@section('content')

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Barcha mahsulotlar {{ $mark }}</h4>
        <div class="site-pagination">
            <a href=" {{url('/')}} "> Xush kelibsiz mahsulotlarimizga </a>
{{--            <a href="">Mark</a> /--}}
        </div>
    </div>
</div>
<!-- Page info end -->

<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-item">
                            <a href="">
                                <div class="pi-pic">
                                    {{-- <div class="tag-sale">ON SALE</div> --}}
                                    <img src="/storage/{{$product->mainImageUrl($product->id)}}" alt="">
                            </a>
                                    <div class="pi-links">
                                        <button class="add-card" onclick="addToCart({{$product->id}})"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></button>
                                        <button class="wishlist-btn" onclick="likeProduct({{$product->id}})">
                                            <i class="far fa-heart text-danger likee"></i></button>
                                    </div>
                            <a href="{{route('site.singleProduct',$product->id)}}">
                            </div>
                            <div class="pi-text">
                                <h6>{{ number_format($product->price,2,'.',' ')}} $</h6>
                                <p>{{$product->name}}</p>
                            </div>
                        </a>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="text-center pt-5">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->
@endsection




@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            likeProduct(id);
            addToCart(id);
        });

        function likeProduct(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });

            $.ajax({
                url:"/like/" + id,
                method:"POST",
                data: "",
                success:function(){
                    $(".likee").click(function(){
                        $(this).removeClass("far fa-heart").addClass("fas fa-heart");
                    });
                }
            });


        }

        function addToCart(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });
            $.ajax({
                url:"/card/addToCart/" + id,
                method:"POST",
                success: function(response) {
                    swal(
                    response.message,
                    "",
                    response.success,
                    )
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status === 401) {
                        swal(
                        "LOGIN or CREATE AN ACCOUNT to add an item to your cart",
                        "",
                        "error"
                        )
                    } else {
                        swal(
                        "Sorry, an error occurred .........",
                        "",
                        "error"
                        )
                    }
                },
            });


        }
    </script>

@endsection
