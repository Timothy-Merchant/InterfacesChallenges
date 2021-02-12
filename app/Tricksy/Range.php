<?php

declare(strict_types=1);

namespace App\Tricksy;

use Iterator;

// 1. Before the first iteration of the loop, Iterator::rewind() is called.
// 2. Before each iteration of the loop, Iterator::valid() is called.
// 3a. It Iterator::valid() returns false, the loop is terminated.
// 3b. If Iterator::valid() returns true, Iterator::current() and
// Iterator::key() are called.
// 4. The loop body is evaluated.
// 5. After each iteration of the loop, Iterator::next() is called and we repeat from step 2 above.

class Range implements Iterator
{
    private $lower;
    private $upper;
    private $position;

    public function __construct($lower, $upper)
    {
        $this->lower = $lower;
        $this->upper = $upper;
    }

    public function rewind()
    {
        $this->position = $this->lower;
    }

    public function current()
    {
        return "{$this->position}";
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return $this->position <= $this->upper;
    }
}
