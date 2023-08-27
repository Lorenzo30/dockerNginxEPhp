<?php

namespace Alura\Leilao\Model;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = 0;
    private $menorValor = INF;
    private $maioresLances = 0;

    public function avalia(Leilao $leilao): void
    {   
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) {
                $this->maiorValor = $lance->getValor();
            } 
            if ($lance->getValor() < $this->menorValor ) {
                $this->menorValor = $lance->getValor();
            }
        }

        $lances = $leilao->getLances();
        usort($lances,function (Lance $lance1,Lance $lance2) {

        })
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }
}
