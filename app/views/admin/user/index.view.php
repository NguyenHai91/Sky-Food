<?php view_include('admin.layouts.head-master', ['title' => 'Người dùng']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>

    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Người dùng'])?>
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">

                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <div class="add-btn">
                                            <a href="/admin/user/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm </a>
                                        </div>
                                    </div>


                                    <div class="col-lg-offset-6 col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-5 col-xs-8">
                                        <div class="input-group search-btn">
                                            <div class="input-group-addon"><span>Tìm kiếm</span></div>
                                            <input type="text" id="inputSearch" class="form-control" />
                                            <div class="input-group-btn">

                                                <button id="btnSearch" class="btn btn-default"  onclick="search('/admin/user/searchUser')" type="submit"><i class="pe-7s-search"></i></button>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['notice'])) {?>
                            <div class="alert alert-success">

                                <strong><?=$_SESSION['notice']?></strong>
                            </div>
                            <?php }?>
                            <?php unset($_SESSION['notice']);?>
                            <div class="content content-card table-responsive table-full-width ">
                                <table id="view-post"  class="table table-hover table-striped ">
                                    <thead>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Điện thoại</th>
                                        <th>Quyền</th>
                                        <th>Chức năng</th>
                                    </thead>
                                    <tbody class="tableSearch">

                                        <?php $i = 1;?>
                                        <?php foreach ($users['all'] as $user): ?>

                                            <tr>
                                                <td><?=$i;?></td>
                                                <td class="username"><a href="/admin/user/edit?idUser=<?=$user->USERNAME?>"><?=$user->USERNAME;?></a></td>
                                                <td class="img-post">
                                                    <?php if (null != $user->IMAGE) {$image = $user->IMAGE;} else { $image = 'default-avatar.png';}?>
                                                    <a href=""><img  src="/public/admin/assets/img/imagesUser/<?=$image;?>" /></a>
                                                </td>
                                                <td><?=$user->FULL_NAME;?></td>
                                                <td><?=$user->EMAIL;?></td>
                                                <td><?=$user->ADDRESS;?></td>
                                                <td><?=$user->PHONE;?></td>

                                                <td>
                                                    <?php $role = (1 == $user->ROLE) ? 'Admin' : ((2 == $user->ROLE) ? 'Staff' : 'User');
echo $role;?>
                                                </td>
                                                <td class="control">
                                                    <div class="form-group">
                                                        <?php if (($_SESSION['user']->USERNAME == $user->USERNAME) || (1 == $_SESSION['user']->ROLE)) {?>
                                                        <div class="item-col">
                                                            <a href="/admin/user/edit?idUser=<?=$user->USERNAME?>" class="btn btn-success" title="Sửa">
                                                                <i class="pe-7s-note"></i>
                                                            </a>
                                                        </div>
                                                        <?php }if ((1 == $_SESSION['user']->ROLE) && (1 != $user->ROLE)) {?>
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delUser<?=$user->USERNAME?>" href="" class="btn btn-danger" title="Xoá">
                                                                <i class="pe-7s-trash"></i>
                                                            </a>
                                                        </div>
                                                        <?php }?>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++;?>
                                            <!-- Modal -->
                                            <?php view_include('admin.partials.modal', ['id_model' => 'delUser' . $user->USERNAME, 'title' => 'XÓA NGƯỜI DÙNG', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/user/del?username=' . $user->USERNAME]);?>



                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                            </div>
                            <?php $pagination = $users?>
                            <?php view_include('admin.partials.pagination', compact('pagination'));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('admin.partials.footer');?>
    </div>
</div>

<?php view_include('admin.layouts.foot-master');?>
