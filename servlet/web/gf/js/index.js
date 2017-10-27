$(document).ready(function() {
	//获取短信验证码
    var validCode = true;
    $('.gain').click(function () {
        var time = 120;
        var code = $(this);
        if (validCode) {
            validCode = false;
            code.addClass('msgs1');
            var t = setInterval(function () {
                time--;
                code.html(time + 's后重新发送');
                if (time == 0) {
                    clearInterval(t);
                    code.html('重新获取');
                    validCode = true;
                    code.removeClass('msgs1');
                }
            }, 1000);
        }
    });

});