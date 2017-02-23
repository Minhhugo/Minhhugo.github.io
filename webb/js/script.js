$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
$(function() {

    $('#login-form-link1').click(function(e) {
        $("#login-form1").delay(100).fadeIn(100);
        $("#register-form1").fadeOut(100);
        $('#register-form-link1').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link1').click(function(e) {
        $("#register-form1").delay(100).fadeIn(100);
        $("#login-form1").fadeOut(100);
        $('#login-form-link1').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
//
jQuery(document).ready(function($) {
    //selector đến menu cần làm việc
    var TopFixMenu = $("#menuNavbar");
    // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function(){
        // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>150){
            // Tiến hành show menu ra
            $("#menuNavbar").css('background', "#fff")
        }else{
            $("#menuNavbar").css('background', "rgba(255,255,255,0.46)")

        }}
    )
})