<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Associates TVs to Templates
 *
 * @package modxboilerplate 
 * @subpackage build
 */

if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            /* list of tvs and templates for each */
            $tvs = array(
                'tags' => array('MODx Boilerplate'),
                'articleAfter' => array('MODx Boilerplate'),
                'articleBefore' => array('MODx Boilerplate'),
                'aside-color' => array('Master.css'),
                'aside-width' => array('Master.css'),
                'bg-color' => array('Master.css'),
                'body-color' => array('Master.css'),
                'body-width' => array('Master.css'),
                'contentAfter' => array('MODx Boilerplate'),
                'contentBefore' => array('MODx Boilerplate'),
                'customCSS' => array('MODx Boilerplate'),
                'customRSS' => array('MODx Boilerplate'),
                'main-width' => array('Master.css'),
                'selection' => array('Master.css'),
            );

            foreach ($tvs as $tvName => $templateNames) {
                if (!is_array($templateNames) || empty($templateNames)) continue;

                $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                if (empty($tv)) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                    continue;
                }

                $rank = 0;
                foreach ($templateNames as $templateName) {
                    $template = $modx->getObject('modTemplate',array('templatename' => $templateName));

                    if (!empty($template)) {
                        $templateVarTemplate = $modx->getObject('modTemplateVarTemplate',array(
                            'tmplvarid' => $tv->get('id'),
                            'templateid' => $template->get('id'),
                        ));
                        if (!$templateVarTemplate) {

                            $templateVarTemplate = $modx->newObject('modTemplateVarTemplate');
                            $templateVarTemplate->fromArray(array(
                                'tmplvarid' => $tv->get('id'),
                                'templateid' => $template->get('id'),
                                'rank' => $rank,
                            ),'',true,true);

                            if ($templateVarTemplate->save() == false) {
                                $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Template '.$templateName);
                            }
                        }
                    } else {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find Template '.$templateName);
                    }
                    $rank++;
                }
            }
            break;
    }
}
return true;