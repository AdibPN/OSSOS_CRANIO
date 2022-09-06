<?php

class OssoDao {

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=album_anatomico";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(OssoModel $model)
    {
        $sql = "INSERT INTO Osso
                (funcao, nome)
                VALUES
                (?, ?) ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->funcao);
        $stmt->bindValue(2, $model->nome);
        $stmt->execute();

    }

    public function update(OssoModel $model){
        $sql = "UPDATE Osso SET funcao=?, nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->funcao);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Osso ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


  
    public function selectById(int $id)
    {
        include_once 'model/OssoModel.php';

        $sql = "SELECT * FROM Osso WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("OssoModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM Osso WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


}