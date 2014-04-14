<?php

namespace ICS\AppServerBundle\Entity;

class History extends Entity{
    
    protected $id;
    protected $reportNum;
    protected $room;
    protected $pcID;
    protected $description;
    protected $instructor;
    protected $student;
    protected $section;
    protected $dateReported;
    protected $timeReported;
    protected $date;
    protected $time;
    protected $tech;
    protected $remarks;
    protected $status;
    
//get functions    
    
    public function getID()
    {
        return $this->id;        
    }
    
    public function getReportNum()
    {
        return $this->reportNum;
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
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function getTime()
    {
        return $this->time;
    }
    
    public function getTech()
    {
        return $this->tech;
    }
    
    public function getRemarks()
    {
        return $this->remarks;
    }
    
    public function getStatus()
    {
        return $this->status;
    }

//set functions   
    
    public function setID()
    {
              
    }
    
    public function setReportNum()
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
    
    public function setDate()
    {
        
    }
    
    public function setTime()
    {
       
    }
    
    public function setTech()
    {
        
    }
    
    public function setRemarks()
    {
        
    }
    
    public function setStatus()
    {
        
    }
}

