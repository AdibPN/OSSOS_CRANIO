<?php

class MembroDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=album_anatomico";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }

    public function insert(MembroModel $model)
    {
        $sql = "INSERT INTO Membro (nome, partes) VALUES (?, ?) ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->partes);

        $stmt->execute();
    }

    public function update(MembroModel $model)
    {
        $sql = "UPDATE MembroModel SET nome=?, partes=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->partes);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT id, nome, partes FROM Membro ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        include_once 'model/MembroModel.php';

        $sql = "SELECT id, nome, partes FROM Membro WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Membro");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Membro WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}