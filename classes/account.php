<?php

class account
{
    public $accNum;
    public $accType;
    public $balance;

    public function __construct($accNum, $accType, $balance)
    {
        $this->accNum = $accNum;
        $this->accType  = $accType;
        $this->balance   = $balance;
    }
}
