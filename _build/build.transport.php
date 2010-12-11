<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * MODx Boilerplate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * MODx Boilerplate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * MODx Boilerplate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modxboilerplate
 */
/**
 * modxboilerplate build script
 *
 * @package modxboilerplate 
 * @subpackage build
 */

/**
 * @TODO
 *
 * subpackages should appear in the package grid
 * add MBP stuff (assets)
 * fix provisioner package
 *
 **/

$mtime = microtime();
$mtime = explode(' ', $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* define package */
define('PKG_NAME','MODxBoilerplate');
define('PKG_NAME_LOWER',strtolower(PKG_NAME));
define('PKG_VERSION','0.1.5');
define('PKG_RELEASE','alpha1');

/* define sources */
$root = dirname(dirname(__FILE__)).'/';
$sources = array(
    'root' => $root,
    'build' => $root . '_build/',
    'data' => $root . '_build/data/',
    'resolvers' => $root . '_build/resolvers/',
    'subpackages' => $root . '_build/subpackages/',
    'validators' => $root . '_build/validators/',
    'chunks' => $root.'core/components/'.PKG_NAME_LOWER.'/elements/chunks/',
    /*
    'snippets' => $root.'core/components/'.PKG_NAME_LOWER.'/elements/snippets/',
    */
    'lexicon' => $root . 'core/components/'.PKG_NAME_LOWER.'/lexicon/',
    'docs' => $root.'core/components/'.PKG_NAME_LOWER.'/docs/',
    /*
    'pages' => $root.'core/components/'.PKG_NAME_LOWER.'/elements/pages/',
    */
    'source_assets' => $root.'assets/components/'.PKG_NAME_LOWER,
    'source_root' => $root . '_build/root/.htaccess',
    /*
    'source_as' => $root.'assets/',
        */
    'source_core' => $root.'core/components/'.PKG_NAME_LOWER,
);
unset($root);

/* override with your own defines here (see build.config.sample.php) */
require_once $sources['build'] . '/build.config.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['build'] . '/includes/functions.php';

$modx= new modX();
$modx->initialize('mgr');
echo '<pre>'; /* used for nice formatting of log messages */
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

/* load the package builder class */
$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER,PKG_VERSION,PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER,false,true,'{core_path}components/'.PKG_NAME_LOWER.'/');
$modx->log(modX::LOG_LEVEL_INFO,'Created Transport Package and Namespace.');


/* create context here */
/*
$contexts = include_once $sources['data'].'transport.contexts.php';
if (!is_array($contexts)) $modx->log(modX::LOG_LEVEL_FATAL,'No Context returned.');
$attributes = array(
    xPDOTransport::UNIQUE_KEY => 'key',
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => false,
);
foreach ($contexts as $context) {
    $vehicle = $builder->createVehicle($context,$attributes);
    $builder->putVehicle($vehicle);
}
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($contexts).' contexts.'); flush();
unset($contexts,$context,$attributes);
*/

/* @TODO create & define (if possible) required system settings (base_url, site_name, http_host…) for contexts */


/* @TODO add files to filesystem (.htacces, templates…)
    or create a custom package with packman & include it in subpackage */


/**************/

/* modContentTypes */
$contenttypes = include $sources['data'].'transport.content_types.php';
$attributes = array (
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'mime_type',
);
foreach ($contenttypes as $contenttype) {
    $vehicle = $builder->createVehicle($contenttype,$attributes);
    $builder->putVehicle($vehicle);
}
$modx->log(xPDO::LOG_LEVEL_INFO,'Added in '.count($contenttypes).' Content Types.'); flush();
unset ($contenttypes, $contenttype, $attributes);

/* load property sets */
/*
$propertySets = include_once $sources['data'].'transport.propertysets.php';
if (!is_array($propertySets)) $modx->log(modX::LOG_LEVEL_FATAL,'No property sets returned.');
$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'name',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
);
foreach ($propertySets as $propertySet) {
    $vehicle = $builder->createVehicle($propertySet,$attributes);
    $builder->putVehicle($vehicle);
}
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($propertySets).' property sets.'); flush();
unset($propertySets,$propertySet,$attributes);
*/

/* load user groups */
$usergroups = include_once $sources['data'].'transport.usergroups.php';
if (!is_array($usergroups)) $modx->log(modX::LOG_LEVEL_FATAL,'No User Groups returned.');
$attributes= array(
    xPDOTransport::UNIQUE_KEY => 'name',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
);
foreach ($usergroups as $usergroup) {
    $vehicle = $builder->createVehicle($usergroup,$attributes);
    $builder->putVehicle($vehicle);
}
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($usergroups).' User Groups.'); flush();
unset($usergroups,$usergroup,$attributes);

