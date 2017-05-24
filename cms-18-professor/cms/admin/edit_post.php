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
                              $the_post_id = $_GET['edit'];
                            }
                          $query = "SELECT * from posts WHERE post_id = $the_post_id";
                          $select_posts_id = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_assoc($select_posts_id)){
                            $post_id = $row['post_id'];
                            $post_nome = $row['post_nome'];
                          }

                          ?>


                        <form action="" method="post" enctype="multipart/form-data">

                          <div class="form-group">
                            <label for="post_nome">Titulo do Post:</label>
                            <input type="text" class="form-control" name="post_nome" value="<?php echo  $post_nome; ?>">
                          </div>

                          <div class="form-group">
                            <label for="post_autor">Autor:</label>
                            <input type="text" class="form-control" name="post_autor">
                          </div>

                          <div class="form-group">
                            <label for="post_status">Status do Post</label>
                            <input type="text" class="form-control" name="post_status">
                          </div>

                          <div class="form-group">
                            <label for="post_imagem">Imagem do Post</label>
                            <input type="file" name="post_imagem">
                          </div>

                          <div class="form-group">
                            <label for="post_tags">Tags do Post</label>
                            <input type="text" class="form-control" name="post_tags">
                          </div>

                          <div class="form-group">
                            <label for="post_conteudo">Conteúdo do Post</label>
                            <textarea class="form-control" name="post_conteudo" cols="30" rows="10"></textarea>
                          </div>

                          <div class="form-group">
                          <input type="submit" class="btn btn-primary"
                          name="update" value="ATUALIZAR">
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
