<?php 
  // pramda library using it for pipe and map
  require ('../vendor/kapolos/pramda/src/pramda.php');

  // Execute code using local server
  // php -S localhost:3000

  // Planets data set
  $planets = [
    [
        "name" => "Earth",
        "order" => 3,
        "has" => ["moon", "oreos"],
        "contact" => [
            "name" => "Bob Spongebob",
            "email" => "bob@spongebob.earth"
        ]
    ],
    [
        "name" => "Mars",
        "order" => 4,
        "has" => ["aliens", "rover"],
        "contact" => [
            "name" => "Marvin Martian",
            "email" => "marvin@the.mars"
        ]
    ],
    [
        "name" => "Venus",
        "order" => 2,
        "has" => ["golden apple"],
        "contact" => [
            "name" => "Aphro Dite",
            "email" => "aphrodite@gods.venus"
        ]
    ],
    [
        "name" => "Mercury",
        "order" => 1,
        "has" => [],
        "contact" => [
            "name" => "Buzz Off",
            "email" => "no-reply@flames.mercury"
        ]
    ]
  ];

  // my own helper functions
  require('util/prop.php');
  require('util/customSort.php');


  // pramda library returns generators which need to be transformed to arrays. Don't ask me why, it's a php thing I guess
  // Turn toArray into higher order function
  // Future note: not worth remembering, this is a stupid pramda library thing that returns generators instead of arrays. Not worth knowing what a PHP generator object is
  function toArray(){
    return function($arr){
      return P::toArray($arr);
    };
  }

  // TASK: Get the contact names sorted alphabetically

  // Functions
  $getContactName = P::pipe(
    prop('contact'),
    prop('name')
  );
  
  $getContactNames = P::map($getContactName);

  $getSortedNames = P::pipe(
    P::map($getContactName),
    toArray(),
    customSort()
  );

  
  // Application
  $a = $getSortedNames($planets);
  print_r($a);
  // Array ( [0] => Aphro Dite [1] => Bob Spongebob [2] => Buzz Off [3] => Marvin Martian )



?>