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
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

        case 'produtos':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/produtos.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

        case 'contato':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/contato.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

        case 'listar':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/usuarios-listar.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

        case 'usuarios-novo':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            ///inserir usuario
            inserirUsuario();
            include_once "app/painelAdm/paginas/usuarios-novo.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

            case 'usuario-visualizar':
                include_once "app/painelAdm/paginas/includes/header.php";
                include_once "app/painelAdm/paginas/includes/navegacao.php";
                include_once "app/painelAdm/paginas/usuarios-visualizar.php";
                include_once "app/painelAdm/paginas/includes/rodape.php";
                break;

            case 'usuarios-editar':
                include_once "app/painelAdm/paginas/includes/header.php";
                include_once "app/painelAdm/paginas/includes/navegacao.php";
                if ($_REQUEST['REQUEST_METHOD'] == 'POST'){
                    //func de atyalização de usuário
                atualizarUsuario();
                } else {
echo'mostrar usuario pelo id';

                }



                include_once "app/painelAdm/paginas/usuarios-editar.php";
                include_once "app/painelAdm/paginas/includes/rodape.php";
                break;

        case 'usuario-apagar':
            $parametros = array(
                ':id_usuario' => $_GET['id']
            );
            $apagarUsuario = new Conexao();
            $apagarUsuario->intervencaoNoBanco('DELETE FROM usuarios WHERE id_usuario = id_usuario', $parametros);
            Header('Location: ?pg=listar');
            break;

        case 'usuarios-form':
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/usuarios-form.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;

        case 'sair':
            session_destroy();
            Header('Location: ' . $_SERVER['PHP_SELF']);
            break;

        default:
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
            break;
    }
} else {
    // Verifica se foi submetido método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (verificaSeLogado()) {
            //Construir a página
            include_once "app/painelAdm/paginas/includes/header.php";
            include_once "app/painelAdm/paginas/includes/navegacao.php";
            include_once "app/painelAdm/paginas/inicial.php";
            include_once "app/painelAdm/paginas/includes/rodape.php";
        }
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }
}
