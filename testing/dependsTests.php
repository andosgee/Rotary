<?php

/*
Unittests for inc/depends.php
Using PHPUnit (https://phpunit.de)
*/


declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once("../inc/depends.php");




final class dependsTest extends TestCase
{

	public function sampleTest()
	{
		$this->assertEquals(4, 2+2);
	}

} 


?>
