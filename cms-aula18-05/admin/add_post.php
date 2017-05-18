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
                          if(isset($_POST['adicionar'])){
                            $post_nome = $_POST['post_nome'];
                            $post_autor = $_POST['post_autor'];
                            $post_status = $_POST['post_status'];

                            $post_imagem = $_FILES['post_imagem']['name'];
                            $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];

                            $post_data = date('d-m-y');

                            $post_tags = $_POST['post_tags'];
                            $post_conteudo = $_POST['post_conteudo'];

                            move_uploaded_file($post_imagem_temp, "../images/$post_imagem");

                            $query = "INSERT INTO posts(post_nome, post_autor, post_status, post_imagem, post_data, post_tags, post_conteudo) ";
                            $query .= "VALUES ('$post_nome', '$post_autor', '$post_status', '$post_imagem', now(), '$post_tags', '$post_conteudo')";

                            $add_post = mysqli_query($connection, $query);

                            if(!$add_post){
                              echo "Deu ruim";
                            }

                          }

                          if(isset($_POST['editar'])){
                            $editar_post_nome = $_POST['editar_post_nome'];
                            $editar_post_autor = $_POST['editar_post_autor'];
                            $editar_post_status = $_POST['editar_post_status'];

                            $editar_post_imagem = $_FILES['editar_post_imagem']['editar_name'];
                            $editar_post_imagem_temp = $_FILES['editar_post_imagem']['editar_tmp_name'];

                            $editar_post_data = date('d-m-y');

                            $editar_post_tags = $_POST['editar_post_tags'];
                            $editar_post_conteudo = $_POST['editar_post_conteudo'];

                            move_uploaded_file($editar_post_imagem_temp, "../images/$editar_post_imagem");

                            $query = "UPDATE posts SET (post_nome = '$editar_post_nome',
                            WHERE post_id = {$post_id}";

                            $editar_post = mysqli_query($connection, $query);

                            if(!$editar_post){
                              echo "Deu ruim";
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
                            <input type="text" class="form-control" name="post_status" <?php if(isset($post_status)) {echo $post_status;}?>>
                          </div>

                          <div class="form-group">
                            <label for="post_imagem">Imagem do Post</label>
                            <input type="file" name="post_imagem" <?php if(isset($post_imagem)) {echo $post_imagem;}?>>
                          </div>

                          <div class="form-group">
                            <label for="post_tags">Tags do Post</label>
                            <input type="text" class="form-control" name="post_tags" <?php if(isset($post_tags)) {echo $post_tags;}?>>
                          </div>

                          <div class="form-group">
                            <label for="post_conteudo">Conteúdo do Post</label>
                            <textarea class="form-control" name="post_conteudo" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                          <input type="submit" class="btn btn-primary"
                          name="adicionar" value="Adicionar">
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
