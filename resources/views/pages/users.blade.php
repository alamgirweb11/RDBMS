@extends('layouts.master')
@section('content')
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Roles & Expired Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->profile->phone }}</td>
      <td>{{ $user->profile->city }}</td>
      <td>
        @foreach ($user->roles as $role)
        {{ $role->name }}, <small>Expired at({{ $role->pivot->expired_at }})</small>
        @endforeach
        </td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection