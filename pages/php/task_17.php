<?php

// Star Pattern Triangle Downside Left
function print_pattern_triangle_downside_left($num1)
{
  for ($i = $num1; $i > 0; $i--) {
    for ($k = $i; $k < $num1; $k++) {
      echo "  ";
    }
    for ($j = 0; $j < $i; $j++) {
      echo "* ";
    }
    echo "<br>";
  }
}

// Star Pattern Triangle Upside Left
function print_pattern_triangle_upside_left($num2)
{
  for ($i = 0; $i <= $num2; $i++) {
    for ($j = 1; $j <= $i; $j++) {

      echo "* ";
    }
    echo "<br>";
  }
}

echo "<br>";

// Star Pattern Triangle Downside Right
function print_pattern_triangle_downside_right($num3)
{
  for ($i = $num3; $i >= 1; $i--) {
    for ($j = $num3 - $i; $j >= 1; $j--) {
      echo '&nbsp;&nbsp;';
    }
    for ($k = 1; $k <= $i; $k++) {
      echo '*';
    }
    echo '<br>';
  }
}

echo "<br>";

// Star Pattern Triangle Upside Right
function print_pattern_triangle_upside_right($num4)
{
  for ($i = 0; $i < $num4; $i++) {
    for ($j = 1; $j < $num4 - $i; $j++) {

      echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k <= $i; $k++) {
      echo "*";
    }
    echo "<br>";
  }
}


// Selection Pattern
function selection($num_pattern)
{
  $num1 = $num_pattern;
  print_pattern_triangle_downside_left($num1);

  echo "<br>";

  $num2 = $num_pattern;
  print_pattern_triangle_upside_left($num2);

  echo "<br>";

  $num3 = $num_pattern;
  print_pattern_triangle_downside_right($num3);

  echo "<br>";

  $num4 = $num_pattern;
  print_pattern_triangle_upside_right($num4);

  echo "<br>";
}

$num_pattern = 10;
selection($num_pattern);
