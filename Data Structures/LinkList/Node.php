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

    function __construct(mixed $value, ?Node $next)
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
}
