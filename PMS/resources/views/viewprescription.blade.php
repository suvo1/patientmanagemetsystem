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
      <th> Patient Name </th>
      <th> Medicine </th>
      <th>Image</th>
      <th> Update </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($prescription as $prescription)
      <tbody>
      <tr>
      <td>{{ $prescription->id}}</td>
      <td>{{ $prescription->patient_name}}</td>
      <td>{{ $prescription->med_name}}</td>
      <td>{{$prescription->image}}</td>
      <th><a href="{{action('PrescriptionController@edit',$prescription['id'])}}" class="btn btn-success">
              Edit</a>
      </th>
      <th>
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
