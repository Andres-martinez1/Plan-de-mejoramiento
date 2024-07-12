<?php

$salario=readline("Digite el sueldo del operario: ");

$aumento=readline("Digite la antigüedad del operario (en años de forma numerica):  ");

if ($salario<500 and $aumento >=10){
    $aumento = $salario*0.2;
    $sueldo_nuevo = $salario+$aumento;
    echo"Sueldo a pagar con aumento del 20%:   $".$sueldo_nuevo;
}

elseif ($salario<500 and $aumento <10){
    $aumento = $salario*0.05;
    $sueldo_nuevo = $salario+$aumento;
    echo"Sueldo a pagar con aumento del 5%:   $".$sueldo_nuevo;
}

else{
    echo"Sueldo sin cambios:$".$salario;
}
