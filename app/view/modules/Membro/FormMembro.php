<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./view/includes/css_config.php" ?>
    <title>Membros</title>
    <style>
        .container-membro {
            width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-membro {
            width: 50%;
        }
    </style>
</head>
<body>
    <main class="container-membro flex">
        <h1>Formulário Membro</h1>
        <form action="/Membro/save" method="post" class="form-membro">
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Partes</label>
                <input name="partes" value="<?= $model->partes ?>" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>  
    </main>  
    <?php include "./view/includes/js_config.php" ?>    
</body>
</html>