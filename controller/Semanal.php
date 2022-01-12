<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/pesquisarSemanal.php'); //incluir arquivo 
$v = new Semanal(); //instância da classe 
$v->txtValorInicialSemanal = $_GET["txtValorInicialSemanal"]; //Consumindo a clase para atribuir um valor
$v->txtPorcentagemSemanal = $_GET["txtPorcentagemSemanal"]; //Consumindo a clase para atribuir um valor
$v->txtdateinicialSemanal = $_GET["txtdateinicialSemanal"]; //Consumindo a clase para atribuir um valor
$v->txtdatefinalSemanal = $_GET["txtdatefinalSemanal"];  //Consumindo a clase para atribuir um valor
$v->calculo_semanal(); //Consumindo a clase e acionando o metodo
?>

