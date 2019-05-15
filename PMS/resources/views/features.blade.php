@extends('layouts.frontend.app')
@push('css')

@endpush
@section('content')	
<br>
<br>
<br>
<br>
<br>

			<!-- Start facilities Area -->
			<section class="facilities-area section-gap">
				<div class="container">
				<div class="section-heading text-center">
	<h2 class="h-bold">Our Latest Facilities</h2>		
</div>
<br>
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-rocket"></span>
								<a href="#"><h4>24/7 Emergency</h4></a>
								<p>
                                It offers the highest degree of commitment to delivering quality and efficient emergency care. Prompt and rapid response of our skilled medical personnel defines our Accident & Emergency Unit.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-users"></span>
								<a href="#"><h4>Family Planning Therapy</h4></a>
								<p>
                                Our family-planning therapies address all aspects of your reproductive journey. Whether you're seeking contraception, guidance on getting pregnant, prenatal care, or wellness treatments unrelated to fertility, our network of hospitals, health-care facilities, and family-planning specialists will help you make confident health-care choices by offering personalized guidance.
								</p>
							</div>
						</div>
                        <div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-bug"></span>
								<a href="#"><h4>Blood Bank</h4></a>
								<p>
								it aims to provide patients with the safest possible blood, equivalent to any international standard. All donations received in the blood bank are voluntary non-remunerated. All necessary safety measures are taken for both the donors and the recipients including performing the mandatory screening tests for infectious diseases.
								</p>
							</div>
						</div>	
                        <div class="col-lg-3 col-md-6">
							<div class="single-facilities">
								<span class="lnr lnr-heart"></span>
								<a href="#"><h4>Ambulance</h4></a>
								<p>
                                The Intensive Care Unit are highly trained doctors and nurses who specialize in caring for seriously ill patients.
								for any emergency need, please call 01914001234; 01914001232
								</p>
							</div>
						</div>
																	
					</div>
				</div>	
			</section>
			<section id="boxes" class="home-section paddingtop-80">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">
						
						<i class="fa fa-check fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Make an appoinment</h4>

					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">
						
						<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Choose your package</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">
						<i class="fa fa-user-md fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Help by specialist</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<div class="box text-center">
						
						<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
						<h4 class="h-bold">Get diagnostic report</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/1.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive" alt="img"></a></div>
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/2.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive " alt="img"></a></div>
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/3.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive " alt="img"></a></div>
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/4.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive " alt="img"></a></div>
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/5.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive " alt="img"></a></div>
                        <div class="item"><img src="{{asset('assets/frontend/img/photo/6.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1"  class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>

</section>

            @endsection

@push('js')

@endpush