@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')
<div class="container">
<div class ="jumbotron">
<div class="row">
<h1><strong>Prescription Form</strong</h1>
<form method="POST" action="{{route('prescription.store')}}" enctype="mutlipart/form-data">
@csrf
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
<br/>
<br/>
<div class="form-group">
<label for="">Enther Medicine</label>

<input type="string" class="form-control" name="med_name"  placeholder="Enter Medicine">
</div>
<br/>
<div class="form-group">
<label for="">Enther age</label>
<input type="string" class="form-control" name="age" placeholder="Enter age" />
</div>
<div class="form-group">
<label for="">Enther blood group</label>
<input type="string" class="form-control" name="blood" placeholder="Enter blood group" />
</div>
<div class="form-group">
<label for="">Enther diease</label>
<input type="string" class="form-control" name="diease" placeholder="Enter diease" />
</div>
<div class="form-group">
<label for="">Test</label>
<input type="string" class="form-control" name="test" placeholder="Enter Medicine" />
</div>
<div class="form-group">
<input type="file" name="image" >
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Add Prescription</button>
</div>

</div>
</div>
</div>
<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
@endsection
@push('js')

@endpush