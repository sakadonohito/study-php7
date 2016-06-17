<?php

namespace Study;

class Step4 {

    public function __construct(String $name){
        $this->name = $name;
    }

    public function greet(){
        return "Hello {$this->name}";
    }
}