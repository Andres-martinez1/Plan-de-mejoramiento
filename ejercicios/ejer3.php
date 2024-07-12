<?php


$n=readline("Ingrese un número entero para el conteo de las cifras:");

if ($n>=10000){
    echo"El número"." ".$n." "."tiene cuatro cifra";
}

elseif ($n<10){
    echo"El número"." ".$n." "."tiene una cifras";
}

elseif ($n<100){
    echo"El número"." ".$n." "."tiene dos cifras";
}

elseif ($n<1000){
    echo"El número"." ".$n." "."tiene tres cifras";
}

