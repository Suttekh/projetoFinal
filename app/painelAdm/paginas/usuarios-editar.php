<?php
$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM usuarios');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inserir Usuários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contatos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php foreach ($DadosUsuario as $dados) { ?>
                        <form action="?pg=usuarios-editar" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome de Usuário</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $dados['nome'] ?>" disabled id="Usuario">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Senha</label>
                                <input type="password" class="form-control" name="senha" id="Senha" autofocus placeholder="Digite sua Senha">
                            </div>
                            <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-lg" value="Atualizar">
                                <a href="cpanel.php?pg=listar" type="submit" class="btn btn-danger btn-lg mx-5"> Retornar </a>
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->