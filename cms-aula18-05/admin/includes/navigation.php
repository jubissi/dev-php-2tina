<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">CMS</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

      <li><a href="../index.php">HOME</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Gustavo <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown">
                  <i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down">
                  </i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="add_post.php">Adicionar novo post</a>
                    </li>
                    <li>
                        <a href="post.php">Ver todos os posts</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Usuários <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="#">Adicionar novo usuário</a>
                    </li>
                    <li>
                        <a href="#">Ver todos usuários</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Comentários</a>
            </li>
            <li>
                <a href="categorias.php"><i class="fa fa-fw fa-wrench"></i> Categorias</a>
            </li>


            <li>
                <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Perfil</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
