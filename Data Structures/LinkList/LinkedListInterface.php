<?php

namespace DS\LinkList;

require_once __DIR__ . '/Node.php';

use DS\LinkList\Node;

interface LinkedListInterface
{
    /**
     * Get all of current nodes in this list.
     *
     * @return array
     */
    public function index(): array;

    /**
     * Searching the node index by parameter value,
     * and return hint of index and node into array.
     *
     * @param mixed $value
     * @return array
     */
    public function search(mixed $value): array;

    /**
     * Insert the vaule into the first node.
     *
     * @param mixed $value
     * @return LinkedListInterface
     */
    public function insert(mixed $value): bool;

    /**
     * Append the data behind the paramter index node.
     *
     * @param integer $index
     * @param mixed $value
     * @return LinkedListInterface
     */
    public function append(int $index, mixed $value): bool;

    /**
     * Remove the first node.
     *
     * @return boolean
     */
    public function removeFirst(): bool;

    /**
     * Remove the node of index.
     *
     * @param integer $index
     * @return boolean
     */
    public function remove(int $index): bool;
}
