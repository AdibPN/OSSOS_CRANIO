<?php

/**
 * Classe para determinar quais rotas...
 */
class MembroController 
{
    /**
     * 
     */
    public static function index() 
    {
        include 'Model/MembroModel.php';

        $model = new MembroModel();
        $model->getAllRows();

        include 'View/modules/Membro/ListaMembro.php';
    }

    /**
     * 
     */
    public static function form()
    {
        include 'Model/MembroModel.php'; // inclusão do arquivo model.
        $model = new MembroModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/

        include 'View/modules/Membro/FormMembro.php'; // Include da View. Note que a variável $model está disponível na View.
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save() {
// inclusão do arquivo model.

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
        include 'Model/MembroModel.php';
        

        $Membro = new MembroModel();
        $Membro->id = $_POST['id'];
        $Membro->nome = $_POST['nome'];
        $Membro->partes = $_POST['partes'];

        $Membro->save();

        header("Location: /Membro"); // redirecionando o usuário para outra rota.
    }


    public static function delete()
    {
        include 'Model/MembroModel.php'; // inclusão do arquivo model.

        $model = new MembroModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /Membro"); // redirecionando o usuário para outra rota.
    }

}