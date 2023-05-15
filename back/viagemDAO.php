<?php

class ViagemDAO {

    public function create (Viagem $viagem) {
        $sql = 'INSERT INTO viagem (ponto_partida, ponto_chegada, tempo_viagem, data_saida, data_retorno) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $viagem->getPontoPartida());
        $stmt->bindValue(2, $viagem->getPontoChegada());
        $stmt->bindValue(3, $viagem->getTempoViagem());
        $stmt->bindValue(4, $viagem->getDataSaida());
        $stmt->bindValue(5, $viagem->getDataRetorno());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM viagem';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Viagem $viagem) {
        $sql = 'UPDATE viagem SET ponto_partida = ?, ponto_chegada = ?, tempo_viagem = ?, data_saida = ?, data_retorno = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $viagem->getPontoPartida());
        $stmt->bindValue(2, $viagem->getPontoChegada());
        $stmt->bindValue(3, $viagem->getTempoViagem());
        $stmt->bindValue(4, $viagem->getDataSaida());
        $stmt->bindValue(5, $viagem->getDataRetorno());
        $stmt->bindValue(6, $viagem->getId());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM viagem WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}