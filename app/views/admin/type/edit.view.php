<?php view_include('admin.layouts.head-master', ['title' => 'Chỉnh sửa danh mục']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Chỉnh sửa danh mục'])?>
         <div class="content edit-user">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa danh mục</h4>
                            </div>
                            <div class="content">
                                <form data-toggle="validator" role="form" method="POST" action="/admin/type/edit">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên danh mục (<span>*</span>)</label>
                                                <input type="text" class="form-control" name="type_name" placeholder="Nhập tên danh mục" value="<?=$type->TYPE_NAME;?>" required>
                                                <input type="hidden" name="type_id" value="<?=$type->TYPE_ID;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" name="update" class="btn bg-button btn-fill pull-right">Hoàn thành</button>
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