<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Types</title>
</head>
<body>
  <?php
//string
$string = "Walber";
echo var_dump($string);

//integer
$int = 34;
echo var_dump($int);

//FLoat
$float = 2.32;
echo var_dump($float);

//Boolean
$boolean = true;
echo var_dump($boolean);

//Null
$a = null;

//Array
$array = array("Ricardo"=>"38","Pamela"=>"24","Mario"=>"65");
echo "Pamela is " . $array["Pamela"] . " years old.";

//Object
class Team {
  function projectDescription(){
    echo "Make a music stream platform.";
  }
  public $developer = "Daniel";
  public $projectManager = "Carla";
  public $customerSupport = "Muriel";
}
$team = new Team;
// Function Method to get object vale.
function getMembersTeam(){
  return 'developer';
}
print $team->{getMembersTeam()};
echo "<br>";
?>
</body>
</html>