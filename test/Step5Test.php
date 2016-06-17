<?php
namespace UnitTest;

use Study\Step5;

class Stap5Test extends \PHPUnit_Framework_TestCase {

    public function test_step5_greet(){

        $step5 = new Step5();
        $counter = $step5->counter();
        $this->assertEquals(1,$counter());
        $this->assertEquals(2,$counter());
        $this->assertEquals(3,$counter());
    }
    
}