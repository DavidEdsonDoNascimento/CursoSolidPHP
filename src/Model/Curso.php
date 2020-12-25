<?php

namespace Alura\Solid\Model;

use Alura\Solid\Interface;

class Curso implements PontuavelInterface
{
    private $nome;
    private $videos;
    private $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(Feedback $feed): void
    {
        $this->feedbacks[] = $feed;
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function recuperarVideos(): array
    {
        return $this->videos;
		}

		public function getPontuacao() : int
		{
			return 100;
		}
}
