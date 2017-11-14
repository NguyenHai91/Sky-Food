<?php view_include('public.layouts.head-master', ['title' => 'Search'])?>
<div class="wrapper">
    <?php view_include('public.partials.header')?>
    <div id="content">
        <div class="user-profile wrapper-content advanced-search">
            <div class="container">
                <div class="row wrp-ctn-user">
                    <div class="title">
                        <h2>Advanced search</h2>
                        <p class="underline"></p>
                    </div>
                    <div class="ctn-user ctn-main">
                        <div class="row ">
                            <div class="item-ctn col-md-3">
                                <div class="wrp">
                                    <div class="features">
                                        <nav>
                                            <div class="form-avatar">
                                                <ul class="nav">
                                                    <li class="input-address item">
                                                        <div class="form-group">
                                                            <div>
                                                                <input type="text" class="form-control" id="input" placeholder="Tên nhà hàng" autocomplete="off" value="<?=$_GET['name']?>">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="type item-three item">
                                                        <div class="form-group wrp-item">
                                                            <select name="type" class="form-control" id="type">
                                                                <option value="0">Tất cả thể loại</option>
                                                                <?php foreach ($types as $type): ?>
                                                                    <option value="<?=$type->TYPE_ID?>"><?=$type->TYPE_NAME;?> </option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li class="type item-three item">
                                                        <div class="form-group wrp-item">
                                                            <select id="sortBy" class="form-control">
                                                                <option value="0" selected>Mới nhất</option>
                                                                <option value="1">Đánh giá tốt nhất</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li class="button-search item-three item">
                                                        <div class="wrp-item">
                                                            <div>
                                                                <input class="form-control btn btn-bg" id="searchId" onclick="search('search/shop')" value="Search" type="button">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="wrp-blur"></div>
                                </div>
                            </div>
                            <div class="user-infor user-saved item-ctn products col-md-9">
                                <div class="wrp">
                                    <div class="ctn-products searchShopTable">
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
