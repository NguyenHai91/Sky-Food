<div class="avatar-features item-ctn col-md-3">
    <div class="wrp">
        <form action="/editUserImage" method="POST" enctype="multipart/form-data" class="form-avatar">
            <div class="avatar">
                <div class="img">
                    <img src="/public/admin/assets/img/imagesUser/<?=$_SESSION['user']->IMAGE;?>" alt="..." />
                    <div class="edit-avatar" data-toggle="modal" data-target="#modal-crop-img">
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
            </div>
            <div id="modal-crop-img" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content content">
                        <div class="wrp-ctn">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit avatar</h4>
                            </div>
                            <div class="modal-body">
                                <form data-toggle="validator" action="/profile" role="form" name="form" id="form-search" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                    <div class="image-editor">
                                        <div class="cropit-preview"></div>
                                        <div class="feature-crop">
                                            <div class="col-md-4 col-xs-4 item-feature-crop">
                                                <div class="resize">
                                                    <input type="range" class="cropit-image-zoom-input">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-4 item-feature-crop">
                                                <div class="file btn-bg">
                                                    <i class="fa fa-camera"></i>Choose image
                                                    <input type="file" class="cropit-image-input btn btn-bg" />
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-4 item-feature-crop">
                                                <div class="upload">
                                                    <i class="fa fa-cloud-upload"></i>
                                                    <input id="image" type="button" class="export btn btn-bg" value="Upload" />
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php

$_SERVER['REQUEST_URI'];

$arrLink = ['/profile' => ['-pencil-square-o', 'Edit'],
    '/editUserPassword' => ['-user', 'Password'],
    '/saveShop' => ['-bookmark', 'Saved'],

];

?>
        <div class="features">
            <nav>
                <ul class="nav">

                    <?php foreach ($arrLink as $key => $value) {
    if ($_SERVER['REQUEST_URI'] == $key) {
        $active = 'active';
    } else {
        $active = '';
    }
    ?>
                        <li class="<?=$active;?>"><a href="<?=$key?>"><i class="fa fa<?=$value[0]?>"></i><?=$value[1]?></a></li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
            <div class="wrp-blur"></div>
        </div>
    </div>
    <button class="modalNotice" data-toggle="modal" data-target="#idModal" style="display:none;">

        </button>


        <?php if (isset($_SESSION['notice_edit'])) {
    $data = [
        'id_model' => 'idModal',
        'title' => 'THÔNG BÁO',
        'content' => $_SESSION['notice_edit'],
        'bt' => 'OK',
        'link' => '',
    ];
    view_include('admin.partials.modal', $data);

    unset($_SESSION['notice_edit']);
}

?>
