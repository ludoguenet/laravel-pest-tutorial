<?php

dataset('users', [
    fn () => App\Models\User::factory(10)->create(),
]);
