<?php

$count = 0;
$parent = isset($parent) ? (integer) $parent : 0;
if ($parent > 0) {
    $criteria = array(
        'parent' => $parent,
        'deleted' => false,
        'published' => true,
    );
    $count = $modx->getCount('modResource', $criteria);
}
return (string) $count;