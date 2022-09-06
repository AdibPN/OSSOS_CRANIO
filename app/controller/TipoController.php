<?php


class TipoController 
{
   
    public static function index() 
    {
        include 'model/TipoModel.php';

        $model = new TipoModel();
        $model->getAllRows();

        include 'view/modules/Tipo/ListaTipo.php';
    }

    
    public static function form()
    {
        include 'model/TipoModel.php'; 
        $model = new TipoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'view/modules/Tipo/FormTipo.php';
    }

  
    public static function save() {


       
        include 'model/TipoModel.php';
        

        $Tipo = new TipoModel();
        $Tipo->id = $_POST['id'];
        $Tipo->nome = $_POST['nome'];


        $Tipo->save();

        header("Location: /Tipo"); 
    }


    public static function delete()
    {
        include 'model/TipoModel.php'; 

        $model = new TipoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Tipo"); 
    }

}