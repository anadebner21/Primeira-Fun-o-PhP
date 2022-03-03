<?php 

$entradaPeso = (float) 81.5; 
$entradaAltura = (float) 1.75;


function calculaIMC(float $entradaPeso, float $entradaAltura):float 
{
    $imc = $entradaPeso/($entradaAltura^2);
    return $imc; 
}

$saidaIMC = calculaIMC($entradaPeso, $entradaAltura); 
echo "O seu Imc é: ".$saidaIMC;

?>