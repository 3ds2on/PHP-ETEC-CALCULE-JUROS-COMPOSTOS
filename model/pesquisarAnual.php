<?php 
error_reporting(0); //// Bloqueia alartas e errros ao abrir a pagina
	
//Atrinuindo ao PHP a data e hora da região de Sao Paulo, com apresentação de caracteres especiais
date_default_timezone_set("America/Sao_Paulo");
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
				
class Anual
{
    public $txtValorInicialAno;
    public $txtPorcentagemAno;
	public $txtdateinicialAno;
	public $txtdatefinalAno;
	
    function calculo_anual()
    {
		
		if ($this->txtValorInicialAno >= 0.001 && $this->txtPorcentagemAno >= 0.001 && $this->txtdateinicialAno >= 0.001 && $this->txtdatefinalAno >= 0.001)
		{
				
		$diferenca = strtotime($this->txtdatefinalAno) - strtotime($this->txtdateinicialAno);
		$dias = floor($diferenca / (60 * 60 * 24));
		$dias = $dias+1;
		
		$anos = $dias/365;
		$anos = number_format((float)$anos,0,',','.');
		
		$valorTotalAno = $this->txtValorInicialAno;
		for($contador = 1; $contador <= $anos; $contador++){
			$valorTotalAno = $valorTotalAno + (($this->txtPorcentagemAno/100)*$valorTotalAno);
		}
		$valorTotalAno = number_format((float)$valorTotalAno,3,',','.');
	
		//crie uma variável para receber o código da tabela
		$tabela = '<table border="1">';//abre table
		$tabela .='<thead>';//abre cabeçalho
		$tabela .= '<tr>';//abre uma linha
		$tabela .= '<th><center>RESULTADO</center></th>'; // colunas do cabeçalho
		$tabela .= '</tr>';//fecha linha
		$tabela .='</thead>'; //fecha cabeçalho
		$tabela .='<tbody>';//abre corpo da tabela
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>os juros compostos de $this->txtPorcentagemAno % ao ano</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>no periodo, $this->txtdateinicialAno há $this->txtdatefinalAno <p> ($anos ano(s))</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>sobre o valor inicial de R$ $this->txtValorInicialAno</center></td>"; // coluna resultado
		$tabela .= '</tr>'; // fecha linha
		$tabela .= '<tr>'; // abre uma linha
		$tabela .= "<td><center>obteve o total acumulado de <font color='#FF0000'>R$ $valorTotalAno</font></center></td>"; // coluna resultado
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