<?php
/*
 * (c) Christian Gärtner <christiangaertner.film@googlemail.com>
 * This file is part of the Modulework Framework Tests
 * License: View distributed LICENSE file
 *
 * 
 * This file is meant to be used in PHPUnit Tests
 */

use DaGardner\Project\ExampleClass;

/**
* PHPUnit Test
*/
class ExampleClassTest extends PHPUnit_Framework_TestCase
{
	public function testReturnTrue()
	{
		$this->assertTrue(ExampleClass::returnTrue());
	}
}