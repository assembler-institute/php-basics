<div>
    <h3>Working with Arrays</h3>
    <div class="textArr">
        <h4>simple array composed of text strings</h4>
        <h5>
            <?php
            // defining an array with text strings
            echo ' $myArr = array("Red", "Yellow", "Green", "Pink"); <br>
        print_r($myArr); <p>output:</p>';
            $myArr = array("Red", "Yellow", "Green", "Pink");
            print_r($myArr);
            ?>
        </h5>
    </div>
    <div class="numberArr">
        <h4>simple array composed of whole numbers and decimal numbers</h4>
        <h5>
            <?php
            // defining an array with numbers and decimal numbers
            echo ' $myArr = array(0.5, 34, 222, 9.231); <br>
        print_r($myArr); <p>output:</p>';
            $myArr = array(0.5, 34, 222, 9.231);
            print_r($myArr);
            ?>
        </h5>
    </div>
    <div class="multiArr">
        <h4>multidimensional array</h4>
        <h5>
            <?php
            // defining a multidimensional array
            echo ' $myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");<br>
        print_r($myPhoneData); <p>output:</p>';
            $myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");
            print_r($myPhoneData);
            ?>
        </h5>
    </div>
    <div class="arrLength">
        <h4>count() : length of an array</h4>
        <h5>
            <?php
            // using a function to obtain the length of an array
            echo ' $myBag = array("keys", "cellphone", "wallet");<br>
        echo count($myBag); <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            echo count($myBag);
            ?>
        </h5>
    </div>
    <div class="arrLength">
        <h4>array_merge() : combine arrays</h4>
        <h5>
            <?php
            // using a function to obtain the combination of two arrays
            echo '$myBag = array("keys", "cellphone", "wallet");<br>
        $myBackpack = array("laptop", "notebooks", "pens");<br>
        $myBelongings = array_merge($myBag, $myBackpack);<br>
        print_r($myBelongings);  <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            $myBackpack = array("laptop", "notebooks", "pens");
            $myBelongings = array_merge($myBag, $myBackpack);
            print_r($myBelongings);
            ?>
        </h5>
    </div>
    <div class="lastElement">
        <h4>end() : the last element of an array</h4>
        <h5>
            <?php
            // using a function to obtain the last element of an array
            echo '$myBag = array("keys", "cellphone", "wallet");<br>
        echo end($myBag);  <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            echo end($myBag);
            ?>
        </h5>
    </div>
    <div class="lastElement">
        <h4>array_push() : add a new element to an array</h4>
        <h5>
            <?php
            // using a function to add a new element to an array
            echo '$myBag = array("keys", "cellphone", "wallet");<br>
         $lipstick = "lipstick";<br>
        array_push($myBag, $lipstick); <br>
        print_r($myBag);<br>
        echo end($myBag);  <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            $lipstick = "lipstick";
            array_push($myBag, $lipstick);
            print_r($myBag);
            ?>
        </h5>
    </div>
    <div class="sortArray">
        <h4>sort() : sorting array in ascending order</h4>
        <h5>
            <?php
            // sorting an array in ascending order
            echo '$myBag = array("keys", "cellphone", "wallet");<br>
        sort($myBag);  
        $myBagLength = count($myBag);<br>
        for($x = 0; $x < $myBagLength; $x++) {<br>
            echo $myBag[$x];<br>
        }
        <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            sort($myBag);
            $myBagLength = count($myBag);
            for ($x = 0; $x < $myBagLength; $x++) {
                echo $myBag[$x];
                echo "<br>";
            }
            ?>
        </h5>
    </div>
    <div class="sortArrayDescending">
        <h4>sort() : sorting array in descending order</h4>
        <h5>
            <?php
            // sorting an array in descending order
            echo '$myBag = array("keys", "cellphone", "wallet");<br>
        rsort($myBag);  
        $myBagLength = count($myBag);<br>
        for($x = 0; $x < $myBagLength; $x++) {<br>
            echo $myBag[$x];<br>
        }
        <p>output:</p>';
            $myBag = array("keys", "cellphone", "wallet");
            rsort($myBag);
            $myBagLength = count($myBag);
            for ($x = 0; $x < $myBagLength; $x++) {
                echo $myBag[$x];
                echo "<br>";
            }
            ?>
        </h5>
    </div>
    <div class="sortValue">
        <h4>asort() : sorting array according to value</h4>
        <h5>
            <?php
            // sorting an array according to value
            echo '$productsPrice = array("blue-shirts" => 64, "red-shoes" => 48, "black-pants" => 55);<br>
        asort($productsPrice);  
        $priceLength = count($productsPrice);<br>
        foreach($productsPrice as $x => $x_value) {<br>
            echo "KEY=" . $x . ", Value=" . $x_value;<br>
        };
        <p>output:</p>';
            $productsPrice = array("blue-shirts" => 64, "red-shoes" => 48, "black-pants" => 55);
            asort($productsPrice);
            foreach ($productsPrice as $x => $x_value) {
                echo "KEY=" . $x . ", Value=" . $x_value;
                echo "<br>";
            };
            ?>
        </h5>
    </div>
</div>