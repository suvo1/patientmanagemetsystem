@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')
<div class="container-fluid">
   <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
          <h3>
                                <i>ADD NEW APPOINMENT</i>
                    </h3>
          </div>
          <div class="body">
          <form method="POST" action="{{route('patient.appointment.store')}}">
          @csrf
           <div class="form-group form-float">
           <div class="header">
  <h2>
  Select Doctor Name
  </h2>
</div><br/>

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
          $sql = "SELECT name from users WHERE role_id=2";
          $result = mysqli_query($con,$sql);
          print '<select name="doctor_name">';
          print '<option style="display:none">';
          while($row=mysqli_fetch_array($result))
          {
          print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
          }
          print '</select>';
          ?>
          </div>
          <div class="form-group">
          <div class="header">
  <h2>
  Enter Patient Name
  </h2>
</div>
          <input type="string" class="form-control" name="appointment_takenby" placeholder="Enter Your Name"/>
          </div>
          <br/>
          
          <div class="form-group form-float">
          <div class="header">
  <h2>
  Enter Appointment Date
  </h2>
</div>
          <input type="date" class="form-control" name="date" />
          <div>
          <br/>
          <div class="form-group">
          <div class="header">
  <h2>
  Enter Booking Time
  </h2>
</div>
          <input type="string" class="form-control" name="time" placeholder="morning/evening"/>
          </div>
          <button type="submit"  class="btn btn-primary m-t-15 waves-effect">Submit</button>
          <a class="btn btn-danger m-t-15 waves-effect" href="{{route('patient.appointment.index')}}">BACK</a>
          </div>
          </div>
        <div>
    </div>
</div>
@endsection
@push('js')

@endpush