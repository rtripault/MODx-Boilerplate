<?php
/*
FormIt2Resource
    Author : Bruno17
    URL : http://modxcms.com/forums/index.php?topic=54204.0
*/
$doc = $modx->getObject('modResource',array('id'=>$hook->getValue('resource_id')));

if (empty($doc)){
    $doc = $modx->newObject('modResource');
    $doc->set('createdby', $modx->user->get('id'));
}
else{
    $doc->set('editedby', $modx->user->get('id'));
}

$allFormFields = $hook->getValues(); 
foreach ($allFormFields as $field=>$value)
{

   if ($field !== 'spam' && $field !== 'resource_id'){
         $doc->set($field, $value);
    }
}


$doc->set('template', '1');
$doc->save();

foreach ($allFormFields as $field=>$value)
{
    if ($tv = $modx->getObject('modTemplateVar', array ('name'=>$field)))
    {
        /* handles checkboxes & multiple selects elements */
        if (is_array($value)) {
            $featureInsert = array();
            while (list($featureValue, $featureItem) = each($value)) {
                $featureInsert[count($featureInsert)] = $featureItem;
            }
            $value = implode('||',$featureInsert);
        }	
        $tv->setValue($doc->get('id'), $value);
        $tv->save();
    }
}

return true;
?>