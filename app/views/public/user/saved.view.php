<?php view_include('public.layouts.head-master', ['title' => $_SESSION['user']->USERNAME])?>

    <div class="wrapper">
        <?php view_include('public.partials.header')?>

        <div id="content">
            <div class="user-profile wrapper-content">
                <div class="container">
                    <div class="row wrp-ctn-user">
                        <div class="title">
                            <h2>User Profile</h2>
                            <p class="underline"></p>
                        </div>
                        <div class="ctn-user ctn-main">
                            <div class="row ">

                                <?php view_include('public.user.partials.side-bar');?>
                                <div class="user-infor user-saved item-ctn products col-md-9">
                                    <div class="wrp">
                                        <div class="ctn-products">
                                        <?php if (count($saveShop) == 0) {?>
                                            <h1 class="noItem">Không có địa điểm nào được lưu!</h1>
                                        <?php } else {?>
                                        <?php foreach ($saveShop as $item) {?>
                                            <div class="item-product col-md-4 col-xs-4">
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
                                                            <p class="address"><?=$item->SHOP_NAME?></p>
                                                        </div>
                                                        <div class="parameter">
                                                            <div class="col-md-4 col-xs-4">
                                                                <p href=""><i class="fa fa-star"></i><?=substr($item->SCORE, 0, 3)?></p>
                                                            </div>
                                                            <div class="col-md-4 col-xs-4">
                                                                <p href=""><i class="fa fa-comment"></i><?=$item->COMMENTS?></p>
                                                            </div>
                                                            <div class="col-md-4 col-xs-4">
                                                                <p href=""><i class="fa fa-bookmark"></i><?=$item->SAVED?></p>
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
                                            <?php }}?>

                                            <div class="clearfix"></div>
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
        <?php view_include('public.partials.footer')?>
    </div>

<?php view_include('public.layouts.foot-master')?>

