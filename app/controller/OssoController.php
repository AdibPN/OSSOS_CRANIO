<?php

/**
 * Crianco a classe e as funçoes
 */
class OssoController 
{
    /**
     * 
     */

    public static function index() 
    {
        include 'model/OssoModel.php';

        $model = new OssoModel();
        $model->getAllRows();

        include 'view/modules/Osso/ListaOsso.php';
    }

    public static function form() 
    {
        include 'model/OssoModel.php';
        $model = new OssoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        

        include 'view/modules/Osso/FormOsso.php'; 
    }

    public static function save() 
    {
        include 'model/OssoModel.php';

        $Osso = new OssoModel();
        $Osso->id = $_POST['id'];
        $Osso->funcao = $_POST['funcao'];
        $Osso->nome = $_POST['nome'];
    

        $Osso->save();

        header("location: /Osso"); //redirecionando o usuario para outra rota
    }

    public static function delete()
    {
        include 'model/OssoModel.php';

        $model = new OssoModel();

        $model->delete( (int) $_GET['id'] ); //enviando a variável $_GET como inteiro para o método delete

        header("Location: /Osso");
    
    }
}