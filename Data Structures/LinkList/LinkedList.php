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
    protected $head = null;

    /**
     * The length of current node list.
     *
     * @var int
     */
    public static $length;

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

    public function search(mixed $value): array
    {
        $current = $this->head;
        $count   = 0;
        $result  = [];

        while ($current != null) {
            if ($current->getValue() === $value) {
                $result[$count] = $current;
            }

            $current = $current->getNext();
            $count++;
        }

        return $result;
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
            }

            $current = $current->getNext();

            $count++;
        }

        $searchArr = $this->search($value);

        return isset($searchArr[$index + 1]);
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

        $count    = 0;
        $prevous  = $this->head;
        $current  = $this->head;

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
