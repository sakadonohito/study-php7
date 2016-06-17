<?php
namespace UnitTest;

use Study\Step7 as Step7;

class Stap7Test extends \PHPUnit_Framework_TestCase {

    public function test_step7_dynamic(){

        $step7 = new Step7('Taro');
        $expect = 'Taro';
        $this->assertEquals($expect,$step7->get_name(),'期待値と名前が違う');
        $expect2 = call_user_func('Study\Step7::greet','Natsu');
        $this->assertEquals('Hello Natsu',$expect2,'期待値と名前が違う2');
        $reflection = new \ReflectionMethod('Study\Step7','update_name');
        $reflection->invoke($step7,'Hotate');
        $this->assertEquals('Hotate',$step7->get_name(),'期待値と名前が違う3');
    }
    
}