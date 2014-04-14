<?php

namespace ICS\AppServerBundle\Entity;

class SourceDisk extends Entity {
    protected $id;
    protected $pcSpecsID;
    protected $application;
    protected $os;
    
//get functions    
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getPCSpecsID()
    {
        return $this->pcSpecsID;
    }
    
    public function getApplication()
    {
        return $this->application;
    }
    
    public function getOS()
    {
        return $this->os;
    }
    
//set functions
    
    public function setID()
    {
        
    }
    
    public function setPCSpecsID()
    {
        
    }
    
    public function setApplication()
    {
        
    }
    
    public function setOS()
    {
        
    }
}

