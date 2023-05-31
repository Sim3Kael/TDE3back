<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\Viagem;

require_once 'app/Viagem.php';

class ViagemTeste extends TestCase {

    public function testValidar() {
        $id = 'id';
        $ponto_partida = 'Crato';
        $ponto_chegada = 'Fortaleza';
        $data_saida = '31-05-2023';
        $data_retorno = '05-06-2023';

        $viagem = new Viagem($id,$ponto_partida,$ponto_chegada,$data_saida,$data_retorno);

        $this->assertInstanceOf(Viagem::class, $viagem);
        $this->assertEquals($id, $viagem->getId());
        $this->assertEquals($ponto_partida, $viagem->getPontoPartida());
        $this->assertEquals($ponto_chegada, $viagem->getPontoChegada());
        $this->assertEquals($data_saida, $viagem->getDataSaida());
        $this->assertEquals($data_retorno, $viagem->getDataRetorno());
    }

}
