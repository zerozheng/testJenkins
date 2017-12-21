<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {

    public function testEquals() {
	$a = [];
	$this->assertEquals(0, count($a));
    }

}
