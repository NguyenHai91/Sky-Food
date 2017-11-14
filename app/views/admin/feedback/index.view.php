<!-- Require head-->
<?php view_include('admin.layouts.head-master', ['title' => 'Phản hồi'])?>

<!-- Require modal -->
<div class="wrapper">
    <!-- Require side-bar -->
    <?php view_include('admin.layouts.side-bar')?>


    <div class="main-panel">

        <!-- Require header -->
        <?php view_include('admin.partials.header', ['title' => 'Phản hồi'])?>

        <!-- Main contain -->
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                    </div>
                                    <div class="col-lg-offset-6 col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-5 col-xs-8">
                                        <div id="searchFeedbackInput" class="input-group search-btn">
                                            <div class="input-group-addon"><span>Tìm kiếm</span></div>
                                            <input type="text" id="inputSearch" class="form-control" />
                                            <div class="input-group-btn">
                                                <button class="btn btn-default search" onclick="search('/admin/feedback/searchFeedback')" type="button"><i class="pe-7s-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="content content-card table-responsive table-full-width">
                                <table id="view-post" class="table table-hover table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Tin nhắn</th>
                                        <th>Control</th>
                                    </thead>
                                    <tbody class="tableSearch">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Require footer -->
        <?php view_include('admin.partials.footer')?>

    </div>
</div>

<!-- Require foot -->
<?php view_include('admin.layouts.foot-master')?>
