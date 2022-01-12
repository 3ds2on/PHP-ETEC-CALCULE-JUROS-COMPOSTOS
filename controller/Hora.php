<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/pesquisarHora.php'); //incluir arquivo 
$v = new Hora(); //instância da classe 
$v->txtValorInicialHora = $_GET["txtValorInicialHora"]; //Consumindo a clase para atribuir um valor
$v->txtPorcentagemHora = $_GET["txtPorcentagemHora"]; //Consumindo a clase para atribuir um valor
$v->txtdateinicialDataHora = $_GET["txtdateinicialDataHora"]; //Consumindo a clase para atribuir um valor
$v->txtdatefinalDataHora = $_GET["txtdatefinalDataHora"];  //Consumindo a clase para atribuir um valor
$v->txtdateinicialHora = $_GET["txtdateinicialHora"];  //Consumindo a clase para atribuir um valor
$v->txtdatefinalHora = $_GET["txtdatefinalHora"];  //Consumindo a clase para atribuir um valor
$v->calculo_Hora(); //Consumindo a clase e acionando o metodo
?>
