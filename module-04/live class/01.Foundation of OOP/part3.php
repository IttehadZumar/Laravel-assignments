<?php 
// assign values throught construct method, benefit is arguments that are passed into the class can be used in different functions inside the class

class Car{
    public $name;
    public $model;
    public $year;

    public function __construct($nameValue, $modelValue, $yearValue)
    {
        $this->name = $nameValue;
        $this->model = $modelValue;
        $this->year = $yearValue;
    }

    public function myCar(){
        echo "My car name is $this->name, model is $this->model and year is $this->year";
    }
}
$myCar1 = new Car('Toyota', 2018, 2020);
$myCar1->myCar();
