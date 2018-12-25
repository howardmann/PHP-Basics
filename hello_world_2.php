<?php
  $first = "Howie";
  $last = "Mann";

  echo $first . ' ' . $last;

  echo "<br>My name is $first $last <br>";

  // Arrays
  $colors = ['red', 'orange', 'yellow', 'blue'];
  print_r($colors);

  function capitalize($el) {
    $first = strtoupper($el[0]);
    $remainder = substr($el, 1);
    return $first . $remainder;
  };

  $addFruitString = function($el) {    
    return capitalize($el) . ' Fruit';
  };
  
  $fruitNames = array_map($addFruitString, $colors);
  print_r($fruitNames);

  // Conditionals
  // Same as JS
  function checkFruit($fruit) {
    if ($fruit === 'apple' || $fruit === 'strawberry' || $fruit === 'cherry') {
      return 'red';
    }
    return 'not red';
  }

  echo checkFruit('apple');
  echo checkFruit('cherry');
  echo checkFruit('orange');

  // Using array
  function checkFruitArray($fruit) {
    $redFruits = ['apple', 'strawberry', 'cherry', 'rasberry'];
    if (in_array($fruit, $redFruits)) {
      return 'red';
    };
    return 'not red';
  }
  echo checkFruitArray('apple');
  echo checkFruitArray('cherry');
  echo checkFruitArray('orange');

?>;

