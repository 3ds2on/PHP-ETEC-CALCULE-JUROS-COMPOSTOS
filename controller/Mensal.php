<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/pesquisarMensal.php'); //incluir arquivo 
$v = new Mensal(); //instância da classe 
$v->txtValorInicialMensal = $_GET["txtValorInicialMensal"]; //Consumindo a clase para atribuir um valor
$v->txtPorcentagemMensal = $_GET["txtPorcentagemMensal"]; //Consumindo a clase para atribuir um valor
$v->txtdateinicialMensal = $_GET["txtdateinicialMensal"]; //Consumindo a clase para atribuir um valor
$v->txtdatefinalMensal = $_GET["txtdatefinalMensal"];  //Consumindo a clase para atribuir um valor
$v->calculo_mensal(); //Consumindo a clase e acionando o metodo
?>

