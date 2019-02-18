<?php 
  $first = "Howie";
  $last = "Mann";

  echo "My name is $first $last <br>";

  $familyNames = [
    'Howie',
    'Hela',
    'Felix',
    'Felicity'
  ];

  print_r($familyNames);

  // Require function from other file
  require('sayName.php');

  foreach ($familyNames as $name) {
    echo "<br>".sayName($name);
  }

  // Functional style function returning function
  // Rely on keyword `use`
  // PHP relies on following syntax function($arg) use ($variable) to access outer scope
  function addSurname($surname){
    return function($name) use ($surname){
      return "$name $surname";
    };
  }

  $addMann = addSurname('Mann');

  echo "<br>";
  echo $addMann('Bob');

  // Using map in PHP is array_map
  // We are using the function we created above
  $result = array_map($addMann, $familyNames);
  print_r($result);

?>

