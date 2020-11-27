<?php

$id = isset($_GET['id']);

if ($id) {

    $id = $_GET['id'];

    $parametros = array(

        ':id_contato' => $id

    );
    $resultUsuario = new Conexao();

    $dados = $resultUsuario->consultarBanco('SELECT * FROM contato WHERE id_contato = :id_contato', $parametros);
} else {
    Header("Location: cpanel.php?pg=contato");
}

visualizar()
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12">
                <?php foreach ($dados as $DadosUsuarios) { ?>

                    <div class="jumbotron">
                        <h5 id="visu" class="display-3 text-center"><b> <i> Dados do Usuário: </b> </i></h5>
                        <div class="lead">
                            <h5>Nome</h5>
                            <?php echo $DadosUsuarios['nome'] ?>
                            <h5> E-mail </h5>
                            <?php echo $DadosUsuarios['email'] ?>
                            <h5>Cat</h5>
                            <?php echo $DadosUsuarios['cat'] ?>
                            <h5>Data do cão</h5>
                            <?php echo $DadosUsuarios['dataCriacao'] ?>
                            <h5>Atualiza o cão</h5>
                            <?php echo $DadosUsuarios['dataAtualizacao'] ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.container-fluid -->
</section>
<!-- /.content -->



</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->