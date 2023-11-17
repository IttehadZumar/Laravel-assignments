<?php 
class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;

    function __construct()
    {
        $this-> districts = array();
    }

    function add ($district){
        array_push($this->districts, $district);
    }

    function getIterator()  
    {
        return new ArrayIterator($this->districts);
    }

    function count()
    {
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Barisal");
$districts->add("Khulna");
$districts->add("Rajshahi");

foreach($districts as $district){
    echo $district.PHP_EOL;
}

echo count($districts);