<?php
namespace Study;

class Step7 {

    public function __construct(String $name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }

    public function update_name(String $name){
        $this->name = $name;
    }

    public static function greet(String $name){
        return "Hello {$name}";
    }
}