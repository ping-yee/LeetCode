<?php

namespace DS\LinkList;

require_once __DIR__ . '/LinkedListInterface.php';
require_once __DIR__ . '/Node.php';

use DS\LinkList\Node;
use DS\LinkList\LinkedListInterface;

class LinkedList implements LinkedListInterface
{
    /**
     * The head node of LinkedList.
     *
     * @var Node
     */
    protected $head;

    /**
     * The tail node of LinkedList.
     *
     * @var Node
     */
    protected $tail;

    public function index(): array
    {
        return [];
    }

    public function search(mixed $value): ?Node
    {
        return new Node();
    }

    public function insert(mixed $value): LinkedListInterface
    {
        return $this;
    }

    public function append(int $index, mixed $value): LinkedListInterface
    {
        return $this;
    }

    public function removeFirst(): bool
    {
        return true;
    }

    public function remove(int $index): bool
    {
        return true;
    }
}
