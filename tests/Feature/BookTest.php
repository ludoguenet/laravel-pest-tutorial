<?php

declare(strict_types=1);

use App\Models\Book;

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\post;

it('stores a user book', function () {
    expect(Book::all())->toHaveCount(0);

    actingAs(User::factory()->create())
        ->post('books', [
        'title' => 'Harry Potter & la Chambre des Secrets',
        'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia animi corrupti provident blanditiis amet inventore laborum possimus eveniet adipisci eaque.',
        'price' => 1500,
    ])->assertOk();

    expect(Book::all())->toHaveCount(1);
    expect(Book::first())->toBeInstanceOf(Book::class);
    expect(Book::first()->price)->toEqual(1500);
});
