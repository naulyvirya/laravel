<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = Book::all();
        return $book;
    }

    public function create($judul)
    {
        $book = new Book();
        $book->title = $judul;
        $book->publisher = "Gagas Media";
        $book->pages = 264;
        $book->date = Carbon::now();
        $book->price = 20000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum Doler sit Amet";
        $book->save();
        return $book;
    }

    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }

    public function edit($id, $judul)
    {
        $book = Book::find($id);
        $book->title = $judul;
        $book->publisher = "Gagas Media";
        $book->pages = 264;
        $book->date = Carbon::now();
        $book->price = 20000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum Doler sit Amet";
        $book->save();
        return $book;
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return $book;
    }

    public function select()
    {
        $book = Book::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }

    public function count()
    {
        $book = Book::count();
        return $book;
    }

}
