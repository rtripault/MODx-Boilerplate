<?php
/**
 * MODx Boilerplate
 *
 * Copyright 2010 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * @package modxboilerplate
 */
/**
 * Properties for getImagelist snippet
 *
 * @package modxboilerplate 
 * @subpackage build
 */

$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_mbp.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '@CODE:<li><img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>',
        'lexicon' => 'modxboilerplate:snippets',
    ),
    array(
        'name' => 'tvname',
        'desc' => 'prop_mbp.tvname_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'multiitems',
        'lexicon' => 'modxboilerplate:snippets',
    ),
    array(
        'name' => 'docid',
        'desc' => 'prop_mbp.docid_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'modxboilerplate:snippets',
    ),
);

return $properties;