@extends('layouts.frontend.app')
@push('css')

@endpush
@section('content')

<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Gallery		
							</h1>	
							<p class="text-white link-nav"><a href="http://localhost:8000/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('gallery.display') }}">Gallery</a></p>
						</div>	
					</div>
				</div>
</section>
<section class="content">
<div class="single-post row">

<div class="row mt-30 mb-30">
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g4.jpg')}}" alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g2.jpg')}}"alt="">
	</div>	
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g3.jpg')}}"alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g4.jpg')}}"alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g5.jpg')}}"alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g6.jpg')}}"alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g7.jpg')}}"alt="">
	</div>
	<div class="col-6">
		<img class="img-fluid" src="{{asset('assets/frontend/img/g8.jpg')}}"alt="">
	</div>								
</div>
</div>		
    </section>
@endsection

@push('js')

@endpush