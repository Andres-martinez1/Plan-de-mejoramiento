<?php

$Area=0;
$Perimetro=0;
$Base=(int)readline("Digite la base:");
$Altura=(int)readline("Digite la altura:");


$Area=(($Base)*($Altura));
$Perimetro=(($Base)*($Base)+($Altura)*$Altura);

echo("El area del rectangulo es:".$Area)."\n";
echo("El perimetro del rectangulo es:".$Perimetro);
