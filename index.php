<?php 

$entradaPeso = (float) 81.5; 
$entradaAltura = (float) 1.75;
$entradaTriaAltura = (int) 4;
$entradaTriaBase = (int) 6;

function calculaIMC(float $entradaPeso, float $entradaAltura):float 
{
    $imc = $entradaPeso/($entradaAltura^2);
    return $imc; 
  
}
$saidaIMC = calculaIMC($entradaPeso, $entradaAltura); 
echo "O seu Imc é: ".$saidaIMC;

function calculaArea(int $entradaTriaBase, int $entradaTriaAltura):int 
{
    $area = ($entradaTriaBase * $entradaTriaAltura)/ 2;
    return $area; 
}

$saidaArea = calculaArea($entradaTriaBase, $entradaTriaAltura);
echo "A área total do triângulo é: ".$saidaArea; 

?>