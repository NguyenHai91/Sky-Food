function changeDiscount(key){
	 var val = $('#discount'+key).val();
    //alert(val);
$.ajax({
    url: '/admin/shop/ajaxDiscount',
    type: 'POST',
    cache: false,
    data: {
        aValue: val,
        aKey: key,
// aactive: active
},
success: function(data) {
    $('.change-discount'+key).html(data);
//alert($data);
},
error: function() {
    alert('Có lỗi xảy ra');
}
});
}
