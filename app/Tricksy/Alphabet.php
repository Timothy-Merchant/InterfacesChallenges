<?php

declare(strict_types=1);

namespace App\Tricksy;

// 1. Before the first iteration of the loop, Iterator::rewind() is called.
// 2. Before each iteration of the loop, Iterator::valid() is called.
// 3a. It Iterator::valid() returns false, the loop is terminated.
// 3b. If Iterator::valid() returns true, Iterator::current() and
// Iterator::key() are called.
// 4. The loop body is evaluated.
// 5. After each iteration of the loop, Iterator::next() is called and we repeat from step 2 above.


use Iterator;

class Alphabet implements Iterator
{
    private $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        $this->position = 65;
    }

    public function current()
    {
        return chr($this->position);
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
        return $this->position < 91;
    }
}
