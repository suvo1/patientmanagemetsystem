@extends('layouts.backend.app')
@push('css')

@endpush
@section('content')

   <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered table-hover">
     <thead class ="thead">
      <tr class="warning">
      <th> Id </th>
      <th> Docotr Name </th>
      <th> Appoinment Booked By </th>
      <th> Date </th>
      <th> Time </th>
      <th> Update </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($appointment as $appointment)
      <tbody>
      <tr>
      <td>{{ $appointment->id}}</td>
      <td>{{ $appointment->doctor_name}}</td>
      <td>{{ $appointment->appointment_takenby}}</td>
      <td>{{ $appointment->date}}</td>
      <td>{{ $appointment->time}}</td>
      <th><a href="{{action('AppointmentController@edit',$appointment['id'])}}" class="btn btn-success">
              Edit</a>
      </th>
      <th>
      {!!Form::open(['action' => ['AppointmentController@destroy', $appointment->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      </th>
      <tr>
      </tbody>
      @endforeach
      </table>
      </div>
      </div>
      <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
@endsection

@push('js')

@endpush
