<?php

namespace ICS\AppServerBundle\Entity;

class RoomSched extends Entity {
    protected $room;
    protected $time;
    protected $monday;
    protected $tuesday;
    protected $wednesday;
    protected $thursday;
    protected $friday;
    
//get functions    
    
    public function getRoom()
    {
        return $this->room;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
    public function getMonday()
    {
        return $this->monday;
    }
    
    public function getTuesday()
    {
        return $this->tuesday;
    }
    
    public function getWednesday()
    {
        return $this->wednesday;
    }
    
    public function getThursday()
    {
        return $this->thursday;
    }
    
    public function getFriday()
    {
        return $this->friday;
    }
    
//set functions    
    
    public function setRoom()
    {
        
    }
    
    public function setTime()
    {
        
    }
    
    public function setMonday()
    {
        
    }
    
    public function setTuesday()
    {
        
    }
    
    public function setWednesday()
    {
        
    }
    
    public function setThursday()
    {
       
    }
    
    public function setFriday()
    {
        
    }  
} 

