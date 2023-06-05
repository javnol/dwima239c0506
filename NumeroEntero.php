<?php
    // NumeroEntero.php
    // https://code.tutsplus.com/es/tutorials/basics-of-object-oriented-programming-in-php--cms-31910
    class NumeroEntero {
        private $ne;
        public function __construct($ne){
            $this->ne = $ne;
        }
        public function setNe($ne){
            $this->ne = $ne;
        }
        public function getNe(){
            return $this->ne;
        }
    }
?>