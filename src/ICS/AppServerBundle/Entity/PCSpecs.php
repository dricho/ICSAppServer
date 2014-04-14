<?php

namespace ICS\AppServerBundle\Entity;

class PCSpecs extends Entity {
    protected $id;
    protected $cpu;
    protected $hardDisk;
    protected $memory;
    protected $videoCard;
    protected $lan;
    
//get functions
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getCPU()
    {
        return $this->cpu;
    }

    public function getHardDisk()
    {
        return $this->hardDisk;
    }
    
    public function getMemory()
    {
        return $this->memory;
    }
    
    public function getVideoCard()
    {
        return $this->videoCard;
    }
    
    public function getLAN()
    {
        return $this->lan;
    }
    
//set functions
    
    public function setID()
    {
        
    }
    
    public function setCPU()
    {
        
    }

    public function setHardDisk()
    {
        
    }
    
    public function setMemory()
    {
        
    }
    
    public function setVideoCard()
    {
        
    }
    
    public function setLAN()
    {
        
    }
}