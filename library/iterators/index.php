<?php $fruits = ["🍏", "🍎", "🍐", "🍊"];

echo "<ul> F O R ";
for ($i=0; $i < count($fruits); $i++) {
  echo "<li>".$fruits[$i]."</li>";
}
echo "</ul>";

?>

<?php

$animalsArray = array ("dog" => "🐶", "bear" => "🐼", "lion" => "🦁");

  class Animals
  {
    public $type="animal";
    public $emoji;
    public $name;

  }

  echo "<ul> F O R E A C H";
  foreach ($animalsArray as $key => $value) {

  $animal=New Animals();
  $animal->emoji= $value;
  $animal->name=$key;

echo "<li>".$animal->name." ".$animal->emoji."</li>";

}

echo "</ul>";

?>


<?php

$foodArray = array (["peanut", "🥜"], ["avocado" ,"🥑"], ["peach" , "🍑"], ["pancakes","🥞"]);

  class Food
  {
    public $type="food";
    public $emoji;
    public $name;

  }
  echo "<ul> W H I L E";

  $index=0;

  while ($index < count($foodArray)) {

    $food=New Food();
    $food->emoji= $foodArray[$index][1];
    $food->name=$foodArray[$index][0];

    echo "<li>".$food->name." ".$food->emoji."</li>";

    $index++;
}

echo "</ul>";

?>

<?php
$elementsArray = array (['special-leaf','🍁'],
['fungi','🍄'],
['green-branch','🌿'],
['seed-of-life','🌱']);
  class Mistery
  {
    public $type="nature";
    public $emoji;
    public $name;

  }
  echo "<ul> D O -  W H I L E";

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
