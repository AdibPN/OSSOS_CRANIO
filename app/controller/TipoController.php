<?php

/**
 * Classe para determinar quais rotas...
 */
class TipoController 
{
    /**
     * 
     */
    public static function index() 
    {
        include 'model/TipoModel.php';

        $model = new TipoModel();
        $model->getAllRows();

        include 'view/modules/Tipo/ListaTipo.php';
    }

    /**
     * 
     */
    public static function form()
    {
        include 'model/TipoModel.php'; // inclusão do arquivo model.
        $model = new TipoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/

        include 'view/modules/Tipo/FormTipo.php'; // Include da View. Note que a variável $model está disponível na View.
    }

    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save() {
// inclusão do arquivo model.

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
        include 'model/TipoModel.php';
        

        $Tipo = new TipoModel();
        $Tipo->id = $_POST['id'];
        $Tipo->nome = $_POST['nome'];


        $Tipo->save();

        header("Location: /Tipo"); // redirecionando o usuário para outra rota.
    }


    public static function delete()
    {
        include 'model/TipoModel.php'; // inclusão do arquivo model.

        $model = new TipoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /Tipos"); // redirecionando o usuário para outra rota.
    }

}