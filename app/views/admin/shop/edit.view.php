<?php view_include('admin.layouts.head-master', ['title' => 'Sửa địa điểm']);?>

<body>
    <div class="wrapper">
        <?php view_include('admin.layouts.side-bar');?>
        <div class="main-panel">
            <?php view_include('admin.partials.header', ['title' => 'SỬA ĐỊA ĐIỂM'])?>
            <div class="content edit-post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Sửa bài đăng</h4>
                                </div>
                                <div class="content">
                                    <form data-toggle="validator" role="form" action="/admin/shop/edit?id=<?=$shop->SHOP_ID?>" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-7">
                                             <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="place" class="control-label">Địa điểm (<span>*</span>)</label>
                                                        <input type="text" class="form-control" id="place" value="<?=$shop->SHOP_NAME?>" name="shop_name" required>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Số điện thoại (<span>*</span>)</label>
                                                        <input type="text" onkeypress="return isNumberKey(event)" maxlength="11" class="form-control" id="phone" value="<?=$shop->PHONE?>" required data-error="Vui lòng nhập số vào" name="phone">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="discount" class="control-label">Giảm giá (<span>*</span>)</label>
                                                        <input type="text" onkeypress="return isNumberKey(event)" maxlength="3" class="form-control" id="discount" placeholder="Khuyến mãi" value="<?=$shop->DISCOUNT?>" name="discount" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="type">Danh mục (<span>*</span>)</label>
                                                        <select class="form-control" id="type" name="type">
                                                            <option>[Chọn]</option>
                                                            <?php
foreach ($types as $value) {
    $sel = '';
    if ($value->TYPE_ID == $shop->type_id) {
        $sel = 'selected';
    }
    ?>
                                                            <option value="<?=$value->TYPE_ID?>" <?=$sel?>><?=$value->TYPE_NAME?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="city" class="control-label">Thành phố (<span>*</span>)</label>
                                                        <input type="text" class="form-control" id="city" placeholder="Thành phố" value="Đà Nẵng" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Địa chỉ (<span>*</span>)</label>
                                                        <input id="pac-input" type="text" class="form-control" value="<?=$shop->ADDRESS?>"  name="address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lat" class="control-label">Latitude</label>
                                                        <input type="text" class="form-control" id="lat" name="lat" value="<?=$shop->LAT?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lung" class="control-label">Lungtide</label>
                                                        <input type="text" class="form-control" id="lung" value="<?=$shop->LNG?>" name="lng" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="openTime" class="control-label">Thời gian mở cửa (<span>*</span>)</label>
                                                        <input type="text" class="form-control"  value="<?=$shop->TIME_OPEN?>" id="openTime" name="time_open" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="closeTime" class="control-label">Thời gian đóng cửa (<span>*</span>)</label>
                                                        <input type="text" class="form-control" value="<?=$shop->TIME_CLOSE?>" id="closeTime" name="time_close" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Chi tiết</label>
                                                        <textarea rows="5" class="form-control"  name="detail"><?=$shop->DETAIL?></textarea required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-push-1 wrp-card">
                                            <div class="card card-user">
                                                <div class="content">
                                                    <div class="author">
                                                        <div>
                                                             <img class="avatar border-gray" src="/public/admin/assets/img/img-shop/<?=$shop->VIEW?>" alt="..." />
                                                        </div>
                                                        <div class="edit-avatar ">
                                                            <div class="wrp file bg-button">
                                                                 <i class="pe-7s-cloud-upload"></i>Tải lên
                                                                 <input type="file" name="file" />
                                                            </div>
                                                        </div>
                                                        <h4 class="title">Ảnh địa điểm<br />

                                                         </h4>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="">
                                                <div id="map" class="form-group"></div>
                                                    <div id="infowindow-content">
                                                         <img src="" width="16" height="16" id="place-icon">
                                                         <span id="place-name" class="title"></span>
                                                         <br>
                                                         <span id="place-address"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-1 col-xs-1">
                                                        <input type="submit" value="Sửa" name="edit" class="btn bg-button">
                                                     </div>
                                                     <?php
if (1 == $_SESSION['user']->ROLE) {
    if (0 == $shop->STATUS) {
        ?>
                                                     <div class="col-md-1 col-xs-1">
                                                        <input type="submit" value="Duyệt" name="browsing" class="btn bg-button">
                                                     </div>
                                                     <?php } else {?>
                                                     <div class="col-md-1 col-xs-1">
                                                        <input type="submit" value="Không duyệt" name="updo" class="btn bg-button">
                                                     </div>
                                                     <?php }}?>
                                                     <div class="clearfix"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJTv1mpf9Tm1fWBip0XKIuE1tBcv9GMc&libraries=places&callback=initMap" async defer></script>