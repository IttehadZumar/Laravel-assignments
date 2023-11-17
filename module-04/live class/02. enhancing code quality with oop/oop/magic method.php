<?php 
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    public function __set($prop, $value){
        return $this->$prop = $value;
    }
    public function __get($prop){
        return $this->$prop;
    }
}
$student1 = new Student('John', 20, 10);
$student1->name = 'John Doe';
echo $student1->name."\n";
