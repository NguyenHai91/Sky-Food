<?php view_include('public.layouts.head-master', ['title' => 'Detail'])?>

    <div class="wrapper">
        <?php view_include('public.partials.header')?>

        <div id="content">
            <div class="pagination-tab">
                <div class="container">
                    <div class="row">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                            <li class="breadcrumb-item active-breadcrumb"><?=$shop[0]->SHOP_NAME?></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="detail">
                <div class="information">
                    <div class="container">
                        <div class="row">
                            <div class="infor-main">
                                <div class="col-md-5 col-xs-5 image">
                                    <div class="wrp">
                                        <img src="/public/admin/assets/img/img-shop/<?=$shop[0]->VIEW?>" alt="">
                                        <?php if ($shop[0]->DISCOUNT > 0) {?>
                                        <div class="ribbon">
                                            <p>
                                                <span>Sale</span> <?=$shop[0]->DISCOUNT?>%
                                            </p>
                                        </div>
                                        <?php }?>
                                        <div id="displaySaved">
                                            <?php if (1 == $check) {?>
                                            <div class="ribbon bookmark" >
                                            <p>
                                                <span>Saved</span>
                                            </p>
                                        </div><?php }?>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-7  col-xs-7 ctn">
                                    <div class="wrp">
                                        <div class="item name">
                                            <div class="score" >
                                                <p><?=$avg?></p>
                                            </div>
                                            <div class="name-address">
                                                <h3> <?=$shop[0]->SHOP_NAME?> </h3>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <p class="item address "><i class="fa fa-location-arrow"></i><?=$shop[0]->ADDRESS?></p>
                                        <p class="item phone "><i class="fa fa-phone"></i><?=$shop[0]->PHONE?></p>
                                        <p class="item time "><i class="fa fa-clock-o"></i><?=$shop[0]->TIME_OPEN?> - <?=$shop[0]->TIME_CLOSE?></p>
                                        <div class="item features">
                                            <form action="javascript:void(0)">
                                                <div class="item-feature save">

                                                    <div class="form-group" id='save'>
                                                        <?php
$link = '';

if ('' == $checkRate) {
    $link = "'/shop/rate'";
} else {
    $link = "'/shop/updateRate'";
}
$modalSave = $modalRate = 'data-target="#modal-message"';
$clickSave = $clickRate = '';
$save = 'value="Save"';
if (1 == $checkLogin) {
    $modalSave = '';
    $modalRate = 'data-target="#modal-rating"';
    $clickRate = 'onclick="rate(' . $link . ',' . $shop[0]->sid . ',)"';
    if (0 == $check) {
        $clickSave = ' onclick="saveAjax(' . "'/shop/ajaxSave'" . ',' . $shop[0]->sid . ',' . $check . ');"';
    } else {
        $save = 'value="Unsave"';
        $clickSave = ' onclick="saveAjax(' . "'/shop/ajaxUnsave'" . ',' . $shop[0]->sid . ',' . $check . ');"';
    }
}

