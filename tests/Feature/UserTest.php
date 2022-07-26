<?php

declare(strict_types=1);

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

//beforeEach(fn () => Book::factory(20)->create());

it('has 10 users', function (Collection $users, Collection $books) {
    dump(
        $users->count(),
        $books->count(),
    );

    expect(User::count())->toEqual(30);
    expect(Book::all())->toHaveCount(20);
})->with('users', 'books');

test('checks that 10 is superior than 5', function () {
    expect(10)->toBeGreaterThan(5);
});
