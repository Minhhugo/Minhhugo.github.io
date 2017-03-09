

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

$(document).ready(function(){
    $("#login-ccc").click(function(){
        $(".login-iteam").toggle();
    });
});
