$('#input').on('keydown',function (e) {
    if(e.which==13){
      $('#searchId').click();
  }
});

function search(link){
    $(".se-pre-con").fadeIn();;
    var key = $('#input').val();
    var type = $('#type').val();
    var sortBy = $('#sortBy').val();
    $.ajax({
        url: link,
        type: 'GET',
        cache: false,
        data: {
            ajaxKey: key,
            type: type,
            sortBy: sortBy
    },
    success: function(data) {
        $('.searchShopTable').html(data);
        $(".se-pre-con").fadeOut();;
    },
    error: function(err) {
        // alert('Có lỗi xảy ra' + err);
    }
});
}
