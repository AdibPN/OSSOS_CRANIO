<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'controller/MembroController.php';
include 'controller/OssoController.php';
include 'controller/TipoController.php';



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

    case '/Osso':
        OssoController::index();
    break;

    case '/Osso/form':
        OssoController::form();
    break;

    case '/Osso/save':
        OssoController::save();
    break;

    case '/Osso/delete':
        OssoController::delete();
    break;
    

    # criando rotas par funcionario 
    case '/Tipo':
        TipoController::index();
    break;

    case '/Tipo/form':
        TipoController::form();
    break;

    case '/Tipo/save':
        TipoController::save();
    break;

    case '/Tipo/delete':
        TipoController::delete();
    break;

    
    default:
        echo "deu ruim";
    break;
}