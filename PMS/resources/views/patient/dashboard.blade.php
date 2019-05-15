@extends('layouts.backend.app')
@section('title','Dashboard')

@push('css')

@endpush

@section('content')
<div class="container-fluid">
            <div class="block-header">
			<div class="body">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="material-icons">home</i>Patient Dashboard
                    </li>
                </ol>
            </div>
			<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-indigo">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW PATIENT</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-cyan">
                            <i class="material-icons">gps_fixed</i>
                        </div>
                        <div class="content">
                            <div class="text">LOCATION</div>
                            <div class="number">Dhaka</div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-deep-purple">
                            <i class="material-icons">favorite</i>
                        </div>
                        <div class="content">
                            <div class="text">PATIENT LIKES</div>
                            <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">PMS GROWTH %</div>
                            <div class="number">62%</div>
                        </div>
                    </div>
                </div>
        </div>
</div>
<div class="row clearfix">
                <!-- Examples With Material Design Colors -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
					<div class="header">
                            <h2>
                                Client’s Feedback
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group" id="accordion_10" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingOne_10">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseOne_10" aria-expanded="true" aria-controls="collapseOne_10">
                                                    MD. Mamun
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_10">
                                                <div class="panel-body">
                                                Each and every doctor fulfilled their duties and responsibilities, all staff are well behaved – always smiling and maintaining their work as well.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingTwo_10">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseTwo_10" aria-expanded="false"
                                                       aria-controls="collapseTwo_10">
                                                        Mrs. Mithila
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_10">
                                                <div class="panel-body">
                                                All are very much cordial – all the doctors, nurses and other staff really nice – they are good souls and kind hearted – best wishes to them.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingThree_10">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseThree_10" aria-expanded="false"
                                                       aria-controls="collapseThree_10">
                                                       Raufa Rahman
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_10">
                                                <div class="panel-body">
                                                Nurses are well behaved and cooperative - doctors and other staff are well mannered - we feel very happy and comfortable here.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Examples With Material Design Colors -->
                <!-- Full Body Examples With Material Design Colors -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Servicing Hours
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_14" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingOne_14">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_14" href="#collapseOne_14" aria-expanded="true" aria-controls="collapseOne_14">
                                                    Monday-Friday
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_14" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_14">
                                                <div class="panel-body">
                                                <span>08.00 am - 10.00 am,</span>
										<span>08.00 pm - 10.00 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingTwo_14">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_14" href="#collapseTwo_14" aria-expanded="false"
                                                       aria-controls="collapseTwo_14">
                                                       Saturday
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_14">
                                                <div class="panel-body">
                                                <span>09.00 am - 10.00 am,</span>
										<span>09.00 pm - 10.00 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-cyan">
                                            <div class="panel-heading" role="tab" id="headingThree_14">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_14" href="#collapseThree_14" aria-expanded="false"
                                                       aria-controls="collapseThree_14">
                                                       Sunday
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_14">
                                                <div class="panel-body">
                                                <span>09.00 am - 11.00 am,</span>
										<span>09.00 am - 11.00 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Full Body Examples With Material Design Colors -->
</div>
@endsection

@push('js')

@endpush
