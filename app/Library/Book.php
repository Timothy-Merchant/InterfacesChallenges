<?php

declare(strict_types=1);

namespace App\Library;

class Book implements Titled
{

    private $title;
    private $pages;
    private $pagesRead = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function read(int $pagesRead): void
    {
        $this->pagesRead += $pagesRead;
    }

    public function currentPage(): int
    {
        return $this->pagesRead;
    }
}
