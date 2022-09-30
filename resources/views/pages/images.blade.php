@extends('layouts.master')
@section('content')
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Table Name</th>
      <th scope="col">Image path/url</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($images as $image)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>
        {{ $image->imageable->getTable() }}
        @if($image->imageable->getTable() == 'profiles') 
        ({{$image->imageable->user->name}})
        @else   
        ({{ $image->imageable->name }})
        @endif  
      </td>
      <td>{{ $image->url }}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection