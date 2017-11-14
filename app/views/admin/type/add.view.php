<?php view_include('admin.layouts.head-master', ['title' => 'Thêm danh mục']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Thêm danh mục'])?>
       <div class="content edit-user">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm danh mục</h4>
                            </div>
                            <div class="content">
                                <form  data-toggle="validator" role="form" method="POST" action="/admin/type/add">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên danh mục (<span>*</span>)</label>
                                                <input type="text" class="form-control" name="nameCategory" placeholder="Nhập tên danh mục" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" name="add" class="btn bg-button btn-fill pull-right">Hoàn thành</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
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