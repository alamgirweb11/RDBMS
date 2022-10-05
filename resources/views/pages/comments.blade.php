@extends('layouts.master')
@section('content')
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Table Name</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comments as $comment)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>
        {{ $comment->commentable->getTable() }}
        @if($comment->commentable->getTable() == 'videos') 
        ({{$comment->commentable->user->name}})
        @else   
        ({{ $comment->commentable->title }})
        @endif  
      </td>
      <td>{{ $comment->body }}</td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection