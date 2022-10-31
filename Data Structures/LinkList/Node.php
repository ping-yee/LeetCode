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
     * @var Node
     */
    protected Node $next;

    function __construct(mixed $value, ?Node $next)
    {
        $this->value = $value;
        $this->next  = $next;
    }
}
