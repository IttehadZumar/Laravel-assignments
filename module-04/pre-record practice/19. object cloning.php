<?php
class FavColor
{
    public $data;
    function __construct($data)
    {
        $this->data = $data;
    }

    function setData($data)
    {
        $this->data = $data;
    }
}

$fc1 = new FavColor("Some data");
$fc2 = clone $fc1;
$fc2->setData("more data");
print_r($fc1);
print_r($fc2);
