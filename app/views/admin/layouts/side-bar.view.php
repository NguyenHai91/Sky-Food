<?php

$_SERVER['REQUEST_URI'];

$arrLink = ['/admin/shop' => ['QL Địa điểm', 'note2'],
    '/admin/user' => ['QL Người dùng', 'user'],
    '/admin/type' => ['QL Danh mục', 'news-paper'],
    '/admin/feedback' => ['QL Phản hồi', 'back-2'],
];

?>

<div class="sidebar" data-color="purple" data-image="/public/admin/assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/admin" class="simple-text">Sky Food</a>
        </div>
        <ul class="nav">

            <?php foreach ($arrLink as $key => $value) {
    if ($_SERVER['REQUEST_URI'] == $key) {
        $active = 'active';
    } else {
        $active = '';
    }
    ?>
                <li class="<?=$active;?>">
                    <a href="<?=$key?>">
                        <i class="pe-7s-<?=$value[1]?>"></i>
                        <p><?=$value[0]?></p>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
