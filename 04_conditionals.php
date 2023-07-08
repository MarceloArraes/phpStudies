<?php

$age = 20;

// if($age >= 18){
//   echo 'You are older or equal age to 18 years old  ';
// }  else {
//   echo 'you are younger then 18 years old  ';
// }

$age2 = date("H");

// echo $age2;

$posts = ['First Post'];

// echo !empty($posts) ? $posts[0] : 'No Posts';

$favcolor = 'dasds';

switch ($favcolor) {
  case 'red':
    # code...
    echo 'its red';
    break;
  case 'blue':
    # code...
    echo 'its blue';
    break;

  default:
    echo 'nor blue or red';
    break;
}

?>