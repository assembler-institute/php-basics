<?php
if(date("l")==="Monday"){
    echo "We are on Monday";
};

if(date("n")===10){
    echo "We are on Monday";
};

if(date("i")<10 || date("i")>15){
     echo "it match with one conditions";
}else{
    echo "does not meet any conditions";
};
echo date("w");
switch (date("w")) {
    case 1:
        echo date("l");
        break;
    case 2:
        echo date("l");
        break;
    case 3:
        echo date("l");
        break;
    case 4:
        echo date("l");
        break;
    case 5:
        echo date("l");
        break;
    case 6:
        echo date("l");
        break;
    case 7:
        echo date("l");
        break;
    default:
        echo "hay un error";
        break;
};

?>