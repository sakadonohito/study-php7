<?php

namespace Study;

use Study\Step2;

class Step3 {

    public function __construct(int $step){
        $this->step = $step;
        $this->step2 = new Step2();
    }

    public function get_step(){
        echo $this->step.PHP_EOL;
    }
    public function echo_step2(){
        $this->step2->get_step();
    }
}