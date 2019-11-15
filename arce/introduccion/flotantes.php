<?php

$flot = 1234.5678;
$flota = 12345.2e4;
$flotb = 7E-10;

$e = 1.23456789;
$d = 1.2345678901;
$epsilon = 0.00001;

if( abs($e == $d) < $epsilon ){
    print "Son iguales";
}else{
    print "Son diferentes";
} 

?>