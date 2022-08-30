<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'view/includes/css_config.php'?>
    <title>Lista Ossos</title>
</head>
<body>
    <div class="container">
    <table class="table">
        <tr>

            <th></th>
            <th>Id</th>
            <th>funcao</th>
            <th>Nome</th>

    
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/Osso/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/Osso/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td>
                <a href="/Osso/form?id=<?= $item->id ?>"><?= $item->funcao ?></a>
            </td>


        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    </div>
    
    <?php include 'view/includes/js_config.php'?>
</body>
</html>