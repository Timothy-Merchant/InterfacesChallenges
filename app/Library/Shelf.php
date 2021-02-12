<?php

declare(strict_types=1);

namespace App\Library;

class Shelf
{

    private $items;

    public function addItem(Titled $item): Shelf
    {
        $this->items[] = $item->title();
        return $this;
    }

    public function titles(): array
    {
        return $this->items;
    }
}
