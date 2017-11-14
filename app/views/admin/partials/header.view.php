<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=$title?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if (null != $_SESSION['user']->IMAGE) {$image = $_SESSION['user']->IMAGE;} else { $image = 'default-avatar.png';}?>
                        <span><img src="/public/admin/assets/img/imagesUser/<?=$image;?>" alt=""></span>
                        Chào <?=$_SESSION['user']->USERNAME?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/user/edit?idUser=<?=$_SESSION['user']->USERNAME?>"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="/logout"><i class="fa fa-sign-out"></i>Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
