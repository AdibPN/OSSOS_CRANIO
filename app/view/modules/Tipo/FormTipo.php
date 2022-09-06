<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./view/includes/css_config.php" ?>
    <title>Cadastro de Tipos</title>
    <style>
        .container-tipo {
            width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-tipo {
            width: 50%;
        }
    </style>
</head>
<body>
<main class="container-tipo flex">
<h1>Cadastro de Tipos</h1>
    <form action="/Tipo/save" method="post">
    <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        
    </form>    
    </main>  
    <?php include "./view/includes/js_config.php" ?>
</body>
</html>