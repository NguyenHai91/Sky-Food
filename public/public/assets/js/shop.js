$('#comment').on('keydown',function (e) {
    if(e.which==13){
        
        $('#btnSend').click();
    }
}); 
function saveAjax(link,id,check){
	
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           
        },
        success: function(data) {
            $('#save').html(data);
            if(check==0){
             $('#displaySaved').html('<div class="ribbon bookmark" ><p><span>Saved</span></p></div>');
            }
           
           else{
              $('#displaySaved').html('');
           }
           // alert(check);
          // $('#displaySaved').html(check);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}

function loadMyComments(id){
     var value = $('#comment').val();
     //alert(id)
      $.ajax({
        url: '/shop/ajaxComment',
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           avalue:value
        },
        success: function(data) {
            $('#ajaxComment').html(data);
             $('#comment').val('');
            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}
function rate(link,id){
  
    
    var value=$(".rating").rate("getValue");
   $.ajax({
        url: link,
        type: 'POST',
        cache: false,
        data: {
           aid:id,
           avalue:value
        },
        success: function(data) {
            $('.score p').text(data);
            
            //alert($data);
        },
        error: function(err) {
            alert('Có lỗi xảy ra' + err);
        }
    });
}
function rateButton(rate){
  $(".rating").rate("setValue",rate);
}



