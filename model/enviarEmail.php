<?php 
class Enviaremail
{
    public $assunto;
    public $mensagem;
    public $emails;

    function gafec_enviar_email()
    {
		
	if (filter_var($this->emails, FILTER_VALIDATE_EMAIL)) {

    $assunto = "Juros Compostos Online: ";
	$assunto .= "($this->assunto) - "; 
	$assunto .= "($this->emails)";  

	ini_set( 'display_errors', 1 );
	error_reporting( E_ALL );
	$to = "3ds2on@gmail.com";
	$subject = $assunto;
	$message = $this->mensagem;
	$headers = "From: <gafecinvestor@gmail.com>";
	mail ($to,$subject,$message,$headers);
	echo"<font color='#008000'>Mensagem enviada com sucesso!</font>";
	} else {
	echo"<font color='#FF0000'>Por gentileza, informe um e-mail valido!</font>";
		   }
	}                                                                                                                    
}                                                                                                                     
?>