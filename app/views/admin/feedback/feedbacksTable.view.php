<?php if (count($feedbacks) == 0): ?>
    <h4>Không có kết quả nào</h4>
    <?php else: ?>
        <?php $index = 0;?>
        <?php foreach ($feedbacks as $feedback): ?>
            <tr>
                <td><?=++$index;?></td>
                <td><?=$feedback->PHONE;?></td>
                <td><?=$feedback->EMAIL;?></td>
                <td><?=$feedback->PHONE;?></td>
                <td><?=$feedback->CONTENT;?></td>
                <td class="control">
                    <div class="form-group">
                        <div class="item-col">
                            <a data-toggle="modal" data-target="#replyFeedback<?=$feedback->FEEDBACK_ID?>" href="" class="btn btn-primary" title="Trả lời">
                                <i class="pe-7s-back"></i>
                            </a>
                        </div>
                        <div class="item-col">
                            <a data-toggle="modal" data-target="#deleteFeedback<?=$feedback->FEEDBACK_ID?>" href="" class="btn btn-danger" title="Xoá">
                                <i class="pe-7s-trash"></i>
                            </a>
                        </div>
                        <!-- Model Reply Feedback -->
                        <div class="modal fade" id="replyFeedback<?=$feedback->FEEDBACK_ID?>" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <form action="/admin/feedback/reply" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">GỬI PHẢN HỒI</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <div class="form-group">
                                                    <input type="hidden" name="emailTo" value="<?=$feedback->EMAIL;?>">
                                                    <input type="hidden" name="feedbackFromUser" value="<?=$feedback->CONTENT?>">
                                                    <textarea class="form-control" rows="5" id="" name="content"></textarea>
                                                </div>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" >GỬI</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php
$data = [
    'id_model' => 'deleteFeedback' . $feedback->FEEDBACK_ID,
    'title' => 'XÓA PHẢN HỒI',
    'content' => 'Bạn có chắc chắn muốn xóa không??',
    'bt' => 'Xóa',
    'link' => '/admin/feedback/delete?id=' . $feedback->FEEDBACK_ID,
];
?>
                            <?php view_include('admin.partials.modal', $data)?>
                            <div class="clearfix"></div>
                        </div>
                    </td>
                </tr>

            <?php endforeach;?>
        <?php endif?>
