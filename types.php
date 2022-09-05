<?php
$foo = True; // assign the value TRUE to $foo

$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)

$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;
$d = 1_234.567; // as of PHP 7.4.0

echo `a
     b
    c`;

    $array = array(
        "foo" => "bar",
        "bar" => "foo",
    );
    
    // Using the short array syntax
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];



    class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();

?>