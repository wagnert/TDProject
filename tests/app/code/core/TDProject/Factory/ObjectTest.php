<?php

/**
 * License: GNU General Public License
 *
 * Copyright (c) 2009 TechDivision GmbH.  All rights reserved.
 * Note: Original work copyright to respective authors
 *
 * This file is part of TechDivision GmbH - Connect.
 *
 * TechDivision_Generator is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * TechDivision_Generator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,
 * USA.
 *
 * @package TechDivision_Generator
 */

require_once 'TechDivision/Lang/String.php';
require_once 'TDProject/Factory/Object.php';
require_once 'TDProject/Aspectable/Test.php';
require_once 'TDProject/Pointcuts/Logging.php';

/**
 * This is the test for the Integer class.
 *
 * @package TDProject
 * @author Tim Wagner <tw@techdivision.com>
 * @copyright TechDivision GmbH
 * @link http://www.techdivision.com
 * @license GPL
 */
class TDProject_Factory_ObjectTest
    extends PHPUnit_Framework_TestCase {

    /**
     * The Factory instance to test.
     * @var TDProject_Factory_Object
     */
    protected $_factory = null;

    /**
     * Prepars the unit test.
     *
     * @return void
     */
    public function setUp()
    {
        // initialize the Factory instance to test
        $this->_factory = TDProject_Factory_Object::get();
    }

    public function testNewInstance()
    {
        $string = $this->_factory->newInstance('TechDivision_Lang_String');

        $this->assertTrue($string instanceof TechDivision_Lang_String);
    }
}