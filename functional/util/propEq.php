<?php 

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


?>