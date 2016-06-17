<?php
namespace UnitTest;

use Study\Step4;

class Stap4Test extends \PHPUnit_Framework_TestCase {

    public function test_hoge(){
        $this->assertTrue(true);
    }

    public function test_step4_greet(){

        $step4 = new Step4('Hanako');
        $expect = 'Hello Taro';
        $this->assertEquals($expect,$step4->greet(),'名前が一致しない。引数が間違っているのでは？？');
    }
    
}