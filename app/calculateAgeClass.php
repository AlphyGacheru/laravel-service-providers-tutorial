<?php
namespace App;

class calculateAgeClass {
    // Property
    public $age;

    // Methods
    function provide_birth_year($yearOfBirth){
        $this->age = 2021 - $yearOfBirth;
    }

    function get_age(){
        return $this->age;
    }
}
