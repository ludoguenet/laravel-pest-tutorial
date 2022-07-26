<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class)->in('Unit', 'Feature');

function helloHelper(): void
{
    dump('helloHelper!');
}
