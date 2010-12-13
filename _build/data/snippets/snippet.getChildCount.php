<?php
/*  Author : Jason Coward
    Link : http://modxcms.com/forums/index.php/topic,51693.msg300234.html#msg300234
    Usage : [[!getChildCount? &parent=`ID`]]
*/
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