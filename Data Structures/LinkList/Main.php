<?php

namespace DS\LinkList;

require_once __DIR__ . '/LinkedList.php';

use DS\LinkList\LinkedList;

$list = new LinkedList();

$list->insert(1);

$list->insert("23");

$list->insert("34");

$list->insert("45");

print_r($list->index());

$list->removeFirst();

$list->append(2, "234");

print_r($list->index());

$list->remove(2);

print_r($list->index());

print_r($list->search("34"));
