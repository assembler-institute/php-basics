<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
 $sum= function($a,$b){
    return  $a+$b;
  };

  print_r($sum(1,2));
  echo "<br>";

  $multiplication = function($a,$b){
    return $a*$b;
  };
  print_r($multiplication(3,4));
  echo "<br>";

  $division = function($a,$b){
    return $a/$b;
  };
  print_r($division(10,100));
  echo "<br>";

  $operator_function = function($a,$b,$c){ 
    $c = strval($c);
    switch($c){
        case "+":
            return "You selected a sum. {$a}+{$b} = " . $a+$b;
            break;
        case "*":
          return "You selected a multiplication. {$a}*{$b} = " .$a*$b;
            break;
        case "/":
          return "You selected a divison {$a}/{$b} = " . $a/$b;
            break;
        default:
          return "You forgot to select an operator or to input some data";
          break;       
    };
  };
  // print_r($operator_function(10,5,"*"));
  echo "<br>"
  ?>

<form name="form" action="functions.php" method="POST">
Operator: <br>
<input name="input1" placeholder="1st variable"></input>
<input name="input2" placeholder="2nd variable"></input>
<select multiple name="operator">
  <option value="+">+</option> 
  <option value="*">*</option>      
  <option value="/">/</option> 
</select>      
<input type ="submit"/>
</form>
</body>
</html>
<?php
  
  if (isset($_REQUEST["operator"])){
  $input1 = intval($_POST["input1"]);
  $input2= intval($_POST["input2"]);
  echo $operator_function($input1,$input2,$_POST["operator"]);
  };

  //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //     // collect value of input field
  //     $data = $_REQUEST["operator"];
    
  //     if (empty($data)) {
  //         echo "data is empty";
  //     } else {
  //         echo $data;
  //     }
  // }

  // // Closing the connection.
  // $conn->close();
?>