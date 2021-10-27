<?php

class Operator {
  public $operator;

  function __construct($operator) {
    $this->operator = $operator;
  }
  function operateWithNumbers($a, $b) {
    return 
    " 
      echo('<pre>');
      echo('<span><strong>$a $this->operator $b</strong></span> = ');
      var_dump($a $this->operator $b);
      echo('</pre>');
    ";
  }
}

class NotOperator extends Operator {

  function __construct($operator) {
    parent::__construct($operator);
  }

  function operateWithNot($a) {

    return 
    "
      echo('<pre>');
      echo('<span><strong>$this->operator$a</strong></span> = ');
      var_dump($this->operator.$a);
      echo('</pre>');
    ";
  }
  
}

$operators = [
  'arithmetic' => ['+', '-', '*', '/', '%'],
  'comparison' => ['==','!=', '<','>', '<=','>='],
  'logical' => ['&&', 'And', '||', 'Or', 'Xor'],
  'not' => ['!']
];

foreach ($operators as $key => $value) {

  echo "<h1>$key operators</h1>";
  if ($key === 'not') {

    $op = new NotOperator($value[0]);
    $str = $op->operateWithNot(random_int(0, 1));
    eval("$str");

  } else {

    foreach($value as $operator) {
      $op = new Operator($operator);
      $str = $key !== 'logical' ? 
              $op->operateWithNumbers(random_int(0, 250),random_int(0, 10000)) : 
              $op->operateWithNumbers(random_int(0, 1), random_int(0, 1));
  
      eval("$str");
    }
  }
}
?>