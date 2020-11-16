<?php
include_once "app/painelAdm/helpers/helperAdm.php";

session_start();
//echo $_SESSION['usuario'];

$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

//Verifica se há alguém logado
if (isset($_SESSION['usuario'])) {

    switch ($pg) {

        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;

        case 'sair':

            break;

        default:
            include_once "app/painelAdm/index.php";
            break;
    }
} else {
    // Verifica se foi submetido método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (verificaSeLogado()) {
            include_once "app/painelAdm/index.php";
        }        
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }
}
