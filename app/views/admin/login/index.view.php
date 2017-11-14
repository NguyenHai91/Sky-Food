<!-- Require head-->
<?php view_include('admin.layouts.head-master', ['title' => 'Login'])?>

<div class="login-form page-form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title text-center">ĐĂNG NHẬP</div>
        </div>
        <div class="panel-body">
            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" action="/login" method="POST">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" value="" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group login-btn">
                        <input type="submit" class=" btn bg-button" name="login" value="Đăng nhập" />
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <p class=" text-center res-link">Bạn chưa có tài khoản? <a href="/register">Đăng kí</a></p>
            </form>
        </div>
    </div>
</div>

<!-- Require foot -->
<?php view_include('admin.layouts.foot-master')?>
