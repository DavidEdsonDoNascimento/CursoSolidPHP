<?php 
namespace Alura\Model;

class Pontuacao
{
	private int pontos;:wq


	public function __construct($conteudo)
	{
		$this->pontos = regrasParaPontuar($conteudo);	
	}


	private function regrasParaPontuar($conteudo)
	{
		return is_a($conteudo, Curso)? 100 : is_a($conteudo, AluraMais)? $conteudo->minutosDeDuracao() * 2 : ;

	}

}

