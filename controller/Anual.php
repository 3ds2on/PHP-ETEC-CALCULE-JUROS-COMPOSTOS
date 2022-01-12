<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/pesquisarAnual.php'); //incluir arquivo 
$v = new Anual(); //instância da classe 
$v->txtValorInicialAno = $_GET["txtValorInicialAno"]; //Consumindo a clase para atribuir um valor
$v->txtPorcentagemAno = $_GET["txtPorcentagemAno"]; //Consumindo a clase para atribuir um valor
$v->txtdateinicialAno = $_GET["txtdateinicialAno"]; //Consumindo a clase para atribuir um valor
$v->txtdatefinalAno = $_GET["txtdatefinalAno"];  //Consumindo a clase para atribuir um valor
$v->calculo_anual(); //Consumindo a clase e acionando o metodo
?>

