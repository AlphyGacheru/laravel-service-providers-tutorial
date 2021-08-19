<?php


use Illuminate\Support\Facades\Route;

// app()->bind('ageCalculator', function(){
//     return new \App\calculateAgeClass();
// });


Route::get('/', function () {
    dd(resolve('ageCalculator'));
});


















































// Route::get('resolve', function (calculateAgeClass $calculateAgeClass) {
//     $calculateAgeClass->provide_birth_year(2010);
//     $age = $calculateAgeClass->get_age();
//     return $age;
// });

