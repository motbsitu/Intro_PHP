<?php
  $descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android'
  ];
//add to array
  $descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

  // echo  $descriptions['Marvin'];

  // print_r($descriptions);

  //can't put in a normal double quoted string, add curly brackets
  echo "Earth is described as {$descriptions['Earth']}";

 ?>
