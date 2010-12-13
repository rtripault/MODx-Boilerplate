<?php
/**
 * Package in subpackages
 *
 * @package modxss
 */
$subpackages = array(
    'mbp'      => 'mbp-1.0.0-beta1',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle = $builder->createVehicle(array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ),$spAttr);
    /*
    $vehicle->validate('php',array(
        'source' => $sources['validators'].'validate.'.$name.'.php'
    ));
    */
    $builder->putVehicle($vehicle);
}

return true;