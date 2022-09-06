<?php
namespace APP\controller;



use APP\model\MembroModel;


class MembroController 
{
   
    public static function index() 
    {
        

        $model = new MembroModel();
        $model->getAllRows();

        include 'View/modules/Membro/ListaMembro.php';
    }

   
    public static function form()
    {
        
        $model = new MembroModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Membro/FormMembro.php'; 
    }

   
    public static function save() {

      

        $Membro = new MembroModel();
        $Membro->id = $_POST['id'];
        $Membro->nome = $_POST['nome'];
        $Membro->partes = $_POST['partes'];

        $Membro->save();

        header("Location: /Membro"); 
    }


    public static function delete()
    {
       

        $model = new MembroModel();

        $model->delete( (int) $_GET['id'] ); 
        header("Location: /Membro"); 
    }

}