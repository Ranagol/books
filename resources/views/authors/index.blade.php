@extends('master')

@section('title', 'Index')



@section('content')
  <h1>This is the Authors/index page</h1>
  <p>
    <ul>
      @foreach($authors as $author)
        <li>{{ $author->name }}</li>
      @endforeach
    </ul>
  </p>
@endsection