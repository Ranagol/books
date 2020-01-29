@extends('master')

@section('title')



@section('content')
  <h1>This is the Edit Author page</h1>
  <form method="POST" action="/authors/{{$author->id}}">
    @csrf
    @method("PATCH")
    <div>Name: <input type="text" placeholder="name" name="name" value="{{ $author->name }}"></div>
    <div>Last name: <input type="text" placeholder="last_name" name="last_name" value="{{ $author->last_name }}"></div>
    <div>Age: <input type="text" placeholder="age" name="age" value="{{ $author->age }}"></div>
    <div>Country: <input type="text" placeholder="country" name="country" value="{{ $author->country }}"></div>
    <div>City: <input type="text"  name="city" value="{{ $author->city }}"></div>
    <a class="btn btn-info" href="/authors/{{ $author->id }}">Update author</a>
  </form>

  
@endsection