<?php 
error_reporting(0); //// Bloqueia alartas e errros ao abrir a pagina
	
//Atrinuindo ao PHP a data e hora da região de Sao Paulo, com apresentação de caracteres especiais
date_default_timezone_set("America/Sao_Paulo");
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
				
class Semanal
{
    public $txtValorInicialSemanal;
    public $txtPorcentagemSemanal;
	public $txtdateinicialSemanal;
	public $txtdatefinalSemanal;
	
    function calculo_semanal()
    {
		
		if ($this->txtValorInicialSemanal >= 0.001 && $this->txtPorcentagemSemanal >= 0.001 && $this->txtdateinicialSemanal >= 0.001 && $this->txtdatefinalSemanal >= 0.001)
		{
				
		$diferenca = strtotime($this->txtdatefinalSemanal) - strtotime($this->txtdateinicialSemanal);
		$dias = floor($diferenca / (60 * 60 * 24));
		$dias = $dias+1;
		$semanas = $dias/7;
		$semanas = number_format((float)$semanas,0,',','.');
		$valorTotalSemana = $this->txtValorInicialSemanal;
		for($contador = 1; $contador <= $semanas; $contador++){
			$valorTotalSemana = $valorTotalSemana + (($this->txtPorcentagemSemanal/100)*$valorTotalSemana);
		}
		$valorTotalSemana = number_format((float)$valorTotalSemana,3,',','.');
	
		//crie uma variável para receber o código da tabela
		$tabela = '<table border="1">';//abre table
		$tabela .='<thead>';//abre cabeçalho
		$tabela .= '<tr>';//abre uma linha
		$tabela .= '<th><center>RESULTADO</center></th>'; // colunas do cabeçalho
		$tabela .= '</tr>';//fecha linha
		$tabela .='</thead>'; //fecha cabeçalho
		$tabela .='<tbody>';//abre corpo da tabela
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>os juros compostos de $this->txtPorcentagemSemanal % por semana</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>no periodo, $this->txtdateinicialSemanal há $this->txtdatefinalSemanal <p> ($semanas semana(s))</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>sobre o valor inicial de R$ $this->txtValorInicialSemanal</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>obteve o total acumulado de <font color='#FF0000'>R$ $valorTotalSemana</font></center></td>"; // coluna resultado
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