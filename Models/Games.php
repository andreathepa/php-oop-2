<?php

    class Games  extends Product{
        public $features;
        public $dimension;

        function __construct($image, $title, $price, $type, $features, $dimension){

            parent::__construct($image, $title, $price, $type);
            $this->features = $features;
            $this->dimension = $dimension;
            
        }


    }

?>