<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function index(){
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create(){
        return view('authors.create');
    }

    public function store(){
        $author = new Author;
        $author->name = request('name');
        $author->last_name = request('last_name');
        $author->age = request('age');
        $author->country = request('country');
        $author->city = request('city');
        $author->save();
        return redirect('/authors');
    }


}
