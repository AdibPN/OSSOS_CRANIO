<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./view/includes/css_config.php" ?>
    <title>Cadastro de Ossos</title>
    <style>
        .container-osso {
            width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-osso {
            width: 50%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Albúm Osso</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/Membro/form">Membro Formulario</a>
            <a class="nav-link active" aria-current="page" href="/Tipo/form">Tipo Osso</a>
          </div>
        </div>
      </div>
      </nav>
    </nav>
    <main class="container-osso flex">
        <h1>Formulário Osso</h1>
        <form action="/Osso/save" method="post" class="form-osso">
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Função:</label>
                <input name="funcao" id="funcao" type="text" value="<?= $model->funcao ?>" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>  
    </main>  
    <?php include "./view/includes/js_config.php" ?>
</body>
</html>