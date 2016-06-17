<?php

namespace Study;

class Step2 {

    public function __construct(){
        $this->step = 2;
    }

    public function get_step(){
        echo $this->step.PHP_EOL;
    }
}