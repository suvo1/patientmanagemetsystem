
      @extends('layouts.backend.app')

@section('title','appointment')

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
                EDIT Appointment
                </h2>
                </div>
                <div class="body">
                    <form action="{{route('patient.appointment.update',$appointment->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
<label for="">Select Doctor Name</label><br/>
<?php
          $host = "localhost";
          $user = "root";
          $password = "";
          $db = "dms";

          $con = mysqli_connect($host,$user,$password,$db);

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

<div class="form-group form-float">

<div class="form-group">
<label for="">Enther Your name</label>
<input type="string" class="form-control" name="appointment_takenby"  value="{{$appointment->appointment_takenby}}"/>
</div>
<br/>
<div class="form-group">
<label for="">Enther Date</label>
<input type="date" class="form-control" name="date" placeholder="Enter date" value="{{$appointment->date}}" />
</div>
<div class="form-group">
<label for="">Enther Time</label>
<input type="string" class="form-control" name="time" placeholder="Enter time" value="{{$appointment->time}}"/>
</div>
</div>
</div>
</div>
<button type="submit"  class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a class="btn btn-danger m-t-15 waves-effect" href="{{route('patient.appointment.index')}}">BACK</a>
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
