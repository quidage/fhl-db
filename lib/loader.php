<?php

/*
 * Copyright (C) 2013 Christian Hansen <christian@herrhansen.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * Autoloader
 * 
 * der Klassenpfad definiert sich ueber den Namespace
 * 
 * @author Christian Hansen <christian@herrhansen.com>
 * @package wp-crm
 * 
 * @param string $className
 * @return void
 */
function __autoload($className) {
    $classFile = APPROOT . '/lib/' . str_replace('\\', '/', $className) . '.php';
    // TODO catch file not found

    if (file_exists($classFile)) {
        require_once $classFile;
    } else {
        throw new \EJC\Exception\ClassLoaderException('Class "' . $classFile . '" not found', 1366377452);
    }
}

?>