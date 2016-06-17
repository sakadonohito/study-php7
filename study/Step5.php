<?php

namespace Study;

class Step5 {

    public function __construct(){
        $this->step = 5;
    }

    public function counter(){
        $counter = 0;
        return function () use(&$counter) {
            return ++$counter;
        };
    }
}