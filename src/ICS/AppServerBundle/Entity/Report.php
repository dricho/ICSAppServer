<?php

namespace ICS\AppServerBundle\Entity;

class Report extends Entity {
    protected $id;
    protected $room;
    protected $pcID;
    protected $description;
    protected $instructor;
    protected $student;
    protected $section;
    protected $dateReported;
    protected $timeReported;

//get functions    
    
    public function getReport()
    {
        return $this->id;
    }
    
    public function getRoom()
    {
        return $this->room;
    }
    
    public function getPCID()
    {
        return $this->pcID;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getInstructor()
    {
        return $this->instructor;
    }
    
    public function getStudent()
    {
        return $this->student;
    }
    
    public function getSection()
    {
        return $this->section;
    }
    
    public function getDateReported()
    {
        return $this->dateReported;
    }
    
    public function getTimeReported()
    {
        return $this->timeReported;
    }
    
//set functions
    
    public function setReport()
    {
        
    }
    
    public function setRoom()
    {
        
    }
    
    public function setPCID()
    {
        
    }
    
    public function setDescription()
    {
        
    }
    
    public function setInstructor()
    {
        
    }
    
    public function setStudent()
    {
        
    }
    
    public function setSection()
    {
        
    }
    
    public function setDateReported()
    {
        
    }
    
    public function setTimeReported()
    {
        
    }
}

