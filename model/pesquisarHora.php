<?php 
error_reporting(0); //// Bloqueia alartas e errros ao abrir a pagina
	
//Atrinuindo ao PHP a data e hora da região de Sao Paulo, com apresentação de caracteres especiais
date_default_timezone_set("America/Sao_Paulo");
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
				
class Hora
{
    public $txtValorInicialHora;
    public $txtPorcentagemHora;
	public $txtdateinicialDataHora;
	public $txtdatefinalDataHora;
	public $txtdateinicialHora;
	public $txtdatefinalHora;
	
    function calculo_Hora()
    {
		
		if ($this->txtValorInicialHora >= 0.001 && $this->txtPorcentagemHora >= 0.001 && $this->txtdateinicialDataHora >= 0.001 && $this->txtdatefinalDataHora >= 0.001)
		{

		// Obtendo apenas o horario para calculo
		$horaInicio = substr($this->txtdateinicialHora, 0, -3);
		$horaFim = substr($this->txtdatefinalHora, 0, -3);

		// Obtendo apenas os minutos para calculo
		$MinutoInicio = substr($this->txtdateinicialHora, 3);
		$MinutoFim = substr($this->txtdatefinalHora, 3);
		$minutoF = $MinutoInicio + $MinutoFim;
		
		//Converte os dias em minutos
		$dateStart = new \DateTime($this->txtdateinicialDataHora);
		$dateNow = new \DateTime($this->txtdatefinalDataHora);
		$dateDiff = $dateStart->diff($dateNow);
		$minutos = $dateDiff->i + (($dateDiff->h + ($dateDiff->days * 24)) * 60);
		
		//Converte os minutos em horas
		$horas = $minutos/60;
		
		//Subtrai a hora de retiradas
		$horasN = $horas - $horaInicio;
		
		//Soma a hora de devolução
		$horasF = $horasN + $horaFim;
			
		//Considera uma hora a mais se os minutos forem superior ou igual a 59	
		if ($minutoF >= 59)	
		{
		$horasF = $horasF + 1;	
		}
		
		//Calculando e apresentando resultados
		$valorTotalHora = $this->txtValorInicialHora;
		for($contador = 1; $contador <= $horasF; $contador++){
			$valorTotalHora = $valorTotalHora + (($this->txtPorcentagemHora/100)*$valorTotalHora);
		}
		$valorTotalHora = number_format((float)$valorTotalHora,3,',','.');
				
		//crie uma variável para receber o código da tabela
		$tabela = '<table border="1">';//abre table
		$tabela .='<thead>';//abre cabeçalho
		$tabela .= '<tr>';//abre uma linha
		$tabela .= '<th><center>RESULTADO</center></th>'; // colunas do cabeçalho
		$tabela .= '</tr>';//fecha linha
		$tabela .='</thead>'; //fecha cabeçalho
		$tabela .='<tbody>';//abre corpo da tabela
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>os juros compostos de $this->txtPorcentagemHora % por hora</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>no periodo, $this->txtdateinicialDataHora $this->txtdateinicialHora</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>há $this->txtdatefinalDataHora $this->txtdatefinalHora <p> ($horasF hora(s))</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>sobre o valor inicial de R$ $this->txtValorInicialHora</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>obteve o total acumulado de <font color='#FF0000'>R$ $valorTotalHora</font></center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center><font color='#0000FF'> obrigado por utilizar nossos serviços! </font></center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .='</tbody>'; //fecha corpo
		$tabela .= '</table>';//fecha tabela
		
		echo $tabela; // imprime
		
		}
		else
		{
	    echo"<font color='#FF0000'>Por gentileza, informe todos os campos!</font>";
		}
	}
}
?>