<nav class="nav-pag">
    <ul class="pagination">
        <!-- nếu current_page > 1 và totalPage > 1 mới hiển thị nút prev -->
        <?php if ($pagination['currentPage'] > 1 && $pagination['totalPage'] > 1) {?>
            <li><a href="/<?=$pagination['link']?>?page=<?=($pagination['currentPage'] - 1)?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <?php }?>
            <!-- Lặp khoảng giữa -->
            <?php for ($i = 1; $i <= $pagination['totalPage']; $i++) {?>
<!-- // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a -->
    <?php if ($i == $pagination['currentPage']) {?>
        <li class="active"><a href="/<?=$pagination['link']?>?page=<?=$i?>"><?=$i?></a></li>
        <?php } else {?>
            <li><a href="/<?=$pagination['link']?>?page=<?=$i?>"><?=$i?></a></li>
            <?php }?>
            <?php }?>
            <!-- // nếu currentPage < $totalPage và totalPage > 1 mới hiển thị nút prev -->
            <?php if ($pagination['currentPage'] < $pagination['totalPage'] && $pagination['totalPage'] > 1) {?>
                <li><a href="/<?=$pagination['link']?>?page=<?=($pagination['currentPage'] + 1)?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                <?php }?>
            </ul>
        </nav>
