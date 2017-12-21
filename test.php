<?php

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {

    public function testEquals() {
	$a = [2];
	$this->assertEquals(0, count($a));
    }

}
