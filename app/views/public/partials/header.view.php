<header id="header">
    <div class="menu-top">
        <div class="container">
            <div class="row">
                <div class="logo col-md-3 col-xs-3">
                    <div class="wrp-img">
                        <a href="/"><img src="/public/public/assets/img/logo/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="top-right col-md-9 col-xs-9">
                    <div class="toggle-menu item">
                        <a data-toggle="collapse" data-target=".header-navbar" class="btn-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="search col-md-6 col-sm-6 item">
                        <div  class="input-group">
                            <input type="text" class="form-control" id="inputSearch" placeholder="">
                            <div class="input-group-addon"><a id="linkToSearch" onclick="searchShopName()" href="/search"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="user-features col-md-6 col-sm-6 item">
                        <?php if (isset($_SESSION['user'])) {?>
                        <div class="user dropdown item-feature">
                            <img src="public/admin/assets/img/imagesUser/<?=$_SESSION['user']->IMAGE;?>" alt="">
                            <a href="" class="f-user  dropdown-toggle" data-toggle="dropdown">
                                <?=$_SESSION['user']->USERNAME;?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </div>
                        <?php } else {?>
                        <div class="signIn item-feature"><a href="" class="btn-signIn" data-toggle="modal" data-target="#modal-signIn"><i class="fa fa-sign-in"></i>Login</a></div>
                        <div class="signUp item-feature"><a href="" class="btn-signUp" data-toggle="modal" data-target="#modal-signUp"><i class="fa fa-user"></i>Register</a></div>
                        <?php }?>
                    </div>
                    <div class="btn-modal-search item">
                        <a href="" data-toggle="modal" data-target="#modal-search" class="btn-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <?php

$_SERVER['REQUEST_URI'];

$arrLink = ['/contact' => 'contact',
    '/search' => 'search',
];

?>
    <nav class="navbar" role="navigation" data-spy="affix" data-offset-top="57">
        <div class="container">
            <div class="row">
                <div class="collapse navbar-collapse header-navbar">
                    <ul class="nav navbar-nav ">
                        <li><a href="/">home</a></li>
                        <li><a href="#interested">interested</a></li>
                        <li><a href="#news">news</a></li>
                        <li><a href="#aboutUs">about us</a></li>
                        <?php foreach ($arrLink as $key => $value) {
    if ($_SERVER['REQUEST_URI'] == $key) {
        $active = 'active';
    } else {
        $active = '';
    }
    ?>
                            <li class="<?=$active;?>"><a href="<?=$key?>"><?=$value?></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Modal Login-->
    <div id="modal-signIn" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign In</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" action="/login" role="form" name="form" id="form-signIn" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label for="input-uerName">Username</label>
                                    <input type="text" id="input-uername" name="username" class="form-control" autocomplete="off" required />
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 password">
                                <div class="form-group item">
                                    <label for="input-uerName">Password</label>
                                    <input type="password" name="password" id="input-pass" class="form-control" autocomplete="off" data-minlength="6" required data-error="Mật khẩu ít nhất 6 kí tự" />
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" name="login" data-target="#idModal" value="Sign in" required />
                                </div>
                            </div>
                            <div class="col-md-12 forgotPass">
                                <div class="form-group ">
                                    <a data-toggle="modal" data-target="#modal-forgot-pass" data-dismiss="modal" href="">Forgot password?</a>
                                </div>
                            </div>
                            <div class="col-md-12 creatAccount">
                                <div class="form-group ">
                                    <p>
                                        Don't have an account?<a data-toggle="modal" data-target="#modal-signUp" data-dismiss="modal" href="">Creat an account</a>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal forgotPass -->
    <div id="modal-forgot-pass" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Forgot Password</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" action="/forgot" role="form" name="form" id="form-signIn" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label for="input-uerName">Username</label>
                                    <input type="text" id="input-uername" name="username" class="form-control" required />
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" name="send" value="Send" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-signUp" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">sign up</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" enctype="multipart/form-data" method="POST" action="/register">
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label>Username</label>
                                    <input type="text" name="username"  value="Admin" class="form-control input-userName" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 password">
                                <div class="form-group item">
                                    <label>Password</label>
                                    <input type="password" name="password" value="Admin" class="form-control input-pass" id="pass" data-minlength="6" required data-error="Mật khẩu phải ít nhất 6 kí tự">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 confirmPass">
                                <div class="form-group item">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control input-confirmPass" data-match="#pass" data-minlength="6" required data-match-error="Mật khẩu không trùng khớp">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 firstName">
                                <div class="form-group item">
                                    <label>First Name</label>
                                    <input type="text" class="form-control input-firstName" name="first_name" value="Admin" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 lastName">
                                <div class="form-group item">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control input-lastName" name="last_name" value="Admin" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" name="add" class=" btn btn-bg" value="Sign up" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-search" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">search</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" name="form" id="form-search" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12">
                                <div class="form-group item">
                                    <input type="text" class="form-control" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" value="Search" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

