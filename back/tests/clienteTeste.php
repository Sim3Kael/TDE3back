<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\cliente;

require_once 'app/cliente.php';

class ClienteTeste extends TestCase {  

    public function testValidar() {
        $id = 'id';
        $nome='Kawanny';
        $passagem='20';
        $poltrona='10';
        $CPF='12312312312';


        $cliente = new  Cliente($id,$nome,$passagem,$poltrona,$CPF);

        $this->assertInstanceOf(Cliente::class, $cliente);
        $this->assertEquals($id, $cliente->getId());
        $this->assertEquals($nome, $cliente->getNome());
        $this->assertEquals($passagem, $cliente->getPassagem());
        $this->assertEquals($poltrona, $cliente->getPoltrona());
        $this->assertEquals($CPF, $cliente->getCliente());
    }

}