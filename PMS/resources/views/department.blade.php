@extends('layouts.frontend.app')
@push('css')
@endpush
@section('content')	
<br>
<br>
<br>
<br>
<br>
<section class="offered-service-area dep-offred-service">
				<div class="container">
					<div class="row offred-wrap section-gap">
						<div class="col-lg-8 offered-left">
							<h1>A&E Skill Lab</h1>
							<p>
							The rapid changes in the teaching and learning methods in medical field along with tremendous growth of technology challenged the traditional way of clinical skills development that led to the emergence of clinical skills laboratories (CSLs) or Skill Labs worldwide. This Skill Lab teaches emergency physicians and nurses the critical skills that are needed for critical patient management and allows practicing procedures that are performed on day-to-day basis in the emergency department.

Skill Labs provide a safe and protected environment in which the learner can practice clinical skills before using them in real clinical settings. Worldwide, the first Skill Lab was established in Maastricht, The Netherlands Limburg University in 1976.

Since then many medical schools and educational institutions have integrated Skill Labs into their curricula. Currently, Skill Labs have been established in several innovative medical schools including the University of Leeds, Dundee, Dublin, Southampton, Liverpool, and the Imperial College. In the Arab world, the United Arab Emirates University was the first to establish Skill Labs in 1988.
							</p>
							<h1>Departments > Service Location</h1>
							
							<h4>1st Floor -</h4>
                           <p> Cardiology, Cardiac Surgery, Diabetes & Endocrinology, Family Medicine, Health Screening, Nephrology, Gastroenterology & Hepatology, Dermatology, Thoracic Surgery
							</p>
							
							<h4>2nd Floor -</h4>
							<p>Critical Care, Haemodialysis, Laboratory, Nephrology, Gastroenterology & Hepatology
							</p>
							
							<h4>3rd Floor -</h4>
							<p>ENT & Head Neck Surgery, Urology, Ophthalmology

							</p>

							<div class="service-wrap row">
								<div class="col-lg-6 col-md-6">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="{{asset('assets/frontend/img/s1.jpg')}}" alt="">		
										</div>
										<a href="#">
											<h4>Cardiac Treatment</h4>
										</a>	
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="single-service">
										<div class="thumb">
											<img class="img-fluid" src="{{asset('assets/frontend/img/s2.jpg')}}" alt="">		
										</div>
										<a href="#">
											<h4>Routine Checkup</h4>
										</a>
									</div>
								</div>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="offered-right relative sidebar-offered-service">
								<div class="overlay overlay-bg"></div>
								<h3>Departments</h3>
								<ul class="relative dep-list">
									<li><a >Cardiology</a></li>
									<li><a >Cardiac Surgery</a></li>
									<li><a >Diabetes & Endocrinology</a></li>
									<li><a >Family Medicine</a></li>
									<li><a >Health Screening</a></li>
									<li><a >Nephrology</a></li>
									<li><a > Dermatology</a></li>
									<li><a > Critical Care</a></li>
									<li><a > Nephrology</a></li>
									<li><a > ENT & Head Neck Surgery</a></li>
									<li><a > Gastroenterology & Hepatology</a></li>
								</ul>		
							</div>	

							<div class="appointment-left sidebar-service-hr">
								<h3 class="pb-20">
									Servicing Hours
								</h3>
								<ul class="time-list">
								<li class="d-flex justify-content-between">
										<span>Monday-Friday</span>
										<br>
										<span>08.00 am - 10.00 am</span>
										<span>08.00 pm - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Saturday</span>
										<br>
										<span>09.00 am - 10.00 am</span>
										<span>09.00 pm - 10.00 pm</span>
									</li>
									<li class="d-flex justify-content-between">
										<span>Sunday</span>
										<br>
										<span>09.00 am - 11.00 am</span>
										<span>09.00 am - 11.00 pm</span>
									</li>																
								</ul>
							</div>													
						</div>
					</div>
				</div>	
			</section>

@push('js')
@endpush