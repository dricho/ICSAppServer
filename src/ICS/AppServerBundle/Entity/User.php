<?php

namespace ICS\AppServerBundle\Entity;

class User extends Entity{
    protected $id;
    protected $username;
    protected $password;
    protected $fullname;
    protected $designation;
    protected $status;
    protected $email;
    
//get functions    
    public function getUser()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->username;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getFullName()
    {
        return $this->fullname;
    }
    
    public function getDesignation()
    {
        return $this->designation;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
   
 //set functions   
    
    public function setUser()
    {
        
    }

    public function setUserName()
    {
        
    }
    
    public function setPassword()
    {
        
    }
    
    public function setFullName()
    {
        
    }
    
    public function setDesignation()
    {
        
    }
    
    public function setStatus()
    {
        
    }
    
    public function setEmail()
    {
        
    }
}
