@extends('layouts.clientTemplate')

@section('content')
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Contact</h4>
            <div class="site-pagination">
{{--                <a href=" {{url('/')}} ">Welcome</a> /--}}
{{--                <a href=" {{url('/contact')}} ">Contact</a>--}}
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
                    <h3>Savollaringiz bormi?</h3>
                    <br>
                    <h2>Hozir biz bilan bog'laning!</h2>
					<p>N°. SHOVOT , KHORAZM , UZBEKISTAN </p>
					<p>+998 93 090 09 27</p>
					<p>abrorbek94220@gmail.com</p>
					<div class="contact-social">
						<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x"></i></a>
						<a href="#"><i class="fab fa-dribbble fa-2x"></i></a>
						<a href="#"><i class="fab fa-behance fa-2x"></i></a>
                    </div>

					<form class="contact-form" id="" method="POST" action=" {{ route('site.sendMessage') }} ">
						@csrf
						<input type="text" placeholder="Subject" name="subject">
                        <textarea placeholder="Message" name="body"></textarea>

                        <button type="submit" name="submit"  class="site-btn">XABAR YUBORING</button>


					</form>
					<br><br>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10434.18403411546!2d60.62253035969225!3d41.57106680636005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfcec63d012a49%3A0xa2280e571ee2fa3e!2sMuhammad%20Al-%D0%A5orazmiy%20nomidagi%20Toshkent%20Axborot%20Texnologiyalari%20universiteti%20Urganch%20filiali!5e0!3m2!1sru!2sbd!4v1673595904625!5m2!1sru!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->
@endsection
