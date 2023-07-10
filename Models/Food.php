<?php

    class Food  extends Product{
        
        public $weight;
        public $ingredients;

        function __construct($image, $title, $price, $type, $weight, $ingredients){

            parent::__construct($image, $title, $price, $type);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
            
        }

        



    }


?>