<?php view_include('admin.layouts.head-master', ['title' => 'Thống kê'])?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>

    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Thống kê'])?>
        <div class="content posts home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card row">
                            <div class="content content-card table-responsive table-full-width">
                                This function is not available now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('admin.partials.footer');?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="delCat" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">XOÁ DANH MỤC</h4>
            </div>
            <div class="modal-body">
                <p>Bạn có muốn xoá danh mục này?.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Xoá</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
<?php view_include('admin.layouts.foot-master');?>
