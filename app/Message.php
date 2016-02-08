<?php

namespace App;


class Message {
    
    const ORGANIZATION_EMAIL = 'amd11dot4@gmail.com';
    public $name;
    public $email;
    public $text;
    
    public function __construct($name, $email, $text){
          $this->name = $name;
          $this->email = $email;
          $this->text = $text;
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}
