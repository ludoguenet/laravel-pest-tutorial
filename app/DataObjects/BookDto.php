<?php

declare(strict_types=1);

namespace App\DataObjects;

use JustSteveKing\DataObjects\Contracts\DataObjectContract;

final class BookDto implements DataObjectContract
{
    public function __construct(
        readonly string $title,
        readonly string $content,
        readonly int $price,
        readonly int $user_id,
    ) {}

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'price' => $this->price,
            'user_id' => $this->user_id,
        ];
    }
}
