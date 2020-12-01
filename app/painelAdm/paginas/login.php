<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel Administrativo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/painelAdm/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/painelAdm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/painelAdm/dist/css/adminlte.min.css">
  <!-- CSS do login -->
  <link rel="stylesheet" href="app/painelAdm/dist/css/login.css">
</head>

<body id="logi" class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div id="logbody">
      <div class="card-header text-center">
        <a style="color: whitesmoke;" href="" class="h1"><b>Tela de Login</b></a>
      </div>
      <div class="card-body">
        <p style="color: whitesmoke;" class="login-box-msg">Conecte-se para iniciar a Sessão
        </p>
        <?php if (isset($erro)) { ?>

          <div class="alert alert-danger" id="erro"> <?php echo $erro; ?> </div>
        <?php } ?>
        

        <form action="cpanel.php?pg=cpanel" method="post">
          <div class="input-group mb-3">
            <input type="user" name="usuario" class="form-control" placeholder="Usuário">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="social-auth-links text-center mt-2 mb-3">
            <button id="ent" type="submit" class="btn btn-block btn-primary"> <strong> <b> Entrar </b></strong> </button>
            <a id="voltar" href="index.php?pg=inicial" type="submit" class="btn btn-block btn-primary"> <strong> <b> Voltar ao Início </b></strong> </a>

          </div>

        </form>


        <!-- /.social-auth-links -->


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="app/painelAdm/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="app/painelAdm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="app/painelAdm/dist/js/adminlte.min.js"></script>

  <script src="app/assets/js/funcoes.js"></script>
</body>

</html>