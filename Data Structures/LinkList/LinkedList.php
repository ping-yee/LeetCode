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

    function __construct()
    {
        $this->head = null;
    }

    public function index(): array
    {
        $allNodeArr = [];
        $current    = $this->head;

        while ($current != null) {
            echo $current->getValue() . '->';
            array_push($allNodeArr, $current->getValue());
            $current = $current->getNext();
        }
        
        return $allNodeArr;
    }

    public function search(mixed $value): ?Node
    {
        $current = $this->head;
        $count   = 0;

        while ($current != null) {
            if ($current->value === $value) {
                return $current;
            }

            $current = $current->getNext();
            $count++;
        }
        return new Node(1, null);
    }

    public function insert(mixed $value): bool
    {
        if ($this->head === null) {
            $this->head = new Node($value, null);
        } else {
            $current = $this->head;
            $newNode = new Node($value, $current);
            $this->head = &$newNode;
        }
        return $this->head->getValue() === $value;
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
