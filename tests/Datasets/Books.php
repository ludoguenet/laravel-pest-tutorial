<?php

dataset('books', [
    fn () => App\Models\Book::factory(20)->create(),
]);