/* create category */
$category = $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category',PKG_NAME);

/* add templates */
$templates = include $sources['data'].'transport.templates.php';
if (is_array($templates)) {
    $category->addMany($templates,'Templates');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding templates failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($templates).' templates.'); flush();
unset($templates);

/* add chunks */
$chunks = include $sources['data'].'transport.chunks.php';
if (is_array($chunks)) {
    $category->addMany($chunks,'Chunks');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding chunks failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($chunks).' chunks.'); flush();
unset($chunks);

/* add snippets */
/*
$snippets = include $sources['data'].'transport.snippets.php';
if (is_array($snippets)) {
    $category->addMany($snippets,'Snippets');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding snippets failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($snippets).' snippets.'); flush();
unset($snippets);
*/

/* add tvs */
$tvs = include $sources['data'].'transport.tvs.php';
if (is_array($tvs)) {
    $category->addMany($tvs,'TemplateVars');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding tvs failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($tvs).' tvs.'); flush();
unset($tvs);

/* add subpackages */
$success = include $sources['data'].'transport.subpackages.php';
if (!$success) { $modx->log(modX::LOG_LEVEL_FATAL,'Adding subpackages failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($subpackages).' subpackages.'); flush();
unset($success);




/* load resources */
$resources = include_once $sources['data'].'transport.resources.php';
if (!is_array($resources)) $modx->log(modX::LOG_LEVEL_FATAL,'No resources returned.');
$attributes= array(
    xPDOTransport::PRESERVE_KEYS => true,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::UNIQUE_KEY => 'id',
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'ContentType' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    ),
);
foreach ($resources as $resource) {
    $vehicle = $builder->createVehicle($resource,$attributes);
    $builder->putVehicle($vehicle);
}
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($resources).' Resources.'); flush();
unset($resources,$resource,$attributes);


/*****************/


/* add snippets */
/*
$snippets = include $sources['data'].'transport.snippets.php';
if (!is_array($snippets)) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in snippets.');
} else {
    $category->addMany($snippets);
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($snippets).' snippets.');
}
*/ // seems duplicate

/* create category vehicle */
$attr = array(
    xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Children' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'category',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                'Snippets' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
                'Chunks' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
            ),
        ),
        /*
        'Snippets' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
            */
        'Chunks' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    ),
);
$vehicle = $builder->createVehicle($category,$attr);

$modx->log(modX::LOG_LEVEL_INFO,'Adding file resolvers to category...');
/*
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
*/
$vehicle->resolve('file',array(
    'source' => $sources['source_root'],
    'target' => "return MODX_BASE_PATH;",
));
$builder->putVehicle($vehicle);

$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$builder->putVehicle($vehicle);

/* load new system settings */
$modx->log(modX::LOG_LEVEL_INFO,'Packaging in System Settings...');
$settings = include $sources['data'].'transport.settings.php';

if (!is_array($settings)) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in settings.');
} else {
    $attributes= array(
        xPDOTransport::UNIQUE_KEY => 'key',
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => true,
    );
    foreach ($settings as $setting) {
        $vehicle = $builder->createVehicle($setting,$attributes);
        $builder->putVehicle($vehicle);
    }
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($settings).' System Settings.');
}
unset($settings,$setting,$attributes);


/* load menu */
$menu = include $sources['data'].'transport.menu.php';
if (empty($menu)) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in menu.');
} else {
    $vehicle= $builder->createVehicle($menu,array (
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'text',
        xPDOTransport::RELATED_OBJECTS => true,
        xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
            'Action' => array (
                xPDOTransport::PRESERVE_KEYS => false,
                xPDOTransport::UPDATE_OBJECT => true,
                xPDOTransport::UNIQUE_KEY => array ('namespace','controller'),
            ),
        ),
    ));
    /*
    $modx->log(modX::LOG_LEVEL_INFO,'Adding in PHP resolvers...');
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.tables.php',
    ));
    */
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.paths.php',
    ));
    /*
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.subpackage.php',
    ));
    */
    $builder->putVehicle($vehicle);
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in menu.');
}
unset($vehicle,$menu);

/* Lexicon */
/*
$builder->buildLexicon($sources['lexicon']);
*/

/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
/* @TODO custom setup options */
/*
    'setup-options' => array(
        'source' => $sources['build'].'setup.options.php',
    ),
*/
));
$modx->log(modX::LOG_LEVEL_INFO,'Added package attributes and setup options.');

/* zip up package */
$modx->log(modX::LOG_LEVEL_INFO,'Packing up transport package zip...');
$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();