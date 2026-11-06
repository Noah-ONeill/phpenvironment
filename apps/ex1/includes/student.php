<?php
    class Student {
        public $firstName;
        public $lastName;

        public function __construct($fName, $lName){
            $this->firstName = $fName;
            $this->lastName = $lName;
        }

        public function getFullname() {
            return $this->firstName . " " . $this->lastName;
        }
    }
?>