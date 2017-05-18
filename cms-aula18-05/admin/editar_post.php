<?php include "includes/header.php"; ?>
<?php ob_start(); ?>
    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bem vindo
                            <small>Gustavo</small>
                        </h1>

                        <?php

                        if(isset($_GET['edit'])){

                          $post_id = $_GET['edit'];

                          $query = "SELECT * from posts WHERE post_id = {$post_id}";
                          $select_posts = mysqli_query($connection, $query);
                          while($row = mysqli_fetch_assoc($select_posts)){
                              $post_id = $row['post_id'];
                              $post_autor = $row['post_autor'];
                              $post_nome = $row['post_nome'];
                              $post_status = $row['post_status'];
                              $post_imagem = $row['post_imagem'];
                              $post_data = $row['post_data'];
                              $post_tags = $row['post_tags'];
                              $post_conteudo = $row['post_conteudo'];

                          }
                        }

                          if(isset($_POST['editar'])){
                            $editar_post_nome = $_POST['post_nome'];
                            $editar_post_autor = $_POST['post_autor'];
                            $editar_post_status = $_POST['post_status'];

                            $editar_post_imagem = $_FILES['post_imagem']['name'];
                            $editar_post_imagem_temp = $_FILES['post_imagem']['tmp_name'];

                            $editar_post_data = date('d-m-y');

                            $editar_post_tags = $_POST['post_tags'];
                            $editar_post_conteudo = $_POST['post_conteudo'];

                            move_uploaded_file($editar_post_imagem_temp, "../images/$editar_post_imagem");
                            $query = "UPDATE posts SET post_nome = '$editar_post_nome', post_autor = '$editar_post_autor',
                            post_status = '$editar_post_status', post_imagem = '$editar_post_imagem', post_tags = '$editar_post_tags',
                            post_conteudo = '$editar_post_conteudo'
                            WHERE post_id = {$post_id}";

                            $editar_post = mysqli_query($connection, $query);

                            if(!$editar_post){
                              echo "Deu ruim" . mysqli_error($connection);
                            }

                          }

                         ?>

                            <form action="" method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                 <label for="post_nome">Titulo do Post:</label>
                                 <input type="text" class="form-control" name="post_nome" value="<?php if(isset($post_nome)) {echo $post_nome;}?>">
                               </div>

                               <div class="form-group">
                                 <label for="post_autor">Autor:</label>
                                 <input type="text" class="form-control" name="post_autor" value="<?php if(isset($post_autor)) {echo $post_autor;}?>">
                               </div>

                               <div class="form-group">
                                 <label for="post_status">Status do Post</label>
                                 <input type="text" class="form-control" name="post_status" value="<?php if(isset($post_status)) {echo $post_status;}?>">
                               </div>

                               <div class="form-group">
                                 <label for="post_imagem">Imagem do Post</label>
                                 <input type="file" name="post_imagem" value="<?php if(isset($post_imagem)) {echo $post_imagem;}?>">
                               </div>

                               <div class="form-group">
                                 <label for="post_tags">Tags do Post</label>
                                 <input type="text" class="form-control" name="post_tags" value="<?php if(isset($post_tags)) {echo $post_tags;}?>">
                               </div>

                               <div class="form-group">
                                 <label for="post_conteudo">Conteúdo do Post</label>
                                 <textarea class="form-control" name="post_conteudo" cols="30" rows="10"><?php if(isset($post_conteudo)) {echo $post_conteudo;}?></textarea>
                               </div>

                               <div class="form-group">
                               <input type="submit" class="btn btn-primary" name="editar" value="EDITAR">
                               </div>
                             </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
