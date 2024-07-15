<?php

echo 
"{1}cm                                                                                  
{2}k    
{3}P\n";

$desicion = readline("Elige la unidad a la aque quieres expresar:");

$cantidad = readline("Ingrese la cantidad en metros: ");

if ($desicion = 1){
    $op1= $cantidad * 100;
    echo $op1." "."centimetros";
}

elseif ($desicion = 2){
    $op2= $cantidad/100;
    echo $op2." "."kilometros";
}

elseif($desicion = 3){
    $op3 = $cantidad * 39.26;
    echo $op3." "."pulgadas";
}