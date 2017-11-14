<?php view_include('public.layouts.head-master', ['title' => 'Home'])?>
<div class="wrapper">
    <?php view_include('public.partials.header')?>
    <div id="content">
        <div id="home" class="home">
            <div class="slide-ad">
                <div class="container-fluid">
                    <div class="row">
                       <div class="slider-ad slider">
                        <div class="wrp-item">
                            <img src="public/public/assets/img/slide_banner/banner1.jpg">
                            <div class="bg">
                                <div class="slide-text ">
                                    <h2>Nutrition Breakfast </h2>
                                </div>
                            </div>
                        </div>
                        <div class="wrp-item">
                            <img src="public/public/assets/img/food/food10.jpg">
                            <div class="bg">
                                <div class="slide-text ">
                                    <h2>Fresh Fruit</h2>
                                </div>
                            </div>
                        </div>
                        <div class="wrp-item">
                            <img src="public/public/assets/img/slide_banner/banner5.jpg">
                            <div class="bg">
                                <div class="slide-text ">
                                    <h2>Green Tea</h2>
                                </div>
                            </div>
                        </div>
                        <div class="wrp-item">
                            <img src="public/public/assets/img/slide_banner/banner2.jpg">
                            <div class="bg">
                                <div class="slide-text ">
                                    <h2>Fresh Vegetables </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="interested" class="section-scroll products wrapper-content">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>Interested</h2>
                        <p class="underline"></p>
                    </div>
                    <div class="ctn-products ctn-main">
                        <?php foreach ($interestedShop as $item) {?>
                        <div class="item-product col-md-3 col-xs-4">
                            <div class="wrp-item">
                                <div class="img-product">
                                    <img class="img" src="/public/admin/assets/img/img-shop/<?=$item->VIEW?>" alt="">
                                    <div class="hover-view">
                                        <div class="view">
                                            <a class="btn-view" href="/shop?id=<?=$item->SHOP_ID?>"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctn-product">
                                    <div class="info">
                                        <h3><a href="/shop?id=<?=$item->SHOP_ID?>"><?=$item->SHOP_NAME?></a></h3>
                                        <p class="address"><?=$item->ADDRESS?></p>
                                    </div>
                                    <div class="parameter">
                                        <div class="col-md-4 col-xs-4">
                                            <p href=""><i class="fa fa-star"></i> <?=substr($item->SCORE, 0, 3)?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <p href=""><i class="fa fa-comment"></i> <?=$item->COMMENTS?></p>
                                        </div>
                                        <div class="col-md-4 col-xs-4">
                                            <p href=""><i class="fa fa-bookmark"></i> <?=$item->SAVED?></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <?php if (0 != $item->DISCOUNT) {?>
                                <div class="ribbon">
                                    <p>
                                        <span>Sale</span> <?=$item->DISCOUNT?>%
                                    </p>
                                </div>
                                <?php }?>
                            </div>
                        </div>

                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="news" class="section-scroll products wrapper-content">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>News</h2>
                        <p class="underline"></p>
                    </div>
                    <div class="ctn-products ctn-main">
                       <?php foreach ($latest as $item) {?>
                       <div class="item-product col-md-3 col-xs-4">
                        <div class="wrp-item">
                            <div class="img-product">
                                <img class="img" src="/public/admin/assets/img/img-shop/<?=$item->VIEW?>" alt="">
                                <div class="hover-view">
                                    <div class="view">
                                        <a class="btn-view" href="/shop?id=<?=$item->SHOP_ID?>"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ctn-product">
                                <div class="info">
                                    <h3><a href="/shop?id=<?=$item->SHOP_ID?>"><?=$item->SHOP_NAME?></a></h3>
                                    <p class="address"><?=$item->ADDRESS?></p>
                                </div>
                                <div class="parameter">
                                    <div class="col-md-4 col-xs-4">
                                        <p href=""><i class="fa fa-star"></i><?=substr($item->SCORE, 0, 3)?></p>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <p href=""><i class="fa fa-comment"></i> <?=$item->COMMENTS?></p>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <p href=""><i class="fa fa-bookmark"></i> <?=$item->SAVED?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php if (0 != $item->DISCOUNT) {?>
                            <div class="ribbon">
                                <p>
                                    <span>Sale</span> <?=$item->DISCOUNT?>%
                                </p>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>

                           <!--      <div class="view-more col-md-12 col-xs-12">
                                    <button class="btn btn-bg" type="submit">View more</button>
                                </div> -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--About Us-->
                <div id="aboutUs" class="section-scroll products wrapper-content">
                    <div class="wrp-ctn container">
                        <div class="row">
                            <div class="title">
                                <h2>About Us</h2>
                                <p class="underline"></p>
                            </div>
                            <div class="ctn-about ctn-products ctn-main">
                                <div class="col-md-8 col-md-push-2 class-three">
                                    <div class="item-product col-md-4 col-xs-4 wow bounceInLeft">
                                        <div class="wrp-item">
                                            <div class="img-product">
                                                <img class="img" src="/public/public/assets/img/about-us/h1.jpg" alt="">
                                            </div>
                                            <div class="ctn-product">
                                                <div class="info">
                                                    <h3 class="name1"><span >Ông Quang</span></h3>
                                                    <p class="address">Backend</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-product col-md-4 col-xs-4 wow bounceInLeft">
                                        <div class="wrp-item">
                                            <div class="img-product">
                                                <img class="img" src="/public/public/assets/img/about-us/h2.jpg" alt="">
                                            </div>
                                            <div class="ctn-product">
                                                <div class="info">
                                                    <h3 class="name2"><span >Thanh Sơn</span></h3>
                                                    <p class="address">Backend</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-product col-md-4 col-xs-4 wow bounceInLeft">
                                        <div class="wrp-item">
                                            <div class="img-product">
                                                <img class="img" src="/public/public/assets/img/about-us/h3.jpg" alt="">
                                            </div>
                                            <div class="ctn-product">
                                                <div class="info">
                                                    <h3 class="name3"><span>Quốc Đạt</span></h3>
                                                    <p class="address">Backend</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-push-3 class-two">
                                    <div class="item-product col-md-6 col-xs-4 wow bounceInLeft">
                                        <div class="wrp-item">
                                            <div class="img-product">
                                                <img class="img" src="/public/public/assets/img/about-us/h4.jpg" alt="">
                                            </div>
                                            <div class="ctn-product">
                                                <div class="info">
                                                    <h3 class="name4"><span >Hoài Thương</span></h3>
                                                    <p class="address">Backend</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-product col-md-6 col-xs-4 wow bounceInLeft">
                                        <div class="wrp-item">
                                            <div class="img-product">
                                                <img class="img" src="/public/public/assets/img/about-us/h5.jpg" alt="">
                                            </div>
                                            <div class="ctn-product">
                                                <div class="info">
                                                    <h3 class="name5"><span >Hiếu Trần</span></h3>
                                                    <p class="address">Frontend</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="modalNotice" data-toggle="modal" data-target="#idModal" style="display:none;">

        </button>


        <?php if (isset($_SESSION['notice_login'])) {
    $data = [
        'id_model' => 'idModal',
        'title' => 'THÔNG BÁO',
        'content' => $_SESSION['notice_login'],
        'bt' => 'OK',
        'link' => '',
    ];
    view_include('admin.partials.modal', $data);

    unset($_SESSION['notice_login']);
}

?>

        <?php view_include('public.partials.footer')?>
    </div>

    <?php view_include('public.layouts.foot-master')?>
