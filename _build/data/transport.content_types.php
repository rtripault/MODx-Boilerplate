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
 * Removes .html suffix for HTML content type
 *
 * @package modxboilerplate
 * @subpackage build
 */

$contenttypes = array();

$contenttypes['1']= $modx->newObject('modContentType');
$contenttypes['1']->fromArray(array (
  'id' => 1,
  'name' => 'HTML',
  'description' => 'HTML content',
  'mime_type' => 'text/html',
  'file_extensions' => '',
  'headers' => 'NULL',
  'binary' => 0,
), '', true, true);

return $contenttypes;