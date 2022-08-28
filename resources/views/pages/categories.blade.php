@extends('layouts.master')
@section('content')
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Total Active Posts</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->status == 1 ? 'Active' : 'Inactive' }}</td>
      @if($category->posts->count()>0)
      <td>{{ $category->posts->count() }}</td>
      @else
      <td>No Post</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection