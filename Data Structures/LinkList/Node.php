<?php

namespace DS\LinkList;

class Node
{
    /**
     * The value of current node.
     *
     */
    protected $value;

    /**
     * Point to next node.
     *
     * @var Node|null
     */
    protected ?Node $next;

    public function __construct(mixed $value, ?Node $next)
    {
        $this->value = $value;
        $this->next  = $next;
    }

    /**
     * Get the current value.
     *
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * Get the next node.
     *
     * @return Node|null
     */
    public function getNext(): ?Node
    {
        return $this->next;
    }

    /**
     * Set the value of currnet node.
     *
     * @param mixed $value
     * @return Node
     */
    public function setValue(mixed $value): Node
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the next node of current node.
     *
     * @param Node|null $node
     * @return Node
     */
    public function setNext(?Node $node): Node
    {
        $this->next = $node;

        return $this;
    }
}
