<?php

/**
 * License: GNU General Public License
 *
 * Copyright (c) 2009 TechDivision GmbH.  All rights reserved.
 * Note: Original work copyright to respective authors
 *
 * This file is part of TechDivision GmbH - Connect.
 *
 * TechDivision_Model is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * TechDivision_Model is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,
 * USA.
 *
 * @package TechDivision_Model
 */

/**
 * Interface of all cachable entity Collections.
 *
 * @package TechDivision_Model
 * @author Tim Wagner <t.wagner@techdivision.com>
 * @copyright TechDivision GmbH
 * @link http://www.techdivision.com
 * @license GPL
 */
interface TechDivision_Model_Interfaces_Collections_Cachable
{
	
	/**
	 * Executes the SQL the Collection is based on and
	 * loads the data from the database.
	 * 
	 * @return TechDivision_Model_Interfaces_Collections_Cachable
	 * 		The initialized Collection
	 */
	public function load();

	/**
	 * The container to handle the items.
	 * 
	 * @return TechDivision_Model_Interfaces_Container
	 * 		The container instance
	 */
	public function getContainer();
}