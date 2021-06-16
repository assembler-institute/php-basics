<div>
    <h3>Working with Arrays</h3>
    <div class="textArr">
        <h4>simple array composed of text strings</h4>
       <h5>
             <?php
        echo ' $myArr = array("Red", "Yellow", "Green", "Pink"); </br>
        print_r($myArr); <p>output:</p>';
        $myArr = array("Red", "Yellow", "Green", "Pink");
        print_r($myArr);
        ?>
       </h5>
    </div>
     <div class="numberArr">
        <h4>simple array composed of text strings</h4>
       <h5>
             <?php
        echo ' $myArr = array(0.5, 34, 222, 9.231); </br>
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
        echo ' $myPhoneData = array("Home" => "123-4567", "Mobile" => array("Mobile_1" => "012-321-2134", "Mobile_2" => "012-353-1233"), "Office" => "212-1234");</br>
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
        echo ' $myBag = array("keys", "cellphone", "wallet");</br>
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
        echo '$myBag = array("keys", "cellphone", "wallet");</br>
        $myBackpack = array("laptop", "notebooks", "pens");</br>
        $myBelongings = array_merge($myBag, $myBackpack);</br>
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
        echo '$myBag = array("keys", "cellphone", "wallet");</br>
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
        echo '$myBag = array("keys", "cellphone", "wallet");</br>
        echo end($myBag);  <p>output:</p>';
        $myBag = array("keys", "cellphone", "wallet");
        $lipstick = "lipstick";
        array_push($myBag, $lipstick); 
        print_r($myBag);
        ?>
       </h5>
    </div>
</div>