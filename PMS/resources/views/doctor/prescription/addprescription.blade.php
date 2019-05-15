@extends('layouts.backend.app')
@section('title','Presciption')
@push('css')

@endpush
@section('content')
<div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h3>
                                <i>ADD NEW PRESCRIPTION</i>
                    </h3>
                </div>
               <div class="body">
               <form method="POST" action="{{route('doctor.prescription.store')}}" enctype="mutlipart/form-data">
               @csrf
               <div class="form-group">
                  <div class="header">
                  <h2>
                  Select Patient Name
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
<div class="header">
  <h2>
  Enter Medicine Name
  </h2>
</div>
<input type="string" class="form-control" name="med_name" data-role="tagsinput" placeholder="Enter Medicine Name"/>
</div>
<br/>
<div class="form-group">
<div class="header">
  <h2>
  Enter Patient Age
  </h2>
</div>
<input type="string" class="form-control" name="age" placeholder="Enter Patient Age" />
</div>
<div class="form-group">
<div class="header">
  <h2>
  Enter Blood Group
  </h2>
</div>
<input type="string" class="form-control" name="blood_group" placeholder="Enter Blood Group" />
</div>
<div class="form-group">
<div class="header">
  <h2>
  Enter Name of the Disease
  </h2>
</div>
<input type="string" class="form-control" name="disease" placeholder="Enter Disease Name" />
</div>
<div class="form-group">
<div class="header">
  <h2>
  Enter Test Name
  </h2>
</div>
<input type="string" class="form-control" name="test" placeholder="Ente the test name" />
</div>
<div class="form-group">
<input type="file" name="image" >
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Submit</button>

<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
</div>

</div>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')

@endpush