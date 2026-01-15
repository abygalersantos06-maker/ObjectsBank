<?php

class customer
{
    public $firstN;
    public $lastN;
    public $acc;

    public function __construct($firstN, $lastN, $acc = [])
    {
        $this->firstN = $firstN;
        $this->lastN  = $lastN;
        $this->acc  = $acc;
    }

    // Returns the customer's full name
    public function getFullName()
    {
        return $this->firstN . ' ' . $this->lastN;
    }
}
