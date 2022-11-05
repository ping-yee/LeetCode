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
     * The length of current node list.
     *
     * @var int
     */
    public static $length;

    function __construct()
    {
        $this->head = null;
    }

    public function index(): array
    {
        $allNodeArr = [];
        $current    = $this->head;

        while ($current != null) {
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
            if ($current->getValue() === $value) {
                return $current;
            }

            $current = $current->getNext();
            $count++;
        }

        return null;
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
        
        self::$length++;
        
        return $this->head->getValue() === $value;
    }

    public function append(int $index, mixed $value): bool
    {
        if ($this->head === null || $index > self::$length - 1) {
            // throw some exception.
            return false;
        }

        $count    = 0;
        $current  = $this->head;

        while ($index >= $count) {
            if ($count === $index) {
                $current->setNext(new Node($value, $current->getNext()));
                return true;
            }

            $current = $current->getNext();
            
            $count++;
        }

        return true;
    }

    public function removeFirst(): bool
    {
        if ($this->head === null) {
            // Throw some exception.
            return true;
        } else {
            $this->head = $this->head->getNext();
        }

        self::$length--;
        return true;
    }

    public function remove(int $index): bool
    {
        if ($this->head === null || $index > self::$length - 1) {
            // throw some exception.
            return false;
        }

        $count   = 0;
        $prevous = $this->head;
        $current = $this->head;

        while ($index >= $count) {
            if ($index === $count) {
                $prevous->setNext($current->getNext());
            }

            if ($count === 0) {
                $current = $current->getNext();
            } else {
                $prevous = $current;
                $current = $current->getNext();
            }

            $count++;
        }
        return true;
    }
}
