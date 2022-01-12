<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/pesquisarDiario.php'); //incluir arquivo 
$v = new Diario(); //instância da classe 
$v->txtValorInicialDia = $_GET["txtValorInicialDia"]; //Consumindo a clase para atribuir um valor
$v->txtPorcentagemDia = $_GET["txtPorcentagemDia"]; //Consumindo a clase para atribuir um valor
$v->txtdateinicialDia = $_GET["txtdateinicialDia"]; //Consumindo a clase para atribuir um valor
$v->txtdatefinalDia = $_GET["txtdatefinalDia"];  //Consumindo a clase para atribuir um valor
$v->calculo_diario(); //Consumindo a clase e acionando o metodo
?>

