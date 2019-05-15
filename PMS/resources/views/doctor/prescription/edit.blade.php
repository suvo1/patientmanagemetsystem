@extends('layouts.backend.app')

@section('title','prescription')

@push('css')
@endpush

@section('content')
<div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                <h2>
                EDIT Prescription
                </h2>
                </div>
                <div class="body">
                    <form action="{{route('doctor.prescription.update',$prescription->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
<label for="">Select Patient Name</label><br/>
<?php
$host ="localhost";
$user="root";
$password="";
$db="dms";
$con=mysqli_connect($host,$user,$password,$db);
if(!$con)
{
    echo mysqli_connect_error($con);
}
$sql = "SELECT name from users WHERE role_id=3";
$result = mysqli_query($con,$sql);
print '<select name="patient_name">';
print '<option style="display:none">';
while($row=mysqli_fetch_array($result))
{
    print '<option value="'.$row['name'].'">'.$row['name'].'</option>';

}
print '</select>';
?>
</div>

<div class="form-group form-float">

<div class="form-group">
<label for="">Enther Medicine</label>
<input type="string" class="form-control" name="med_name" placeholder="Enter Medicine" value="{{$prescription->med_name}}"/>
</div>
<br/>
<div class="form-group">
<label for="">Enther age</label>
<input type="string" class="form-control" name="age" placeholder="Enter age" value="{{$prescription->age}}" />
</div>
<div class="form-group">
<label for="">Enther blood group</label>
<input type="string" class="form-control" name="blood_group" placeholder="Enter blood group" value="{{$prescription->blood_group}}"/>
</div>
<div class="form-group">
<label for="">Enther the name of diease</label>
<input type="string" class="form-control" name="disease" placeholder="Enter the name" value="{{$prescription->disease}}"/>
</div>
<div class="form-group">
<label for="">Test</label>
<input type="string" class="form-control" name="test" placeholder="Ente the test name" value="{{$prescription->test}}"/>
</div>
<div class="form-group">
<input type="file" name="image"  value="{{$prescription->image}}">
</div>
</div>
</div>
<button type="submit"  class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a class="btn btn-danger m-t-15 waves-effect" href="{{route('doctor.prescription.index')}}">BACK</a>
</form>
</div>
</div>
</div>
</div>
</div>
            <!-- Vertical Layout | With Floating Label -->
            
            <!-- #END# Multi Column -->
        </div>
        </div>

@endsection

@push('js')

@endpush