<?php


class CoffeeEntity {
    //put your code here
    
    public $ID;
    public $Name;
    public $LastUpdated;
    
    
    function __construct($ID, $Name, $LastUpdated) {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->LastUpdated = $LastUpdated;
    }

}
