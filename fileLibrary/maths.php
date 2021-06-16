<?php
$negative=-2;
function absolut($absolute){

    echo nl2br("This is a number transformed in absolute\n" );
    echo abs($absolute);
    echo nl2br("\n\n");
} 
absolut($negative);

$RoundNumber=2.7;
function rounded($Round){

    echo nl2br("This is a decinal rounded to integrer\n" );
    echo round( $Round );
    echo nl2br("\n\n");
}; 
rounded($RoundNumber);

$numbers=[1,4,2,5,7];
function high($highest){

    echo nl2br("This is the highest value of this [1,4,2,5,7] \n" );
    echo max($highest);
    echo nl2br("\n\n");
}; 
high($numbers);

$numbers=[1,4,2,5,7];
function low($lowest){

    echo nl2br("This is the lowest value of this [1,4,2,5,7]\n" );
    echo min($lowest);
    echo nl2br("\n\n");
}; 
low($numbers);

$randomNumber=rand(1,100);
function randoom($random){

    echo nl2br("This is the a randoom number between 1 and 100\n" );
    echo $random;
    echo"\n\n";
}; 
randoom($randomNumber);
?>

