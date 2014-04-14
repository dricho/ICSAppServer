<?php

namespace ICS\AppServerBundle\Entity;

class PCUnit extends Entity {
    protected $id;
    protected $sourceDiskID;
    protected $room;

//get functions
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getSourceDiskID()
    {
        return $this->sourceDiskID;
    }
    
    public function getRoom()
    {
        return $this->room;
    }
 
//set functions
    
    public function setID($id)
    {
        $this->id = $id;
    }
    
    public function setSourceDiskID($sourceDiskID)
    {
            $this->sourceDiskID = $sourceDiskID;
    }
    
    public function setRoom($room)
    {
        $this->room = $room;
    }   
}