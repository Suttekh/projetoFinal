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
    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco(
        'SELECT * FROM usuarios 
                                                        WHERE nome = :usuario',
        $parametros
    );

    if (count($resultadoConsulta) > 0) {
        //adiciona sessão
        $_SESSION['usuario'] = $usuario;
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
$resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome,senha) VALUES (:nome,:senha)',$parametros);
include_once "app/painelAdm/paginas/usuarios-listar.php";

}
