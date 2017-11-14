
<?php foreach ($comments as $comment) {?>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="/public/admin/assets/img/imagesUser/<?=$comment->IMAGE?>" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?=$comment->USERNAME?> <small><i><?=$comment->DATE_CREATED?></i></small></h4>
                                        <p><?=$comment->CONTENT?></p>
                                    </div>
                                </div>
<?php }?>

