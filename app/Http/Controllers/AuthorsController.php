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

    public function show(Author $author){
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author){
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author){
        $author->name = request('name');
        $author->last_name = request('last_name');
        $author->age = request('age');
        $author->country = request('country');
        $author->city = request('city');
        $author->save();
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function destroy(Author $author){
        $author->delete();
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }


}
