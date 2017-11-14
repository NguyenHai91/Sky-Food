<?php view_include('admin.layouts.head-master', ['title' => 'THÊM NGƯỜI DÙNG']);?>
<div class="wrapper">
   <?php view_include('admin.layouts.side-bar');?>
   <div class="main-panel">
    <?php view_include('admin.partials.header', ['title' => 'THÊM NGƯỜI DÙNG'])?>
    <div class="content edit-user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Thêm thông tin người dùng</h4>
                        </div>
                        <div class="content">
                            <form data-toggle="validator" role="form" method="POST" action="/admin/user/add" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label">Username (<span>*</span>)</label>
                                                    <input type="text" name="username" class="form-control" id="userName" onkeyup="checkUsernameAlready()" placeholder="Nhập tài khoản đăng nhập" autocomplete="off" required>
                                                </div>
                                                <div class="tableSearch">
                                                    <p></p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Phân quyền (<span>*</span>)</label>
                                                    <select class="form-control" name="role" id="role">

                                                        <option value="1">Admin</option>
                                                        <option value="2">Staff</option>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pass" class="control-label">Mật khẩu (<span>*</span>)</label>
                                                    <input type="password" data-minlength="6" class="form-control" name="password" id="pass" placeholder="Password" required>
                                                    <div class="help-block">(Mật khẩu ít nhất 6 kí tự)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Xác nhận mật khẩu (<span>*</span>)</label>
                                                    <input type="password"  class="form-control" id="confirmPass" name="confirmPass" data-match="#pass" data-match-error="Mật khẩu không trùng khớp" placeholder="Confirm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Địa chỉ </label>
                                                    <input type="text"  name="address" class="form-control" id="address" >

                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Điện thoại </label>
                                                    <input type="text"  name="phone" class="form-control" id="phone">

                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Email (<span>*</span>)</label>
                                                    <input type="email"  name="email" class="form-control" id="confirmPass" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">Tên </label>
                                                    <input type="text" name="firstName" class="form-control"  placeholder="Họ" value="" id="firstName" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName">Họ </label>
                                                    <input type="text" name="lastName" class="form-control" placeholder="Tên" value="" id="lastName" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-md-push-1 wrp-card">
                                        <div class="card card-user">
                                         <div class="content">
                                             <div class="author">
                                                 <div >
                                                     <img class="avatar border-gray" src="/public/admin/assets/img/user1.jpg" alt="..." />
                                                 </div>
                                                 <div class="showImages">

                                                 </div>
                                                 <div class="edit-avatar ">
                                                     <div class="file bg-button">
                                                         <i class="pe-7s-cloud-upload"></i>Chọn ảnh
                                                         <input type="file" id="loadImages" name="file" value="" onclick="loadImages()" />
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="infor text-center">
                                                 <h4 class="title">Ảnh đại diện</h4>

                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="clearfix"></div>
                             </div>
                             <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="add" class="btn bg-button btn-fill pull-left" value="Thêm" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php view_include('admin.partials.footer');?>
</div>
</div>
<?php view_include('admin.layouts.foot-master');?>
