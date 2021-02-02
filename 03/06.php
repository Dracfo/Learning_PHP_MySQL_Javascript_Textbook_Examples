<?php
  $author = "Steve Ballmer";

  echo "Developers, Developers, developers, developers, developers,
  developers, developers, developers, developers!

  - $author.";

  # Testing variable assignment
  echo "<br><br>";
  $y = 0;
  if (--$y == 0) echo $y;
  echo $y;

  # If you use --$y it'll subtract then compare, if you $y-- it will compare then subtract
?>
