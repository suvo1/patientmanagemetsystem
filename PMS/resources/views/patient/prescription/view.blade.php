@extends('layouts.backend.app')

@section('title','Presciption')

@push('css')
<!-- JQuery DataTable Css -->
<link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush

@section('content')

<tr>
       <h3>{{$prescription->doctor_name}}</h3>                                     
<h3>Patient Name: {{ $prescription->patient_name }}</h3>
<h3>Medicine: {{ $prescription->med_name }}</h3>
<h3>Age: {{ $prescription->age}}</h3>
<h3>Blood Group: {{ $prescription->blood_group }}</h3>
<h3>Diease: {{ $prescription->disease }}</h3>
<h3>Test: {{ $prescription->test }}</h3>

</tr>

<a class="btn btn-danger m-t-15 waves-effect" href="{{route('patient.prescription.index')}}">BACK</a>
@endsection

@push('js')