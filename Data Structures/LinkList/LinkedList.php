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
        $allNodeArr = [];

        while ($this->tail === null) {
            $allNodeArr[] = $this->head;
        }
        
        return $allNodeArr;
    }

    public function search(mixed $value): ?Node
    {
        return new Node(1, null);
    }

    public function insert(mixed $value): bool
    {
        if ($this->head === null) {
            $this->head = new Node($value, null);
        } else {
            while ($this->tail === null) {
                $oldNode = $this->head;
                $this->head = new Node($value, $oldNode);
            }
        }
        return $this->head->value === $value;
    }

    public function append(int $index, mixed $value): bool
    {
        return true;
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
