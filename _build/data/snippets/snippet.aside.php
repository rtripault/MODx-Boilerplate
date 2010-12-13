<?php
/* build a query to get Resources with a given parent that are published and not deleted */
$query = $modx->newQuery('modResource', array('parent' => 147, 'deleted' => false, 'published' => true));

/* to optimize, you can select only the columns you need */
// $query->select($modx->getSelectColumns('modResource', 'modResource', '', array('id', 'class_key', 'context_key')));

/* get the modResource objects with the given parent */
$children = $modx->getCollection('modResource', $query);

/* loop through the children and push the id onto $resourceIds */
$resourceIds = "";
$i=0;
foreach ($children as $child) {
  if ($i!=0) {
    $resourceIds .= "||";
  }
   $resourceIds .= $child->get('pagetitle');
   $resourceIds .= "==";
   $resourceIds .= $child->get('id');
  $i++;
}

return $resourceIds;​