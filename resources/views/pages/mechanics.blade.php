@extends('layouts.master')
@section('content')
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Mechanic Name</th>
      <th scope="col">Car Model</th>
      <th scope="col">Car Owner</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($mechanics as $mechanic)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $mechanic->name }}({{ $mechanic->phone }})</td>
      <td>{{ $mechanic->car->model ?? 'N/A' }}</td>
      <td>{{ $mechanic->car->owner->name ?? 'N/A' }}({{ $mechanic->car->owner->phone ?? 'N/A' }})</td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection