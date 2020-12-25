<?php

namespace Alura\Solid\Model;

use Alura\Solid\Interface;

class AluraMais extends Video implements ṔontuavelInterface
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->categoria));
		}
		public function getPontuacao() : int
		{
			return $this->minutosDeDuracao() * 2; 
		}
}
