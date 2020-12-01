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
                       <h1>Listar Usuários</h1>
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

                       <div class="card">
                           <div class="card-header">
                               <h3 class="card-title">Escolha uma mensagem para edição</h3> <br>
                               <a href="?pg=usuarios-form" class="btn btn-success btn-lg"><span class="fa fa-user-plus"></span> Novo Usuário</a>

                           </div>
                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                       <tr>
                                           <th>Imagem</th>
                                           <th>Id</th>
                                           <th>Nome</th>
                                           <th>Assunto</th>
                                           <th>Mensagem</th>
                                           <th>Ações</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php foreach ($dados as $DadosUsuarios) { ?>
                                           <tr>
                                               <td style="width: 15px;">
                                                   <img class="img-fluid" src="<?php echo $DadosUsuarios['img_usuario'] ?>" alt="">

                                               </td>
                                               <td><?php echo $DadosUsuarios['id_usuario'] ?></td>
                                               <td><?php echo $DadosUsuarios['nome'] ?></td>
                                               <td><?php echo $DadosUsuarios['datacriacao'] ?></td>
                                               <td> <?php echo $DadosUsuarios['dataatualizacao'] ?> </td>
                                               <td class="text-center">
                                                   <a href="?pg=usuario-visualizar&id=<?php echo $DadosUsuarios['id_usuario'] ?>" class="btn btn-success"><span class="regi-eye"></span></a>
                                                   <a href="?pg=usuarios-editar&id=<?php echo $DadosUsuarios['id_usuario'] ?>" class="btn btn-warning"><span class="regi-pencil2"></span></a>
                                                   <a href="?pg=usuario-apagar&id=<?php echo $DadosUsuarios['id_usuario'] ?>" class="btn btn-danger"><span class="regi-trash"></span></a>
                                               </td>
                                           </tr>
                                       <?php } ?>
                                   </tbody>

                               </table>
                           </div>
                           <!-- /.card-body -->
                       </div>
                   </div>
                   <!-- /.col -->
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