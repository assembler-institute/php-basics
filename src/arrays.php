<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>

<body>
  <h2>Arrays PHP</h2>
  <div>
    <p>
      <?php
      // Defining simple string array
      $myStringArray = array("a", "b", "c", "d");
      ?>
    </p>
    <p>
      <?php
      // Defining simple number array
      $myNumberArray = array(1, 1.5, 9.4, 10);
      ?>
    </p>
    <p>
      <?php
      // Defining multidimensional array
      $myMultidimensionalArray = array(
        array("Tommy", 22, 1.70),
        array("Elena", 28, 1.55),
        array("John", 44, 1.84),
        array("Anna", 18, 1.60)
      );
      echo "<strong>My multidimensional array:</strong> <br/>";
      for ($row = 0; $row < 4; $row++) {
        for ($col = 0; $col < 3; $col++) {
          echo $myMultidimensionalArray[$row][$col];
          echo " ";
        }
        echo "<br/>";
      }
      ?>
    </p>
    <p>
      <?php
      // Getting length array
      $myArray = array("a", "b", "c", "d");
      $myArrayLength = count($myArray);
      echo "My array is ('a', 'b', 'c', 'd') and its length is $myArrayLength";
      ?>
    </p>
    <p>
      <?php
      // Combining two arrays
      $myArray1 = array("a", "b", "c", "d");
      $myArray2 = array("1", "2", "3", "4");
      $myArrayResult = array_merge($myArray1, $myArray2);
      echo "Frist array ('a', 'b', 'c', 'd') <br/>";
      echo "Second array ('1', '2', '3', '4') <br/>";
      echo "My array merged is: <br/>";
      for ($i = 0; $i < count($myArrayResult); $i++) {
        echo $myArrayResult[$i];
      }
      ?>
    </p>
    <p>
      <?php
      // Getting last element of an array
      $myArray = array("a", "b", "c", "d");
      $lastElement = end($myArray);
      echo "The last element of ('a', 'b', 'c', 'd') is $lastElement";
      ?>
    </p>
    <p>
      <?php
      // Pushing new element into an array
      $myArray = array("a", "b", "c", "d");
      $elementToAdd = "e";
      array_push($myArray, $elementToAdd);
      echo "Initial array ('a', 'b', 'c', 'd') <br/>";
      echo "Array with value pushed (";
      for ($i = 0; $i < count($myArray); $i++) {
        echo ("' $myArray[$i]',");
      }
      echo ")";
      ?>
    </p>
  </div>
</body>

</html>