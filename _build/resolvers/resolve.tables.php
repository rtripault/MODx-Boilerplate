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
 * Resolve creating db tables
 *
 * @package modxboilerplate
 * @subpackage build
 */


/* NO CUSTOM DB FOR NOW, NOT NEEDED

if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('modxboilerplate.core_path',null,$modx->getOption('core_path').'components/modxboilerplate/').'model/';
            $modx->addPackage('modxboilerplate',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('modExtraItem');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;
*/