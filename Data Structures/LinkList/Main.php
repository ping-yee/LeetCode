<?php

namespace DS\LinkList;

require_once __DIR__ . '/LinkedList.php';

use DS\LinkList\LinkedList;

$list = new LinkedList();

$list->insert(1);

$list->insert("23");

print_r($list->index());