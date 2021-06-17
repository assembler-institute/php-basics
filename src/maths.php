<div>
  <h3>Using Mathematical Operators and the Specific PHP functions</h3>
  <div class="absoluteValue">
    <h4>abs() : returns an absolute value of a number</h4>
    <h5>
      <?php
      // using a function to return an absolute number
      $myValue = -12;
      $absoluteValue = abs($myValue);
      echo '$myValue = -12;<br>
    $absoluteValue = abs($myValue);<br> <p>output:</p>';
      echo $absoluteValue;
      ?>
    </h5>
  </div>
  <div class="ceilValue">
    <h4>ceil() : rounds numbers up to the nearest integer</h4>
    <h5>
      <?php
      // using a function to return a rounded number to the nearest integer
      $myValue = 23.34;
      $roundedValue = ceil($myValue);
      echo '$myValue = 23.34;<br>
    $roundedValue = ceil($myValue);<br> <p>output:</p>';
      echo $roundedValue;
      ?>
    </h5>
  </div>
  <div class="highestValue">
    <h4>max() : finds the highest value</h4>
    <h5>
      <?php
      // using a function to return the highest value
      $myArray = array(34, 12, 76, 1, 75, 66);
      $highestValue = max($myArray);
      echo '$myArray = array(34, 12, 76, 1, 75, 66);<br>
    $highestValue = max($myArray);<br> <p>output:</p>';
      echo $highestValue;
      ?>
    </h5>
  </div>
  <div class="lowestValue">
    <h4>min() : finds the lowest value</h4>
    <h5>
      <?php
      // using a function to return the lowest value
      $myArray = array(34, 12, 76, 1, 75, 66);
      $lowestValue = min($myArray);
      echo '$myArray = array(34, 12, 76, 1, 75, 66);<br>
    $lowestValue = min($myArray);<br> <p>output:</p>';
      echo $lowestValue;
      ?>
    </h5>
  </div>
  <div class="randomValue">
    <h4>rand() : returns a random number</h4>
    <h5>
      <?php
      // using a function to return a random number
      $myRandomNumber = rand(10, 500);
      echo '$myRandomNumber = rand((10, 500));<br> <p>output:</p>';
      echo $myRandomNumber;
      ?>
    </h5>
  </div>
  <div class="squareValue">
    <h4>sqrt() : returns the square root of a number</h4>
    <h5>
      <?php
      // using a function to return the square root of a number
      $myNumber = 1024;
      echo '$myNumber = 1024;<br>
echo sqrt($myNumber);<br> <p>output:</p>';
      echo sqrt($myNumber);
      ?>
    </h5>
  </div>
  <div class="piValue">
    <h4>pi() : returns the value of PI</h4>
    <h5>
      <?php
      // using a function to return the value of PI
      echo 'echo (pi());<br> <p>output:</p>';
      echo (pi());
      ?>
    </h5>
  </div>
</div>