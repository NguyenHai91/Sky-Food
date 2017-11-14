<?php $i = 0;?>
<?php foreach ($shops as $shop): ?>
    <tr>
        <td><?=++$i?></td>
        <td class="name-place"><a href="">'<?=$shop->SHOP_NAME?></a></td>
        <td class="img-post">
          <a href=""><img  src="/public/admin/assets/img/img-shop/<?=$shop->VIEW?>" /></a>
      </td>
      <td><?=$shop->TYPE_NAME?></td>
      <td class="change-discount' . $shop->SHOP_ID . '"><?=$shop->DISCOUNT?></td>
      <td class="percent-input">
          <div class="form-group">
              <div class="item-col">
                  <input type="text" class="form-control" id="discount" value="<?=$shop->DISCOUNT?>">
              </div>
              <div class="item-col">
                  <button type="submit" class="btn btn-success" onclick="changeDiscount(<?=$shop->SHOP_ID?>)">Nhập</button>
              </div>
              <div class="clearfix"></div>
          </div>
      </td>
      <td>
       <?php $checked = '';?>
       <?php if (1 == $shop->STATUS) {$checked = 'checked';}?>
       <div class="checked-box <?=$checked;?>">
        <i class="fa fa-check-square-o" aria-hidden="true"></i>
    </div>
</td>
<td>
 <div class="form-group">
     <div class="item-col">
         <a href="/admin/shop/comment?id=' . $shop->SHOP_ID . '" class="btn btn-warning" title="Xem">
             <i class="pe-7s-look"></i>
         </a>
     </div>
 </div>
</td>
<td class="control">
 <div class="form-group">
     <div class="item-col">
         <a href="/admin/shop/edit?id=' . $shop->SHOP_ID . '" class="btn btn-success" title="Sửa">
             <i class="pe-7s-note"></i>
         </a>
     </div>
     <div class="item-col">
         <a data-toggle="modal" data-target="#delpost' . $shop->SHOP_ID . '"  href="" class="btn btn-danger" title="Xoá">
             <i class="pe-7s-trash"></i>
         </a>
     </div>
     <div class="clearfix"></div>
 </div>
</td>
</tr>
  <?php view_include('admin.partials.modal', ['id_model' => 'delpost' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/shop/del?id=' . $value->SHOP_ID]);?>
<?php endforeach?>

