<?php 

class Responsavel
{

	private $nome;
	private $dataNasc;
	private $sexo;
	private $cpf;
	private $rg;
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