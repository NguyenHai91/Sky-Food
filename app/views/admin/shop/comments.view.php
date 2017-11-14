<?php view_include('admin.layouts.head-master', ['title' => 'Bình luận']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Bình luận'])?>
        <div class="content posts comments">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Xem bình luận của địa điểm:<b> <?=$shop->SHOP_NAME?></b></h4>
                            </div>
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
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
                                <div class="content content-card table-responsive table-full-width">
                                    <table id="view-post" class="table table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Bình luận</th>
                                            <th>Control</th>
                                        </thead>
                                        <tbody>
                                            <?php $index = 0;?>
                                            <?php foreach ($comments['all'] as $value): ?>
                                                <tr>
                                                    <td><?=++$index;?></td>
                                                    <td class="username"><a href=""><?=$value->USERNAME?></a></td>
                                                    <td class="cmt"><?=$value->CONTENT?></td>
                                                    <td class="control">
                                                        <div class="form-group">
                                                            <div class="item-col">
                                                                <a data-toggle="modal" data-target="#delComment<?=$value->COMMENT_ID?>" href="" class="btn btn-danger" title="Xoá">
                                                                    <i class="pe-7s-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php view_include('admin.partials.modal', ['id_model' => 'delComment' . $value->COMMENT_ID, 'title' => 'XÓA BINH LUAN ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/shop/comment/del?idcomment=' . $value->COMMENT_ID . '&id=' . $shop->SHOP_ID]);?>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php $pagination = $comments?>
                                <?php view_include('admin.partials.paginationComment', compact('pagination', 'shop'));?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php view_include('admin.partials.footer');?>
        </div>
    </div>

    <?php view_include('admin.layouts.foot-master');?>
