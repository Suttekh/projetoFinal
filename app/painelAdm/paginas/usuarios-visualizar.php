<?php

$id = isset($_GET['id']);

if ($id) {

    $id = $_GET['id'];

    $parametros = array(

        ':id_usuario' => $id

    );
    $resultUsuario = new Conexao();

    $dados = $resultUsuario->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);


} else {
    Header("Location: ?pg=listar");
}


?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php foreach ($dados as $dadosUsuarios) { ?>

                    <div class="jumbotron">
                        <h5 class="display-3 text-center"> Nome usuário</h5>
                        <div class="display-4">
                            <?php echo $dadosUsuarios['nome'] ?>
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