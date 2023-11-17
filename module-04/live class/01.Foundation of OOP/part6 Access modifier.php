<?php 
/* 
Access modifier
it controls the visibility of class properties and methods
1. public: accessible everywhere
2. protected: within the class and subclass (inheritence) 
3. private: only within the class
*/

class Fruit{
    public $color;
    protected $taste;
    private $origin;

    public function setTaste($taste){
        $this->taste = $taste;
    }
    public function setOrigin($origin){
        $this->origin= $origin;
    }
}