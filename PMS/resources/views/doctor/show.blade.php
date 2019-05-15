@extends ('layouts.backend.app')

@section('content')

<br>
<br>
 <div class="container">
 <ol class="breadcrumb">
      <li>
      <a href="javascript:void(0);">
        <i class="material-icons">home</i>Doctor Dashboard
      </a>
      </li>
      <li class="active">
        <i class="material-icons">library_books</i> All Doctor List
      </li>
    </ol>
 <div class="jumbotron">
 <table class="table table-striped table-bordered table-hover">
 <thead class="thead">
 <tr class="warning">
 <th>Role Id</th>
 <th>Name</th>
 <th>User Name</th>
 <th>Email</th>
 </tr>
 @foreach($doctor as $doctor)
 <tbody>
<tr>
<td>{{$doctor->role_id}}</td>
<td>{{$doctor->name}}</td>
<td>{{$doctor->username}}</td>
<td>{{$doctor->email}}</td>
<th>
</th>

<tr>
</tbody>

@endforeach

</table>
<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
@endsection