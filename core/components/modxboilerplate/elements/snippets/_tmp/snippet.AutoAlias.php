<?php
echo 'Setting Aliases';
$resources = $modx->getCollection('modResource', array('class_key'=>'modDocument'));

if (empty($resources)) {
    return "No Resources Found";
}

foreach ($resources as $resource) {
    if ($resource->get('alias') == '') {
        $resource->set('alias',$resource->cleanAlias($resource->get('pagetitle')));
        $resource->save();
    }
} 

return '<br />Done!';​