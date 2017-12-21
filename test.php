<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {

    public function testEquals() {
	$a = [1];
	$this->assertEquals(0, count($a));
    }

}
