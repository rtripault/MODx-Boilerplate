<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * modxboilerplate build script
 *
 * @package modxboilerplate 
 * @subpackage build
 */

/*
@TODO
verifier erreurs creation/mise à jour TVs
nettoyer le build script
refaire le package des subpackages + snippets
proprietes des snippets
vérifier erreur "file"…
    */

$mtime = microtime();
$mtime = explode(' ', $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* define package */
define('PKG_NAME','MODxBoilerplate');
define('PKG_NAME_LOWER',strtolower(PKG_NAME));
define('PKG_VERSION','0.3.7');
define('PKG_RELEASE','alpha');

/* define sources */
$root = dirname(dirname(__FILE__)).'/';
$sources = array(
    'root' => $root,
    'build' => $root . '_build/',
    'data' => $root . '_build/data/',
    'resolvers' => $root . '_build/resolvers/',
    'subpackages' => $root . '_build/data/subpackages/',
    'validators' => $root . '_build/validators/',
    'lexicon' => $root . 'core/components/'.PKG_NAME_LOWER.'/lexicon/',
    'docs' => $root.'core/components/'.PKG_NAME_LOWER.'/docs/',
    'source_assets' => $root.'assets/components/'.PKG_NAME_LOWER,
    'source_core' => $root.'core/components/'.PKG_NAME_LOWER,
    // custom resources
    'source_root' => $root . '_build/data/root/.htaccess',
    'source_as' => $root.'_build/assets/',
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


/*************************************/
/* @TODO create contexts for multilingual */
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

/* @TODO load property sets */
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
$attributes = array(
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

/* add tvs */
$tvs = include $sources['data'].'transport.tvs.php';
if (is_array($tvs)) {
    $category->addMany($tvs,'TemplateVars');
} else { $modx->log(modX::LOG_LEVEL_FATAL,'Adding tvs failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($tvs).' tvs.'); flush();
unset($tvs);



/*************************/
/* load resources in db */
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


/****************************/
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
        'Chunks' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    ),
);
$vehicle = $builder->createVehicle($category,$attr);

$modx->log(modX::LOG_LEVEL_INFO,'Adding file resolvers to category...');

/* Let's add static files */
// adding .htaccess
$vehicle->resolve('file',array(
    'source' => $sources['source_root'],
    'target' => "return MODX_BASE_PATH;",
));
$builder->putVehicle($vehicle); flush();

// adding MBP stuff
$vehicle->resolve('file',array(
    'source' => $sources['source_as'],
    'target' => "return MODX_BASE_PATH;",
));
$builder->putVehicle($vehicle); flush();

// adding core/components
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));
$builder->putVehicle($vehicle); flush();

$vehicle->resolve('php',array(
    'source' => $sources['resolvers'] . 'resolve.tv.template.php',
));
$builder->putVehicle($vehicle); flush();

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
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.paths.php',
    ));
    $vehicle->resolve('php',array(
        'source' => $sources['resolvers'] . 'resolve.subpackage.php',
    ));
    */
    $builder->putVehicle($vehicle);
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($menu).' menus.');
}
unset($vehicle,$menu);

/* add subpackages */
$success = include $sources['data'].'transport.subpackages.php';
if (!$success) { $modx->log(modX::LOG_LEVEL_FATAL,'Adding subpackages failed.'); }
$modx->log(modX::LOG_LEVEL_INFO,'Added in '.count($subpackages).' subpackages.'); flush();
unset($success);

/* Lexicon */
$builder->buildLexicon($sources['lexicon']);

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

$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtim e= $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit ();