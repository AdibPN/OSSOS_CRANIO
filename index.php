<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo $uri_parse;
//echo "<hr />";

include 'Controller/MembroController.php';
/** 
include 'Controller/ProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/CategoriaProdutoController.php';
**/

switch($uri_parse)
{
    case '/Membro':
        MembroController::index();
    break;

    case '/Membro/form':
        MembroController::form();
    break;

    case '/Membro/save':
        MembroController::save();
    break;

    case '/Membro/delete':
        MembroController::delete();
    break;

    # criando rotas produto
/**
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;
    

    # criando rotas par funcionario 
    case '/funcionario':
        funcionarioController::index();
    break;

    case '/funcionario/form':
        funcionarioController::form();
    break;

    case '/funcionario/save':
        funcionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    # criando rotas par CategoriaProduto
    case '/categoriaProduto':
        CategoriaProdutoController::index();
    break;

    case '/CategoriaProduto/form':
        CategoriaProdutoController::form();
    break;

    case '/CategoriaProduto/save':
        CategoriaProdutoController::save();
    break;

    case '/CategoriaProduto/delete':
        CategoriaProdutoController::delete();
    break;
*/

    default:
        echo "deu ruim";
    break;
}


