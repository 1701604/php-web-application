<?php

namespace StarPlayers;

required_once "Star.php"; 

class StarWriter     //Single Responsibility Principle (SRP)
{
    //Attributes
    private $_star;

    //Constructor
    public function __construct(Star $star)
    {
        this->_star = $star;
    }

    //Methods for Properties

    //Methods
    public function Write();
    {
        echo "Stars details: name {$this->_star->Name}<br/>";
    }

}

?>