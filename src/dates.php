<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>4.1 Instance the Date Time class and then invoke the format</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$date = new DateTime();
$date->format('Y-m-d H:i:s');
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>4.2 Get the current date in any format</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$currentDate = getdate(); 
print $currentDate
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$currentDate = getdate(); 
print_r($currentDate)
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>4.3 Get the current day</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$today = date('l');
print_r($today);
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$today = date('l');
print_r($today);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>4.4 Get the current month in numerical format (1-12)</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$month = date('m');
print_r($month);
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$month = date('m');
print_r($month);
?>
    </i>
</div>

    <div style="padding-bottom: 2rem">
        <b>4.5 Get the current minute with leading zeros (00 - 59)</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$minutes = date('m');
print_r($minutes);
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$minutes = date('i');
print_r($minutes);
?>
    </i>
</div>

</div>
</code>