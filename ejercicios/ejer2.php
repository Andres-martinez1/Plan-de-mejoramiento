<?php



$n1=readline("Digite el primer número:");

$n2=readline("Digite el segundo número:");


if ($n1 > $n2){
$suma=$n1 + $n2;
$resta=$n1 - $n2;
echo("El resultado de la suma es:".$suma." "."y el resultado de la resta es: "." ".$resta)."\n";
}
else{
$division=$n1 / $n2;
$multiplicacion=$n1 * $n2;
echo("El resultado de la division es:".$division." "."y el resultado de la multiplicacion es: "." ".$multiplicacion)."\n";

}



