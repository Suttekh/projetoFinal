<?php
//Verifica se está logado

if (!isset($_SESSION['usuario'])) {
    $usuario = 'Reginaldo';
    $senha = '123456';
    $projeto = ' Projeto Final';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['email'] = $senha;
    $_SESSION['projeto'] = $projeto;
    

    //    $_SESSION['usuario'] = $_POST['usuario'];
    //  $_SESSION['email'] = $_POST['email'];


    switch ($_GET['pg']) {
        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;
       
            case 'login':
            include_once "app/painelAdm/index.php";
            break;

        default:
            # code...
            break;
    }
} else {
    include_once "app/painelAdm/paginas/login.php";
};




// $paginas = isset($_GET['pg']);

// if ($paginas) {
// } else {
//     include_once "app/site/paginas/inicial.php";
// }
