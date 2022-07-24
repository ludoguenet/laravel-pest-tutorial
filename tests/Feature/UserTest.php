<?php

declare(strict_types=1);

use App\Models\User;

beforeEach(fn () => User::factory(10)->create());

it('has 10 users', function () {
    expect(User::count())->toEqual(10);
});

it('checks that 10 is superior than 5', function () {
    expect(10)->toBeGreaterThan(5);
});
