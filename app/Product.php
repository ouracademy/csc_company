<?php

namespace App;


class Product {
    public $name;
    public $cost;
    public $description;
    public $category;
    public $imageUrl;
    
    public function __construct($name, $cost, $description,$category,$imageUrl){
          $this->name = $name;
          $this->cost = $cost;
          $this->description = $description;
          $this->category = $category;
          $this->imageUrl = '/public/assets/images/import/products/'.$imageUrl;
    }

    
    
}
