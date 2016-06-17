<?php
namespace UnitTest;

use Study\Step6Hoge as Hoge;
use Study\Step6Fuga as Fuga;

class Stap6Test extends \PHPUnit_Framework_TestCase {

    public function test_step6_trait(){

        $hoge = new Hoge();
        $fuga = new Fuga();
        $expect = 4;
        $this->assertEquals($expect,$hoge->calc(2),'期待値と計算結果が違うHoge');
        $this->assertEquals($expect,$fuga->calc(2),'期待値と計算結果が違うFuga');
    }
    
}