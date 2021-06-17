<code>
    <div style="margin-bottom:15px">
        <b>Generate a snippet that makes use of for</b><br />
        <pre>
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
        </pre>
        <u>Result:</u>
        <i>
        <?php 
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
                }
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Generate a snippet that makes use of foreach</b><br />
        <pre>
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor;
}
        </pre>
        <u>Result:</u>
        <i>
        <?php 
        $array = array(1, 2, 3, 4);
        foreach ($array as &$valor) {
            $valor = $valor * 2;
            echo $valor;
        }
        ?>        
        </i>
    </div>


    <div style="margin-bottom:15px">
        <b>Generate a snippet that makes use of while</b><br />
        <pre>
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
        </pre>
        <u>Result:</u>
        <i>
        <?php 
        $i = 1;
        while ($i <= 10):
            echo $i;
            $i++;
        endwhile;
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Generate a snippet that makes use of do while</b><br />
        <pre>
$i = 0;
do {
    echo $i;
    $i++
} while ($i < 5);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$i = 0;
do {
    $i++;
    echo $i;
} while ($i < 5);
        ?>        
        </i>
    </div>

</code>