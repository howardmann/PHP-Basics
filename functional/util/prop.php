<?php 

  // Helper function that return an object's property value
  function prop($prop) {
    return function($obj) use ($prop) {
      return $obj[$prop];
    };
  }


?>