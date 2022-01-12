<?php
//RECEBENDO DADOS PARA CADASTRO DO HTML
include('../model/enviarEmail.php'); //incluir arquivo 
$v = new Enviaremail(); //instância da classe 
$v->assunto = $_GET["txtnome"]; //Consumindo a clase para atribuir um valor
$v->emails = $_GET["txtemails"]; //Consumindo a clase para atribuir um valor
$v->mensagem = $_GET["txtmensagem"]; //Consumindo a clase para atribuir um valor
$v->gafec_enviar_email(); //Consumindo a clase e acionando o metodo
?>
