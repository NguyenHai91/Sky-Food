<?php view_include('public.layouts.head-master', ['title' => 'Contact'])?>
    <div class="wrapper">
       <?php view_include('public.partials.header')?>
       <div id="content">
        <div class="contact wrapper-content">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>Contact Us</h2>
                        <p class="underline"></p>
                    </div>
                    <div class="ctn-contact ctn-main">
                        <div class="infor-contact">
                            <div class="item-infor col-md-4 col-xs-4">
                                <span><i class="fa fa-map-marker"></i></span>
                                <div class="text">
                                    <p>242 Nguyễn Hoàng, Đà Nẵng, Việt Nam</p>
                                </div>
                            </div>
                            <div class="item-infor col-md-4 col-xs-4">
                                <span><i class="fa fa-phone"></i></span>
                                <div class="text">
                                    <p>01282143365</p>
                                    <p>0905594382</p>
                                </div>
                            </div>
                            <div class="item-infor col-md-4 col-xs-4">
                                <span><i class="fa fa-envelope"></i></span>
                                <div class="text">
                                    <p>hieutran040495@gmail.com</p>
                                    <p>tthieu040495@gmail.com</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="message">
                            <div class="title-mess">
                                <h3>SEND A MESSAGE</h3>
                            </div>
                            <div class="ctn-mess">
                                <form class="form-border-color" data-toggle="validator" role="form" action="/contact/create" method="POST">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4 item-ctn-mess">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 item-ctn-mess">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 item-ctn-mess">
                                            <div class="form-group">
                                                <input type="text" onkeypress="return isNumberKey(event)" maxlength="11" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="row textarea">
                                        <div class="col-md-12 item-ctn-mess">
                                            <div class="form-group">
                                                <textarea rows="5" class="form-control" placeholder="Message" value="" name="content" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input  type="submit" class="btn btn-bg pull-right" value="Send">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="modalNotice" data-toggle="modal" data-target="#idModal" style="display:none;">

    </button>


    <?php if (isset($_SESSION['notice_contact'])) {
    $data = [
        'id_model' => 'idModal',
        'title' => 'THÔNG BÁO',
        'content' => $_SESSION['notice_contact'],
        'bt' => 'OK',
        'link' => '',
    ];
    view_include('admin.partials.modal', $data);
    unset($_SESSION['notice_contact']);
}
?>

    <?php view_include('public.partials.footer')?>
</div>

<?php view_include('public.layouts.foot-master')?>

