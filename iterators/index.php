<?php 

  // For loop
  echo "<p>F O R  L O O P</p>";
  $fruits = ["🍏", "🍎", "🍐", "🍊"];

  ?>
  <ol>
    <?php
      for ($i=0; $i < count($fruits); $i++) { 
        echo "<li>$fruits[$i]</li>";
      }
    ?>
  </ol>
  <?php


  // Foreach
  echo "<p>F O R E A C H</p>";
  $emojis = ['🐶' => 'Perro' , '🐼' => 'Panda', '🦁' => 'Leon'];

  class Animals {
    public $type="animal";
    public $emoji;
    public $name;
  };

  ?>
  <ul>
    <?php
    foreach ($emojis as $key => $emoji) {
      $animal = new Animals();
      $animal->emoji = $emoji;
      $animal->name = $key;

      echo "<li>This animal is $animal->emoji and his name is $animal->name";
    }
    ?>
  </ul>
  <?php    
  
  // While
  echo "<p> D O - W H I L E</p>";
  $emojis = [['🥜', 'Peanut'] , ['🥑', 'Advocato'], ['🍑', 'Peach'], ['🥞', 'Pancakes']];

  class Food {
    public $type="food";
    public $emoji;
    public $name;
  };

  ?>
  <ul>
    <?php

    $index = 0;
    while ($index < count($emojis)) {
      $food = new Food();
      $food->emoji = $emojis[$index][0];
      $food->name = $emojis[$index][1];
      echo "<li>$food->emoji  $food->name";
      $index++;
    }


    $array = ['🍁', '🍄', '🌿', '🌱']
    ?>
  </ul>
  <?php

    echo "<p>D O - W H I L E</p>";
    $elementsArray = array (['special-leaf','🍁'], ['fungi','🍄'], ['green-branch','🌿'], ['seed-of-life','🌱']);

    class Mistery {
      public $type="nature";
      public $emoji;
      public $name;
    }
    
    echo '<ul>';
    $index=0;
    do {

      $plants=New Mistery();
      $plants->emoji= $elementsArray[$index][1];
      $plants->name=$elementsArray[$index][0];
      echo "<li>".$plants->name." ".$plants->emoji."</li>";
      $index++;

    }

    while ($index < count($elementsArray));
    echo "</ul>";

?>
