<?php

    class Utilities  extends Product{
        public $material;
        public $dimension;

        function __construct($image, $title, $price, $type, $material, $dimension){

            parent::__construct($image, $title, $price, $type);
            $this->material = $material;
            $this->dimension = $dimension;
            
        }


    }

?>