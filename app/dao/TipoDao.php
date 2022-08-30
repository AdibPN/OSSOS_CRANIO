<?php

class TipoDao {

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=album_anatomico";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO Tipo 
                (nome)
                VALUES
                (?) ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->execute();

    }

    public function update(TipoModel $model)
    {
        $sql = "UPDATE Tipo SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Tipo ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        // Retorna um array com as linhas retornadas da consulta. Observe que
        // o array é um array de objetos. Os objetos são do tipo stdClass e 
        // foram criados automaticamente pelo método fetchAll do PDO.
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    /**
     * Retorna um registro específico da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function selectById(int $id)
    {
        include_once 'model/TipoModel.php';

        $sql = "SELECT * FROM Tipo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("TipoModel"); // Retornando um objeto específico PessoaModel
    }


    /**
     * Remove um registro da tabela pessoa do banco de dados.
     * Note que o método exige um parâmetro $id do tipo inteiro.
     */
    public function delete(int $id)
    {
        $sql = "DELETE FROM Tipo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}