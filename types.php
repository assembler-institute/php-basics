<?php include './incl/header.php'?>
<?php
echo "<h2>Types</h2>"."<br/>";

$foo=true;
$num=112;
$float=1.23;
$str="string";
$arr = array("arr1", "arr2", "arr3");
echo $foo."<br/>";
echo $num."<br/>";
echo $float."<br/>";
echo $str."<br/>";
echo $arr."<br/>";
echo "Print " .$arr[0] . ", " . $arr[1] . " and " . $arr[2] . "."."<br/>";
echo "<hr\>";
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
$null=NULL;
echo $null

?>
<?php include './incl/footer.php'?>