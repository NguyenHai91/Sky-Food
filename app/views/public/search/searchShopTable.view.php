<?php if (count($shops) == 0): ?>
    <h1 class="noItem">Không có kết quả nào</h1>
<?php endif?>
<?php foreach ($shops as $shop): ?>
    <div class="item-product col-md-4 col-xs-4">
        <div class="wrp-item">
            <div class="img-product">
                <img class="img" src="/public/admin/assets/img/img-shop/<?=$shop->VIEW?>" alt="">
                <div class="hover-view">
                    <div class="view">
                        <a class="btn-view" href="/shop?id=<?=$shop->SHOP_ID?>"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="ctn-product">
                <div class="info">
                    <h3><a href="/shop?id=<?=$shop->SHOP_ID?>"><?=$shop->SHOP_NAME?></a></h3>
                    <p class="address"><?=$shop->ADDRESS?></p>
                </div>
                <div class="parameter">
                    <div class="col-md-4 col-xs-4">
                        <?php if ('' == $shop->SCORE) {$shop->SCORE = 0;}?>
                        <p href=""><i class="fa fa-star"></i><?=substr($shop->SCORE, 0, 3)?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p href=""><i class="fa fa-comment"></i><?=$shop->COMMENTS?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p href=""><i class="fa fa-bookmark"></i><?=$shop->SAVED?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php if (0 != $shop->DISCOUNT): ?>
                <div class="ribbon">
                    <p>
                        <span>Sale</span> <?=$shop->DISCOUNT?>%
                    </p>
                </div>
            <?php endif?>
        </div>
    </div>
<?php endforeach?>
<!--      <div class="view-more col-md-12 col-xs-12">
        <button class="btn btn-bg" type="submit" onclick="viewMore()">View more</button>
    </div>
-->
