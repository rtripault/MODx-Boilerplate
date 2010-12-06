<?php
/**
 * Package in subpackages
 *
 * @package modxss
 */
$subpackages = array(
    'archivist'      => 'archivist-1.0.0-pl',
    'batcher'        => 'batcher-1.1.0-pl',
    'codemirror'     => 'codemirror-1.1.0-pl',
    'formit'         => 'formit-1.5.2-rc2',
    'getcache'       => 'getcache-1.0.0-beta',
    'getpage'        => 'getpage-1.0.0-pl',
    'getresources'   => 'getresources-1.2.2-pl',
    'googlemapstv'   => 'googlemapstv-1.0-rc3',
    'googlesitemap'  => 'googlesitemap-1.2-pl',
    'if'             => 'if-1.1-pl',
    'phpthumbof'     => 'phpthumbof-1.0.0-rc1',
    'provisioner'    => 'provisioner-1.8-beta',
    'taglister'      => 'taglister-1.1.1-pl',
    'tinymce'        => 'tinymce-4.1.2-rc1',
    'translit'       => 'translit-1.0.0-beta',
    'ultimateparent' => 'ultimateparent-2.0-pl',
    'wayfinder'      => 'wayfinder-2.1.3-rc1',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle = $builder->createVehicle(array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ),$spAttr);
    $vehicle->validate('php',array(
        'source' => $sources['validators'].'validate.'.$name.'.php'
    ));
    $builder->putVehicle($vehicle);
}

return true;