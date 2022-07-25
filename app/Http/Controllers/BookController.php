<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function store(Request $request): Response
    {
        auth()->user()->books()->create(
            $request->only(['title', 'content', 'price'])
        );

        return response('Book Created');
    }
}
