@extends('master')

@section('title')



@section('content')
  <h1>This is the Show Author page</h1>
  <p>
    <div>Name: {{ $author->name }}</div>
    <div>Last name: {{ $author->last_name }}</div>
    <div>Age: {{ $author->age }}</div>
    <div>Country: {{ $author->country }}</div>
    <div>City: {{ $author->city }}</div>
    <a class="btn btn-info" href="/authors/{{ $author->id }}/edit">Edit author</a>
  </p>
 
  
@endsection