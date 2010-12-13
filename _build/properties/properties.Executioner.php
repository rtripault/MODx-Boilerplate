<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Properties for Executioner snippet
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$properties = array(
    array(
        'name' => 'tElement',
        'desc' => 'prop_mbp.tElement_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxboilerplate:snippets',
    ),
    array(
        'name' => 'tElementClass',
        'desc' => 'prop_mbp.tElementClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'modSnippet',
        'lexicon' => 'modxboilerplate:snippets',
    ),
);

return $properties;