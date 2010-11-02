<?php
/*
resource2formit
    Author : Bruno17
    URL : http://modxcms.com/forums/index.php?topic=54204.0
*/

if (isset($_GET['resId'])){
    if ($doc=$modx->getObject('modResource',array('id'=>$_GET['resId']))){
        $docarray=$doc->toArray();
        $fields = explode(',',$scriptProperties['resource2formitfields']);
        $fields[] = 'id';

        foreach ($fields as $field){
       
            if ($doc->getFieldName($field) === null) {
                /* if field isnt defined, look for TV value */
                $tvValue = $doc->getTVValue($field);
                if ($tvValue !== null) {
                    $hook->setValue($field,$tvValue);
                }
            } else {
                /* otherwise get field value */
                $hook->setValue($field,$docarray[$field]);
            }    
        }
    }

    //$errorMsg = '<pre>'.print_r($docarray,true).'</pre>';  
    //$hook->addError('error_message',$errorMsg);  
}


return true;