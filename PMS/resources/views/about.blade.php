@extends('layouts.frontend.app')
@push('css')

@endpush
@section('content')
<br>
<br>
<br>
<br>
<br>			
	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">
		<div class="section-heading text-center">
	<h2 class="h-bold">Our Services</h2>		
</div>
<br>
        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<img src="{{asset('assets/frontend/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-stethoscope fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Medical checkup</h5>
						<p>It has been told over and over again by doctors that one needs to have regular medical check-ups to keep track of their health.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-wheelchair fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Nursing Services</h5>
						<p>We have the better Nursing Services for your endless care.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-plus-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Pharmacy</h5>
						<p>We have best pharmacy option for your needs.</p>
					</div>
                </div>
				</div>


            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-h-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Gyn Care</h5>
						<p>At The Center for Innovative GYN Care, our board-certified surgical specialists have redefined minimally invasive GYN care.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-filter fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Neurology</h5>
						<p>We have best Neurologist for Neurology Department.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Sleep Center</h5>
						<p>Sleep studies are tests that record the activity of the body during sleep.We have this facilities.</p>
					</div>
                </div>
				</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
@endsection

@push('js')

@endpush