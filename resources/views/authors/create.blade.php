@extends('master')

@section('title', 'Create author')



@section('content')
  <h1>This is the Create Author page</h1>
  <form method="POST" action="/authors">
    @csrf
    <!--@method('PATCH')-->
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="last_name" name="last_name">
    <input type="text" placeholder="age" name="age">
    <input type="text" placeholder="country" name="country">
    <input type="text" placeholder="city" name="city">
    <button class="btn btn-primary">Submit</button>
  </form>
  
@endsection