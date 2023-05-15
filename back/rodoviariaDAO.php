<?php

class rodoviariaDAO {

    public function create (Rodoviaria $rodoviaria) {
        $sql = 'INSERT INTO rodoviaria (companhia, portao, lotacao, classe) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $rodoviaria->getCompanhia());
        $stmt->bindValue(2, $rodoviaria->getPortao());
        $stmt->bindValue(3, $rodoviaria->getLotacao());
        $stmt->bindValue(4, $rodoviaria->getClasse());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM rodoviaria';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Rodoviaria $rodoviaria) {
        $sql = 'UPDATE rodoviaria SET companhia = ?, portao = ?, lotacao = ?, classe = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $rodoviaria->getCompanhia());
        $stmt->bindValue(2, $rodoviaria->getPortao());
        $stmt->bindValue(3, $rodoviaria->getLotacao());
        $stmt->bindValue(4, $rodoviaria->getClasse());
        $stmt->bindValue(5, $rodoviaria->getId());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM rodoviaria WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}