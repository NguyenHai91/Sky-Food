<?php $i = 1;?>
<?php foreach ($users['all'] as $user): ?>
	<tr>
		<td><?=$i++?></td>
		<td class="username"><a href=""> <?=$user->USERNAME?></a></td>
		<td class="img-post">
			<a href=""><img  src="/public/admin/assets/img/imagesUser/<?=$user->IMAGE?>" /></a>

		</td>
		<td> <?=$user->FULL_NAME?> </td>
		<td> <?=$user->EMAIL?> </td>
		<td> <?=$user->ADDRESS?> </td>
		<td> <?=$user->PHONE?> </td>
		<td> <?=$user->ROLE?> </td>
		<td class="control">
			<div class="form-group">
				<div class="item-col">
					<a href="/admin/user/edit?idUser=<?=$user->USERNAME?>" class="btn btn-success" title="Sửa">
						<i class="pe-7s-note"></i>
					</a>
				</div>
				<div class="item-col">
					<a data-toggle="modal" data-target="#delUser<?=$user->USERNAME?>" href="" class="btn btn-danger" title="Xoá">
						<i class="pe-7s-trash"></i>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</td>
	</tr>

	<?php view_include('admin.partials.modal', ['id_model' => 'delUser' . $user->USERNAME, 'title' => 'Xóa người dùng', 'content' => 'Bạn có chắc chắn muốn xóa không?', 'bt' => 'Xóa', 'link' => '/admin/user / del ? username = ' . $user->USERNAME]);?>

<?php endforeach;?>
