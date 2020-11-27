<?php
include_once 'app/painelAdm/helpers/conexao.php';

/*Futuramente virá do banco de dados.
    Verificar se existe um usuário no banco 
    SIM = Adiciona os valores e inicia a Sessão
    NÂO = Usuário e senha não confere
*/

function verificaSeLogado()
{
    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultConexao = new Conexao();
    $resultadoConsulta = $resultConexao->consultarBanco(
        'SELECT * FROM usuarios 
                                                        WHERE nome = :usuario',
        $parametros
    );

    if (count($resultadoConsulta) > 0) {
        $senha_bd = $resultadoConsulta[0]['senha'];

        if (password_verify($senha, $senha_bd)) {
            //add sessão
            $_SESSION['usuario'] = $usuario;
            return true;
        } else {
             echo 'senha não confere';
             return false;
        }

        return true;
    } else {
        //usuario e senha não confere
        echo 'Usuário e senha não confere';
    }
}

function inserirUsuario()
{
    ///pegando as variaveis via post
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    ///validar as variaveis E ENCRIPTAR A SENHA
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome,senha) VALUES (:nome,:senha)', $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}
function atualizarUsuario()
{
    //pegando variaveis via post
    $idUsuario = trim($_POST['id_usuario']);
    $senha = trim($_POST['senha']);

    //validando as variaveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    //att no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);
    include_once "app/painelAdm/paginas/usuarios-listar.php";
}

function visualizarUsuario($id)
{
    if ($id) {
        $parametros = array(
            ':id_usuario' => $_GET['id']
        );

        $resultUsuarioConsulta = new Conexao();

        $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);

        if (count($dados) > 0) {

            return $dados;
        } else {
            Header('Location: ?pg=usuarios-listar');
        }
    }
}


function visualizar()
{
  $idUsuario = $_GET['id'];
  $parametros = array(

':visualizar' => 1,
':id_contato' => $idUsuario

  );

 //att no banco
 $atualizaUsuario = new Conexao();
 $atualizaUsuario->intervencaoNoBanco('UPDATE contato SET visualizar = :visualizar  WHERE id_contato = :id_contato', $parametros);

}