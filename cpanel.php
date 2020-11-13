<?php
//Verifica se está logado

// Header
//include_once "app/site/paginas/includes/header.php";

// Menu de navegação 
//include_once "app/site/paginas/includes/navegacao.php";

// Páginas do meu Site 
$paginas = isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {

        case 'cpanel':

            include_once "app/painelAdm/paginas/login.php";
            //include_once "app/site/paginas/inicial.php";
            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}

// Rodapé
//include_once "app/site/paginas/includes/footer.php";
