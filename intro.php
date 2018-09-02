<?php
  // Variables declared using $
  $a = 5;
  $b = 10;
  echo ($a + $b);

  echo '<br/>';
  
  // Strings concatenated using .
  $first = 'howie';
  $last = 'mann';
  echo $first . ' ' . $last;

  echo '<br/>';

  // Conditionals similar to JS
  // Use double quotes to perform string interpolation
  $role = 'admin';
  if ($role === 'admin') {
    echo "Role is $role";
  } elseif ($role === 'user') {
    echo "User logged in";
  } else {
    echo "All else";
  }

  echo '<br/>';

  // For loops
  for ($num = 1; $num <= 10; $num++) {
    echo $num;
  }

  echo '<br/>';

  // While loops
  $num = 1;
  while ($num <= 10) {
    echo $num;
    $num++;
  }

  echo '<br/>';

  // Arrays
  $family = array('howie', 'hela', 'felix');
  echo $family[0];
  echo $family[1];
  echo $family[2];
  // Push value onto en d of array
  array_push($family, 'miaow');
  echo $family[3];

  echo '<br/>';

  // Loop through arrays using foreach
  foreach($family as $value) {
    echo $value;
  }

  echo '<br/>';

  // Arrays with key value pairs (similar to ruby)
  $fruitSalad = array('apple' => 'red', 'banana' => 'yellow', 'pear' => 'hazel', 'grape' => 'purple');
  echo $fruitSalad[apple];
  
  echo '<br/>';
  // Loop through key value pairs
  foreach($fruitSalad as $key => $value) {
    echo "fruit: $key; color is: $value <br/>";
  }

  echo '<br/>';

  // Functions similar to JS
  $addNumbers = function($a, $b) {
    return $a + $b;
  };
  echo $addNumbers(40,2);

  // Anonymous function
  function capitalize($word) {
    return strtoupper($word[0]) . substr($word, 1);
  };
  echo capitalize('banana');

  echo '<br/>';
  // Classes
  class Dog {
    private $name;

    function set_name($new_name) {
      $this->name = $new_name;
    }
    
    function get_name(){
      return capitalize($this->name);
    }

    function adder($a,$b){
      // We must access global variables from within class methods
      global $addNumbers;
      return $addNumbers($a,$b);
      
    }
  }

  $fluffy = new Dog();
  $snowy = new Dog();
  $fluffy->set_name("fluffykins");
  $snowy->set_name("snowzzy");
  echo $fluffy->get_name();
  echo "<br/>";
  echo $snowy->get_name();
  echo $snowy->adder(10,5);
?>


