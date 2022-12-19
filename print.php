<?php 
echo 'Hello World from echo <br>';

print 'Hello World from print <br>';

$complexValue = ['Value1', 'Value2', ['Value3', 'Value4'], (object) array('index1' => 'Value5') ];

print_r($complexValue);
