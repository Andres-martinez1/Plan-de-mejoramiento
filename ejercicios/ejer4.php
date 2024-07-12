<?php


$nombre=readline("nombre del postulante:");
$total=readline("Ingrese la cantidad total de preguntas que se le realizaron:");
$cantidad=readline("Ingrese la cantidad de preguntas que contestó correctamente:");

$proceso = $cantidad * $total;

if ($proceso>= 90 ){
    echo"El postulante:"." ".$nombre." "."se encuentra en un nivel superior con un porcentaje mayor o igual al 90%";
}

elseif ($proceso>= 75 and $proceso<90){
    echo"El postulante:"." ".$nombre." "."se encuentra en un nivel medio con un porcentaje mayor o igual 75% y menor a 90%";
}

elseif ($procesoporcen >= 50 and $proceso<75){
    echo"El postulante:"." ".$nombre." "."se encuentra en un nivel regular con un porcentaje mayor o igual 50% y menor a 75%";
}

elseif ($proceso<50){
    echo"El postulante:"." ".$nombre." "."se encuentra fuera del nivel con un porcentaje menor a 50%";
}



