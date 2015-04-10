<?php 

class Aluno
{

	private $nome;
	private $dataNasci;
	private $sexo;
	private $nomePai;
	private $nomeMae;
	private $endereco;

	public function __set($campo,$valor)
	{
        $this->$campo = $valor;
  	}

  	public function __get($campo)
  	{
        return $this->$campo;
  	}

}

?>