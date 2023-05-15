<?php

class ClienteDAO {

    public function create (Cliente $cliente) {
        $sql = 'INSERT INTO cliente (nome,passagem, poltrona, CPF) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getPassagem());
        $stmt->bindValue(3, $cliente->getPoltrona());
        $stmt->bindValue(4, $cliente->getCPF());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM cliente';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Cliente $cliente) {
        $sql = 'UPDATE cliente SET nome = ? passagem = ?, poltrona = ?, CPF = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getPassagem());
        $stmt->bindValue(3, $cliente->getPoltrona());
        $stmt->bindValue(4, $cliente->getCPF());
        $stmt->bindValue(5, $cliente->getId());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM cliente WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}