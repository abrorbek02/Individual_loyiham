@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')
    <div class="container">
        <div class="card card-success">
            <div class="card-header">
                <h4 class="text-dark">Xabarlar</h4>
            </div>
            <div class="card-body">
                <table class="table" id="Table">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Mavzusi</th>
                        <th>Matni</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->subject}}</td>
                            <td>{{$product->body}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
