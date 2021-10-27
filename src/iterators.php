<samp>
<div style="padding-left: 1rem">
    <div style="padding-bottom: 3rem">
        <b>2.1 Generate a snippet that makes use of for</b>
        <pre>
<em><u>code:</u></em>

<span style="color: blue;">
for($i = 0; $i <= 5; $i++){
echo $i;
}
</span>
        </pre>
<em><u>Result:</u></em>
    <i>
    <?php
        for($i = 0; $i <= 5; $i++){
            echo $i;
        }
    ?>
    </i>
    </div>

    <div style="padding-bottom: 3rem">
        <b>2.2 Generate a snippet that makes use of foreach
</b>
        <pre>
<em><u>code:</u></em> 

<span style="color: blue;">$number = array(5,4,3,2,1);
foreach($number as $i){
$i = $i - 1;
echo $i;
}
</span>
        </pre>
<em><u>Result:</u></em>
    <i>
    <?php
        $number = array(5,4,3,2,1);
        foreach($number as $i){
            $i = $i - 1;
            echo $i;
        }
    ?>
    </i>
    </div>

    <div style="padding-bottom: 2rem">
        <b>2.3 Generate a snippet that uses while</b>
        <pre>
<em><u>code:</u></em> 

<em>option A:</em>
<span style="color: blue;">
    while ($i <= 5) {
        echo $i++;
    }
    ?>
</span>
<em>option B:</em>
<span style="color: blue;">
$i = 0;
while ($i <= 5):
    echo $i;
    $i++;
endwhile;
</span>
</pre>
<em><u>Result:</u></em>
<i>
<br />
<br />
<em>option A:</em>
<?php
        while ($i <= 5) {
            echo $i++;
        }
        ?>
<br />
<em>option B:</em>
    <?php
        $i = 0;
        while ($i <= 5):
            echo $i;
            $i++;
        endwhile;
    ?>
    </i>
    </div>

    <div style="padding-bottom:2rem">
">
        <b>2.4 Generate a snippet that uses do while</b>
        <pre>
<em><u>code:</u></em> 

<span style="color: blue;">
$i = 0;
do {
    echo $i = $i + 1;
    $i++;
} while ($i < 10);
</span>
        </pre>
<em><u>Result:</u></em>
    <i>
    <?php
$i = 0;
do {
    echo $i = $i + 1;
    $i++;
} while ($i < 10);
    ?>
    </i>
    </div>
</div>
</code>