?>
                                                        <input  data-toggle="modal"  <?=$modalSave?> type="submit" class=" btn btn-bg" <?=$save?> <?=$clickSave?> />
                                                    </div>
                                                </div>
                                                <div class="item-feature rate">
                                                    <div class="form-group">
                                                        <a  href="" class="btn btn-bg" data-toggle="modal" <?=$modalRate?> onclick="rateButton(<?=$avg?>)">Rate</a>
                                                    </div>
                                                </div>
                                                <div id="modal-rating" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content content">
                                                            <div class="wrp-ctn">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Rating</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" name="form-rate" id="form-rate" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group item">
                                                                                <div class="rating"></div>
                                                                                <input id="input-rate" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group button-action">
                                                                                <input  type="submit" <?=$clickRate?> class=" btn btn-bg" value="Send" / data-dismiss="modal">
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-feature button-map">
                                                    <div class="form-group">
                                                        <a href="javascript:void(0)" class="btn btn-bg" onclick="loadMap(<?=$shop[0]->LAT?>,<?=$shop[0]->LNG?>)">Map</a>
                                                    </div>
                                                </div>
                                                <div class="item-feature ">

                                                    <div id="modal-message" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content content">
                                                                <div class="wrp-ctn">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">Message</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                       <h2>Please login to perform this action.</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            <div class="ggmap">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="wrp-blur wrapper-content">
                        <div class="container">
                            <div class="row">
                                <div class="title">
                                    <h2>Description</h2>
                                    <p class="underline"></p>
                                </div>
                                <div class="ctn-description ctn-main">
                                    <div class="col-md-8 col-md-push-2">
                                        <p><?=$shop[0]->DETAIL?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="album products wrapper-content">
                    <div class="container">
                        <div class="row">
                            <div class="title">
                                <h2>Album</h2>
                                <p class="underline"></p>
                            </div>
                            <div class="ctn-products ctn-main">
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/food/food1.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div id="modal-img" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content content">
                                                        <div class="wrp-ctn">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="wrp-item">
                                                                    <div class="img-product">
                                                                        <img class="img" src="/public/public/assets/img/restaurant/res5.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/restaurant/res2.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/food/food3.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/restaurant/res4.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/restaurant/res6.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/food/food5.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/food/food7.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="/public/public/assets/img/restaurant/res5.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more col-md-12 col-xs-12">
                                    <button class="btn btn-bg" type="submit">View more</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other wrapper-content">
                    <div class="container">
                        <div class="row">
                            <div class="wrp">
                                <div class="title">
                                    <h2>Others</h2>
                                    <p class="underline"></p>
                                </div>
                                <div class="ctn-slide ctn-main">
                                    <div class="slider-other slider">
                                        <?php
foreach ($otherShops as $value) {
    ?>
                                        <div class="wrp-item">
                                            <img src="/public/admin/assets/img/img-shop/<?=$value->VIEW?>">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="shop?id=<?=$value->sid?>"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <!-- <div class="wrp-item">
                                            <img src="/public/public/assets/img/restaurant/res1.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="/public/public/assets/img/food/food1.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="/public/public/assets/img/food/food2.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="/public/public/assets/img/restaurant/res3.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div> -->



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments wrapper-content">
                    <div class="container">
                        <div class="row">
                            <div class="title">
                                <h2>Comments</h2>
                                <p class="underline"></p>
                            </div>
                            <div class="ctn-comments ctn-main">
                                 <?php
if (0 == $checkLogin) {
    ?>

                                    <div class="alert alert-danger">
                                      <strong><a href="login">Please login to comment!</a></strong>
                                    </div>
                                    <?php
} else {
    ?>
                                <div class="media input-cmt">
                                    <div class="media-left">
                                        <img src="/public/admin/assets/img/imagesUser/<?=$_SESSION['user']->IMAGE?>" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <h4 class="media-heading"><?=$_SESSION['user']->USERNAME?></h4>
                                        <form action="javascript:void(0)" class="form-border-color">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" id="comment"></textarea>
                                            </div>
                                            <div class="pull-right form-group">
                                                <input type="submit" class="btn btn-bg" value="Send" id="btnSend" onclick="loadMyComments(<?=$shop[0]->sid?>)">
                                            </div>
                                        </form>
                                    </div>

                                </div><?php }?>
                                <div id="ajaxComment">


                                <?php
foreach ($comments as $value) {
    ?>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="/public/admin/assets/img/imagesUser/<?=$value->IMAGE?>" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?=$value->USERNAME?> <small><i><?=$value->DATE_CREATED?></i></small></h4>
                                        <p><?=$value->CONTENT?></p>
                                    </div>
                                </div>
                                <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php view_include('public.partials.footer')?>
        </div>
    </div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJTv1mpf9Tm1fWBip0XKIuE1tBcv9GMc&callback=initMap" async defer></script>

<?php view_include('public.layouts.foot-master')?>


