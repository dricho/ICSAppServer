<?php

namespace ICS\AppServerBundle\Entity;

class LabRoom extends Entity {
    protected $room;
    protected $row;
    protected $col;
    protected $whiteboard;
 
 //get functions
    
    public function getRoom()
    {
        return $this->room;
    }
    
    public function getRow()
    {
        return $this->row;
    }
    
    public function getCol()
    {
        return $this->col;
    }
    
    public function getWhiteboard()
    {
        return $this->whiteboard;
    }
    
//set functions
    
    public function setRoom()
    {
        
    }
    
    public function setRow()
    {
        
    }
    
    public function setCol()
    {
        
    }
    
    public function setWhiteboard()
    {
        
    }
}

