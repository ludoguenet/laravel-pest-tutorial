<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

// beforeEach(fn () => User::factory(10)->create());

it('has 10 users', function (Collection $users) {
    expect(User::count())->toEqual(10);
})->with('users');

it('checks that 10 is superior than 5', function () {
    expect(10)->toBeGreaterThan(5);
});
