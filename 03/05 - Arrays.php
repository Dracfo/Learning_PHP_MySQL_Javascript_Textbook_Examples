<?php
  $oxo = array(array('x', "&nbsp;", 'o'),
               array('o', 'o', 'x'),
               array('x', 'o', ' '));
  
  echo $oxo[1][2];

  # Let's try to print the whole thing, it'll be easier once I learn for loop syntax but this is fine for now
  echo "<br>" . "<b>The Game</b>" . "<br>";
  echo $oxo[0][0] . " " . $oxo[0][1] . " " . $oxo[0][2];
  echo "<br>";
  echo $oxo[1][0] . " " . $oxo[1][1] . " " . $oxo[1][2];
  echo "<br>";
  echo $oxo[2][0] . " " . $oxo[2][1] . " " . $oxo[2][2];

  # It doesn't seem to be considering the space strings in the original array as space characters, seems to interperet as being null for some reason.
  # If I change the ' ' for '&nbsp;' it seems to work though
?>
