<?php 
  // Use in development mode to display errors  //Boilerplate
  // To execute PHP file in command line run php -f filename.php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Associative array
  $data = [
    [ 'university' => true, 'salary'=> 300, 'age' => 42, 'gender' => 'male'],
    [ 'university'=> true, 'salary'=> 200, 'age'=> 35, 'gender'=> 'female' ],
    [ 'university'=> false, 'salary'=> 80, 'age'=> 34, 'gender'=> 'male' ],
    [ 'university'=> true, 'salary'=> 300, 'age'=> 23, 'gender'=> 'female' ],
    [ 'university'=> true, 'salary'=> 250, 'age'=> 52, 'gender'=> 'female' ],
    [ 'university'=> true, 'salary'=> 100, 'age'=> 31, 'gender'=> 'female' ],
    [ 'university'=> true, 'salary'=> 200, 'age'=> 45, 'gender'=> 'male' ],
    [ 'university'=> true, 'salary'=> 70, 'age'=> 18, 'gender'=> 'male' ],
    [ 'university'=> false, 'salary'=> 50, 'age'=> 21, 'gender'=> 'male' ],
    [ 'university'=> true, 'salary'=> 30, 'age'=> 43, 'gender'=> 'female' ]
  ];


// ** FILTER **
  // Filter for university graduates only
  $universityTrue = array_filter($data, function($el){
    return $el['university'] === true;
  });
  //print_r($universityTrue);

  // Filter for male university graduates
  $universityTrueMale = array_filter($universityTrue, function($el){
    return $el['gender'] === 'male';
  });
  // print_r($universityTrueMale);

//** MAP **
  // Map for male university graduate salary
  $salaryMaleUniversityArr = array_map(function($el){
    return $el['salary'];
  }, $universityTrueMale);
  // print_r($salaryMaleUniversityArr);

// ** REDUCE **
  // Average male university graduate salary
  $avgSalaryMaleUniversity = array_reduce($salaryMaleUniversityArr, function($sum, $tally){
    return $sum + $tally;
  }, 0) / count($salaryMaleUniversityArr);
  // print_r($avgSalaryMaleUniversity);


// ** REUSABLE FUNCTION **

  function calcAvgSalary($data, $gender) {
    // Filter for university true and gender based on variable
    // Note: to access outer scope you must include keyword `use` in function
    $universityTrue = array_filter($data, function($el) use ($gender){
      return $el[university] === true && $el[gender] === $gender;
    });

    // Calculate average salary
    $avgSalary = array_reduce($universityTrue, function($sum, $el){
      return $sum + $el[salary];
    },0) / count($universityTrue);

    return $avgSalary;
  };

  // print_r(calcAvgSalary($data, 'female'));

// ** HIGHER ORDER FUNCTION ** 

  // Higher Order Functions are those that take a function and return another function

  // Helper function that checks if an object's property equals a certain value 
  function propEq($prop, $value) {
    return function($obj) use ($prop, $value) {
      if ($obj[$prop] === $value) {
        return true;
      } else {
        return false;
      }
    };
  }

  // Helpers that check if prop equals certain value
  $isUniversity = propEq('university', true);
  $isMale = propEq('gender', 'male');
  $isFemale = propEq('gender', 'female');

  // Makes doing filters easier
  $universityArr = array_filter($data, $isUniversity);
  $maleArr = array_filter($data, $isMale);
  $femaleArr = array_filter($data, $isFemale);

  print_r($femaleArr);






?>