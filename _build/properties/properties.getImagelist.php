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
 * Properties for the modxboilerplate snippet.
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