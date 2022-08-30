<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tipos</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/Tipo/save" method="post">
        <fieldset>
            <legend>Cadastro de Tipos</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>"/>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>