<?php 
error_reporting(0); //// Bloqueia alartas e errros ao abrir a pagina
	
//Atrinuindo ao PHP a data e hora da região de Sao Paulo, com apresentação de caracteres especiais
date_default_timezone_set("America/Sao_Paulo");
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
				
class Mensal
{
    public $txtValorInicialMensal;
    public $txtPorcentagemMensal;
	public $txtdateinicialMensal;
	public $txtdatefinalMensal;
	
    function calculo_mensal()
    {
		
		if ($this->txtValorInicialMensal >= 0.001 && $this->txtPorcentagemMensal >= 0.001 && $this->txtdateinicialMensal >= 0.001 && $this->txtdatefinalMensal >= 0.001)
		{
			
		$diferenca = strtotime($this->txtdatefinalMensal) - strtotime($this->txtdateinicialMensal);
		$dias = floor($diferenca / (60 * 60 * 24));
		$dias = $dias+1;
		
		$mes1 = substr($this->txtdatefinalMensal, 5, -3);
		$mes2 = substr($this->txtdateinicialMensal, 5, -3);

		if($mes1 == 02 && $mes2 == 02)
		{
			
		$diasmesses	= 28; 	
		
		$messes = $dias/$diasmesses;
		$messes = number_format((float)$messes,0,',','.');
		
		$valorTotalMensal = $this->txtValorInicialMensal;
		for($contador = 1; $contador <= $messes; $contador++){
			$valorTotalMensal = $valorTotalMensal + (($this->txtPorcentagemMensal/100)*$valorTotalMensal);
		}
		$valorTotalMensal = number_format((float)$valorTotalMensal,3,',','.');

		//crie uma variável para receber o código da tabela
		$tabela = '<table border="1">';//abre table
		$tabela .='<thead>';//abre cabeçalho
		$tabela .= '<tr>';//abre uma linha
		$tabela .= '<th><center>RESULTADO</center></th>'; // colunas do cabeçalho
		$tabela .= '</tr>';//fecha linha
		$tabela .='</thead>'; //fecha cabeçalho
		$tabela .='<tbody>';//abre corpo da tabela
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>os juros compostos de $this->txtPorcentagemMensal % ao mês</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>no periodo, $this->txtdateinicialMensal há $this->txtdatefinalMensal <p> ($messes mês(es))</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>sobre o valor inicial de R$ $this->txtValorInicialMensal</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>obteve o total acumulado de <font color='#FF0000'>R$ $valorTotalMensal</font></center></td>"; // coluna resultado
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
			
		$diasmesses	= 30; 	
		
		$messes = $dias/$diasmesses;
		$messes = number_format((float)$messes,2,',','.');
		
		$valorTotalMensal = $this->txtValorInicialMensal;
		for($contador = 1; $contador <= $messes; $contador++){
			$valorTotalMensal = $valorTotalMensal + (($this->txtPorcentagemMensal/100)*$valorTotalMensal);
		}
		$valorTotalMensal = number_format((float)$valorTotalMensal,3,',','.');

		//crie uma variável para receber o código da tabela
		$tabela = '<table border="1">';//abre table
		$tabela .='<thead>';//abre cabeçalho
		$tabela .= '<tr>';//abre uma linha
		$tabela .= '<th><center>RESULTADO</center></th>'; // colunas do cabeçalho
		$tabela .= '</tr>';//fecha linha
		$tabela .='</thead>'; //fecha cabeçalho
		$tabela .='<tbody>';//abre corpo da tabela
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>os juros compostos de $this->txtPorcentagemMensal % por semana</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>no periodo, $this->txtdateinicialMensal há $this->txtdatefinalMensal <p> ($messes mês(es))</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>sobre o valor inicial de R$ $this->txtValorInicialMensal</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>obteve o total acumulado de <font color='#FF0000'>R$ $valorTotalMensal</font></center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center><font color='#0000FF'> obrigado por utilizar nossos serviços! </font></center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .='</tbody>'; //fecha corpo
		$tabela .= '</table>';//fecha tabela
		
		echo $tabela; // imprime
		
		}
		}
		else
		{
	    echo"<font color='#FF0000'>Por gentileza, informe todos os campos!</font>";
		}
	}
}
?>