<?php

namespace ICS\AppServerBundle\Entity;

class Semester extends Entity {
    protected $sem;
    protected $year;
    
//get functions    
    
    public function getSem()
    {
        return $this->sem;
    }
    
    public function getAcadYear()
    {
        return $this->year;
    }

//set functions    
    
    public function setSem()
    {

    }
    
    public function setAcadYear()
    {

    }
    
}

