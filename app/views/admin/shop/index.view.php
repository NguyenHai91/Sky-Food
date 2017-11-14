<?php view_include('admin.layouts.head-master', ['title' => 'Địa điểm']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>

    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Địa điểm'])?>
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <div class="add-btn">
                                            <a href="/admin/shop/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-offset-6 col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-5 col-xs-8">
                                        <div class="input-group search-btn">
                                            <div class="input-group-addon"><span>Tìm kiếm</span></div>
                                            <input type="text" class="form-control" id="inputSearch" />
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"  id="btnSearch" onclick="search('/admin/shop/searchShop')"><i class="pe-7s-search"></i></button>
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
                                <div class="content content-card table-responsive table-full-width">
                                    <table id="view-post" class="table table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Tên địa điểm</th>
                                            <th>Ảnh</th>
                                            <th>Danh mục</th>
                                            <th>%</th>
                                            <th>Khuyến mãi</th>
                                            <th>Trạng thái</th>
                                            <th>Bình luận</th>
                                            <th>Chức năng</th>
                                        </thead>
                                        <tbody class="tableSearch">
                                            <?php $index = 0;?>
                                            <?php foreach ($shop['all'] as $value): ?>
                                                <tr>
                                                    <td><?=++$index?></td>
                                                    <td class="name-place"><a href=""><?=$value->SHOP_NAME?></a></td>
                                                    <td class="img-post">
                                                        <a href=""><img  src="/public/admin/assets/img/img-shop/<?=$value->VIEW?>" /></a>
                                                    </td>
                                                    <td><?=$value->TYPE_NAME?></td>
                                                    <td class="change-discount<?=$value->SHOP_ID?>"><?=$value->DISCOUNT?></td>
                                                    <td class="percent-input">
                                                        <form action="javascript:void(0)">
                                                            <div class="form-group">
                                                                <div class="item-col">
                                                                    <input type="text" onkeypress="return isNumberKey(event)" maxlength="3" class="form-control" id="discount<?=$value->SHOP_ID?>" value="<?=$value->DISCOUNT?>" >
                                                                    <!--  <div class="help-block with-errors"></div> -->
                                                                </div>
                                                                <div class="item-col">
                                                                    <button type="submit" class="btn btn-success" onclick="changeDiscount(<?=$value->SHOP_ID?>)">Nhập</button>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <?php $status = (1 == $value->STATUS) ? 'active' : 'inactive'?>
                                                        <div class="status <?=$status?>"></div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="item-col">
                                                                <a href="/admin/shop/comment?id=<?=$value->SHOP_ID?>" class="btn btn-warning" title="Xem">
                                                                    <i class="pe-7s-look"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="control">
                                                        <div class="form-group">
                                                            <div class="item-col">
                                                                <a href="/admin/shop/edit?id=<?=$value->SHOP_ID?>" class="btn btn-success" title="Sửa">
                                                                    <i class="pe-7s-note"></i>
                                                                </a>
                                                            </div>
                                                            <div class="item-col">
                                                                <a data-toggle="modal" data-target="#delpost<?=$value->SHOP_ID?>"  href="" class="btn btn-danger" title="Xoá">
                                                                    <i class="pe-7s-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php view_include('admin.partials.modal', ['id_model' => 'delpost' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/shop/del?id=' . $value->SHOP_ID]);?>
                                            <?php endforeach;?>

                                        </tbody>
                                    </table>
                                </div>
                                <?php $pagination = $shop?>
                                <?php view_include('admin.partials.pagination', compact('pagination'));?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php view_include('admin.partials.footer');?>
        </div>
    </div>
    <!-- Modal -->


    <?php view_include('admin.layouts.foot-master');?>
