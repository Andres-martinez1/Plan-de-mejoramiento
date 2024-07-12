<?php

$x=readline("Digite la cordenada del punto x recuerde que es de valor negativo");

$y=readline("Digite la cordenada del punto y recuerde que es de valor positivo");

if ($x>0 and $y>0){
    echo"I cuadrante";
}

elseif ($x<0 and $y > 0){
    echo"II cuadrante";
}

elseif ($x<0 and  $y <0){
    echo"III cuadrante";
}

elseif ($x<0 and $y <0){
    echo"Iv cuadrante";
   
}