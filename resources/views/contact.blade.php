@extends('master')

@section('title', 'Contact us')



@section('content')
  <h1>This is the contact page</h1>
  <p>
    <ul>
    @foreach($books as $book)
      <li>{{$book}}</li>
    @endforeach
    </ul>
  </p>
@endsection