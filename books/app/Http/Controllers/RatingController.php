<?php

namespace App\Http\Controllers;

use App\Http\Resources\RatingResource;
use App\Models\Book;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $rating = Rating::firstOrCreate(
            [
                'user_id' => $request->user()->id,
                'book_id' => $book->id,
            ],
            ['rating' => $request->rating]
        );

        return new RatingResource($rating);
    }

    public function storerating(Request $request)
    {

        $rating = Rating::firstOrCreate(
            [
                'user_id' => $request->user_id,
                'book_id' => $request->book_id,
                'rating' => $request->rating,
            ]
        );

        return new RatingResource($rating);
    }

    public function showForm()
    {
        $users = User::all();
        $books = Book::all();

        return view('insertrating', compact("users", "books"));
    }
}
