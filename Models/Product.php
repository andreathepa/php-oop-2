<?php

    class Product {
        
        public $image;
        public $title;
        public $price;
        public $type;
        

        function __construct($image, $title, $price, $type){
            $this->image = $image;
            $this->title = $title;
            $this->price = $price;
            $this->type = $type;
        }

    }


?>