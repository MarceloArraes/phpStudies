<?php
  function registerUser(){
  echo 'fisrt function';
  }
  registerUser();
  echo "<br>";
  function sum($n1, $n2){
  return $n1 + $n2;
  }

echo sum(1, 3);

  echo "<br>";

  $multiply = fn($n1, $n2) => $n1 * $n2;

  echo $multiply(3, 6);
?>