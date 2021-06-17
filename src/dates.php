<code>
    <div style="margin-bottom:15px">
        <b>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</b><br />
        <pre>
$a = new DateTime();
$a->format('Y-m-d');
        </pre>
        <u>Result:</u>
        <i>
        <?php 
        $d = new DateTime();
echo $d->format('Y-m-d');
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Get the current date in any format</b><br />
        <pre>
$current = getdate();
        </pre>
        <u>Result:</u>
        <i>
        <?php
$current = getdate(); 
print_r($current)
        ?>        
        </i>
    </div>


    <div style="margin-bottom:15px">
        <b>Get the current day</b><br />
        <pre>
$today = date('l');
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$today = date('l');
echo $today;
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Get the current month in numerical format</b><br />
        <pre>
$month = date('m');
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$month = date('m');
echo $month;
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Get the current minute with leading zeros</b><br />
        <pre>
$minutes = date('i');
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$minutes = date('i');
echo $minutes;
        ?>        
        </i>
    </div>

</code>