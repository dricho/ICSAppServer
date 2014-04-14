<?php

namespace ICS\AppServerBundle\Entity;

class Request extends Entity {
    protected $id;
    protected $instructor;
    protected $room;
    protected $dateNeeded;
    protected $day;
    protected $timeStart;
    protected $timeEnd;
    protected $duration;
    protected $purpose;
    protected $status;
    
//get functions    
    
    public function getRequest()
    {
        return $this->id;
    }    
    
    public function getInstructor()
    {
        return $this->instructor;
    }
    
    public function getRoom()
    {
        return $this->room;
    }
    
    public function getDateNeeded()
    {
        return $this->dateNeeded;
    }
    
    public function getDay()
    {
        return $this->day;
    }
    
    public function getTimeStart()
    {
        return $this->timeStart;
    }
    
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function getPurpose()
    {
        return $this->purpose;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
//set functions
    
    public function setRequestNum()
    {
        
    }    
    
    public function setInstructor()
    {
        
    }
    
    public function setRoom()
    {
        
    }
    
    public function setDateNeeded()
    {
        
    }
    
    public function setDay()
    {
        
    }
    
    public function setTimeStart()
    {
        
    }
    
    public function setTimeEnd()
    {
        
    }
    
    public function setDuration()
    {
        
    }
    
    public function setPurpose()
    {
        
    }
    
    public function setStatus()
    {
        
    }
}


