<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\DataObjects\BookDto;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use JustSteveKing\DataObjects\Contracts\HydratorContract;

class BookController extends Controller
{
    public function __construct(
        private readonly HydratorContract $hydrator,
    )
    {
    }

    public function store(Request $request): Response
    {
        Book::query()->create(
            attributes: $this->hydrator->fill(
                class: BookDto::class,
                properties: $request->only(['title', 'content', 'price', 'user_id']),
            )->toArray()
        );

        return response('Book Created');
    }
}
