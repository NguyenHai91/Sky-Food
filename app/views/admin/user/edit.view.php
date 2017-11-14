<?php view_include('admin.layouts.head-master', ['title' => 'CHỈNH SỬA NGƯỜI DÙNG']);?>
<div class="wrapper">
   <?php view_include('admin.layouts.side-bar');?>
   <div class="main-panel">
    <?php view_include('admin.partials.header', ['title' => 'CHỈNH SỬA NGƯỜI DÙNG'])?>
    <div class="content edit-user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Sửa thông tin người dùng</h4>
                        </div>
                        <div class="content">
                            <form data-toggle="validator" role="form" method="POST" action="/admin/user/edit" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label">Username (<span>*</span>)</label>
                                                    <input type="text" name="username" value="<?=$infoUser[0]->USERNAME?>" class="form-control" id="userName"  readonly placeholder="Nhập tài khoản đăng nhập" required>
                                                </div>
                                            </div>

                                            <?php if (1 == $_SESSION['user']->ROLE) {?>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Phân quyền (<span>*</span>)</label>
                                                    <select class="form-control" name="role" id="role">
                                                    <option <?php if (($infoUser[0]->ROLE) == 1) {echo 'Selected = "Selected"';}?> value="1">Admin</option>
                                                    <option <?php if (($infoUser[0]->ROLE) == 2) {echo 'Selected = "Selected"';}?> value="2">Staff</option>
                                                    <option <?php if (($infoUser[0]->ROLE) == 3) {echo 'Selected = "Selected"';}?> value="3">User</option>
                                                </select>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pass" class="control-label">Mật khẩu (<span>*</span>)</label>
                                                    <input type="password" value="" data-minlength="6" class="form-control" name="password" id="pass" placeholder="Password" >
                                                    <div class="help-block">(Mật khẩu ít nhất 6 kí tự)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Xác nhận mật khẩu(<span>*</span>)</label>
                                                    <input type="password" value="" class="form-control" id="confirmPass" name="confirmPass" data-match="#pass" data-match-error="Mật khẩu không trùng khớp" placeholder="Confirm" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Địa chỉ (<span>*</span>)</label>
                                                    <input type="text" value="<?=$infoUser[0]->ADDRESS?>" name="address" class="form-control" id="confirmPass" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Điện thoại (<span>*</span>)</label>
                                                    <input type="text" onkeypress="return isNumberKey(event)" maxlength="11" value="<?=$infoUser[0]->PHONE?>" name="phone" class="form-control no-spinners" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Email (<span>*</span>)</label>
                                                    <input type="hidden" name="urlImage" value="<?=$infoUser[0]->IMAGE?>">
                                                    <input type="email" value="<?=$infoUser[0]->EMAIL?>" name="email" class="form-control" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">Tên (<span>*</span>)</label>
                                                    <input type="text" name="firstName" class="form-control" value="<?=$infoUser[0]->FIRST_NAME?>" placeholder="Họ" value="" id="firstName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName">Họ (<span>*</span>)</label>
                                                    <input type="text" name="lastName" class="form-control" value="<?=$infoUser[0]->LAST_NAME?>" placeholder="Tên" value="" id="lastName" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-md-push-1 wrp-card">
                                        <div class="card card-user">
                                         <div class="content">
                                             <div class="author">
                                                 <div>
                                                     <img class="avatar border-gray" src="/public/admin/assets/img/imagesUser/<?=$infoUser[0]->IMAGE?>" alt="..." />
                                                 </div>
                                                 <div class="edit-avatar ">
                                                     <div class="file bg-button">
                                                         <i class="pe-7s-cloud-upload"></i>Chọn ảnh
                                                         <input type="file" name="file" />
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
                                    <input type="submit" name="add" class="btn bg-button btn-fill pull-left" value="Sửa" />
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
