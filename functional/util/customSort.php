<?php 
  // Native PHP sort mutates original arr
  // Functional HOF for sort
  function customSort($direction = null){
    if ($direction === 'desc') {
      return function($arr){
        $newArr = $arr;
        rsort($newArr);
        return $newArr;
      };
    } else {
      return function($arr){
        $newArr = $arr;
        sort($newArr);
        return $newArr;
      };
    }    
  }

?>