<?php

class Fund
{
    public $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money)
    {
        $this->fund += $money;
    }
    public function deduct($money)
    {
        $this->fund -= $money;
    }
    public function getTotal()
    {
        echo "Total fund is {$this->fund}\n";
    }
}

$myFund = new Fund(100);
$myFund->getTotal();
$myFund->addFund(10);
$myFund->deduct(6);
$myFund->getTotal();


class Fund
{
    private $fund;
    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money)
    {
        $this->fund += $money;
        $this->deduct(0);
    }
    private function deduct($money)
    {
        $this->fund -= $money;
    }
    public function getTotal()
    {
        echo "Total fund is {$this->fund}\n";
    }
}

$myFund = new Fund(100);
$myFund->getTotal();
$myFund->addFund(10);
// $myFund->deduct(6);
$myFund->getTotal();