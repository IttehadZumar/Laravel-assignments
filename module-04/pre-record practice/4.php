<?php 
// access modifier
class Fund{
    public $fund;

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is $this->fund \n";
    }
}

$ourFund = new Fund(100);
$ourFund->addFund(10);
$ourFund->deductFund(30);
$ourFund->getTotal();