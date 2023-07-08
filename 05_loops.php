<?php
$lotr_characters = [
  [
    'name' => 'Frodo',
    'race' => 'hobbit',
    'side' => 'fellowship'
  ],
  [
    'name' => 'Saruman',
    'race' => 'Mayar',
    'side' => 'white Tower'
  ],
  [
    'name' => 'Sauron',
    'race' => 'Mayar',
    'side' => 'Dark Lord Morgoroth'
  ],
];

// for($i=0; $i < 10; $i++) {
//   # code...
//   echo 'number: ' . $i;
// }

$x = 0;
// while($x < 15){
//   echo 'its ' . $x . ' ';
//   $x++;
// }

// do {
//   # code...
//   echo 'do while: ' . $x . ' ';
//   $x++;
// } while ($x <= 10);

foreach ($lotr_characters as $key => $value) {
  # code...
  var_dump( $lotr_characters[$key]['name']);
  echo "<br>";
}

?>