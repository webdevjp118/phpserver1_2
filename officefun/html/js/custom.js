$(".js_modalOpen").click(function () {
    let targetId = $(this).data('target');
    $('#' + targetId).css({'display':'block'});
    setTimeout(() => {
        $('#' + targetId).addClass('open');
    }, 10);
});
$(".p-modal__closeBtn").click(function () {
    let targetId = $(this).closest('.p-modal').attr('id')
    $(this).closest('.p-modal').removeClass('open');
    setTimeout(() => {
        $('#' + targetId).css({'display':'none'});
    }, 500);
});

$( document ).ready(function() {
    $('#loader-wrapper').css({'opacity':'0'});
    setTimeout(() => {
        $('#loader-wrapper').css({'display':'none'});
    }, 1000);
});