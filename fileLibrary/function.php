<?php
    function sum($a,$b){
        return $a+$b;
        }
    function multi($a,$b){
        return $a*$b;
        }
    function div($a,$b){
        return $a/$b;
        }
    function multipleOperator($a,$b,$op){
        switch ($op) {
            case '+':
                return $a+$b;
                
            case '-':
                return $a-$b;
                
            case '*':
                return $a*$b;
                        
            case '/':
                return $a/$b;
                            
            
            default:
                # code...
                break;
        }
        
        }

?>