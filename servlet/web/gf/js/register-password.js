var dot = $('.progress a');
var progress = $('.progress-bar');
var form = $('.aa');
var length = dot.length;
var pre = $('.pre');
var next = $('.next');
var btns=$('#btn');
var preview1=$('#preview1');
var spanbt=$('.spanbt');
var n = 1;
var isSubmit = false;
for (var i = 1; i < length + 1; i++) {
    dot.index = i;
}

$().ready(function () {
    $.extend($.validator.messages, {
        required: "必填",
        email:"请输入正确的email地址",
        Mobile_phone:"请输入手机号"
    });
    // addBrand();
    // $('#companyForm').validate({
    //     debug: true,
    //     focusInvalid: false,
    //     onkeyup: false,
    //     submitHandler: function (form) {
    //         isSubmit = true;
    //         goNext();
    //     },
    //     errorPlacement: function(error, element) {
    //         error.insertAfter(element);
    //     }

    // });
    // $('#qualificationForm').validate({
    //     debug: true,
    //     focusInvalid: false,
    //     onkeyup: false,
    //     submitHandler: function (form) {
    //         isSubmit = true;
    //         goNext();
    //     },
    //     errorPlacement: function(error, element) {
    //         error.insertAfter(element);
    //     }
    // });
    // $('#brandForm').validate({
    //     debug: true,
    //     focusInvalid: false,
    //     onkeyup: false,
    //     submitHandler: function (form) {
    //         isSubmit = true;
    //         goNext();
    //     }
    // });


    pre.click(function () {
        if (n < 2) return false;
        n--;
        progress.css('width', n * 25 - 12.5 + '%');
        getActive();
    });
});
    function goNext(){
        if (n > 4) return false;
        n++;
        if (n == 3 || n==4) {
            if (isSubmit) {
                progress.css('width', n == 5 ? (n - 1) * 25 + '%' : n * 25 - 12.5 + '%');
                isSubmit = false;
                getActive();
            } else {
                n--;
            }
        } else {
            progress.css('width', n == 5 ? (n - 1) * 25 + '%' : n * 25 - 12.5 + '%');
            getActive();
        }
    }

    var addNum = 1;


    function getActive () {
        dot.removeClass('active');
        form.removeClass('show');
        for (var j = 0; j < n; j++) {
            dot.eq(j).addClass('active');

        }
        form.eq(n - 1).addClass('show');
    }

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
    // 点击添加品牌
    function addBrand () {
        var clone = '<div id="brandForm_' + addNum + '" style="margin-top:30px;padding-bottom:20px;border-bottom:1px dashed #979797"><div  class="form-group">'
            + '<label class="col-sm-3 control-label">品牌名称</label>'
            + '<div  class="col-sm-8">'
            + '<input type="text" name="brandName_'+addNum+'" minlength="2" class="form-control" aria-required="true" required>'
            + '</div>'
            + '</div>'
            + '<div  class="form-group">'
            + '<label class="col-sm-3 control-label">上传品牌图片</label>'
            + '<div  class="col-sm-8">'
            + '<a href="" class="a-upload">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<br>'
            + '<input type="file" id="exampleInputFile4" class="file_upload4" required>'
            + '</a>'
            + '</div>'
            + '<div class="yy3">'
            + '<label class="col-sm-3 control-label"></label>'
            + '<img id="preview4_' + addNum + '" class="preview" name="image" style=" margin-left:15px; margin-top: 10px; width:100px; height:80px; " src="" alt="">'
            + '</div>'
            + '</div>'
            + '<div  class="form-group">'
            + '<label class="col-sm-3 control-label">品牌证件图片</label>'
            + '<div  class="col-sm-8">'
            + '<a href="" class="a-upload">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<br>'
            + '<input type="file" id="exampleInputFile5" class="file_upload5" required>'
            + '</a>'
            + '</div>'
            + '<div class="yy4">'
            + '<label class="col-sm-3 control-label"></label>'
            + '<img id="preview5_' + addNum + '" class="preview" name="image" style=" margin-left:15px; margin-top: 10px; width:100px; height:80px;" src="" alt="">'
            + '<!-- <img id="" src="" alt=""> -->'
            + '</div>'
            + '</div>'
            + '<div  class="form-group">'
            + '<label class="col-sm-3 control-label">有效时间</label>'
            + '<div  class="col-sm-8">'
            + '<input type="text" name="time1'+addNum+'" class="form-control" onclick="WdatePicker()" required>'
            + '</div>'
            + '</div>'
            + '<div  class="form-group">'
            + '<label class="col-sm-3 control-label">有效时间</label>'
            + '<div  class="col-sm-8">'
            + '<input type="text" name="time2'+addNum+'" class="form-control" onclick="WdatePicker()" required>'
            + '</div>'
            + '</div>'
            + '<div class="">'
            + '<label class="col-sm-3 control-label we">证件图片类型</label>'
            + '<label>'
            + '<input type="checkbox" class="brandRadio radioA radioG">商标注册受理通知书'
            + '</label>'
            + '<label>'
            + '<input type="checkbox" class="brandRadio radioB radioH">商标注册证'
            + '</label>'
            + '<br>'
            + '<label>'
            + '<input type="checkbox" class="brandRadio radioC radioF">商标续展注册证明'
            + '</label>'
            + '<label>'
            + '<input type="checkbox" class="brandRadio radioC radioD">商标转让证明'
            + '</label>'
            + '<label>'
            + '<input type="checkbox" class="brandRadio radioC radioE">商标授权证明'
            + '</label>'
            + '<div class="trademark a">'
            + '<a href="" class="a-upload uplogd_right">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<input type="file" class="file_upload6" required>'
            + '</a>'
            + '<div class="yy5">'
            + '<img id="preview6_' + addNum + '" class="preview" name="image" style=" margin-left:120px; width:100px; height:80px; border:none;" src="" alt="">'
            + '</div>'
            + '</div>'
            + '<div class="trademark b">'
            + '<a href="" class="a-upload uplogd_right">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<input type="file" class="file_upload7" required>'
            + '</a>'
            + '<div class="yy6">'
            + '<img id="preview7_' + addNum + '" class="preview" name="image" style=" margin-left:120px; width:100px; height:80px; border:none;" src="" alt="">'
            + '</div>'
            + '</div>'
            + '<div class="trademark c">'
            + '<a href="" class="a-upload uplogd_right">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<input type="file" class="file_upload8" required>'
            + '</a>'
            + '<div class="yy7">'
            + '<img id="preview8_' + addNum + '" class="preview" name="image" style=" margin-left:120px; width:100px; height:80px; border:none;" src="" alt="">'
            + '</div>'
            + '</div>'
            + '<div class="trademark d">'
            + '<a href="" class="a-upload uplogd_right">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<input type="file" class="file_upload9" required>'
            + '</a>'
            + '<div class="yy8">'
            + '<img id="preview9_' + addNum + '" class="preview" name="image" style=" margin-left:120px;  width:100px; height:80px; border:none;" src="" alt="">'
            + '</div>'
            + '</div>'
            + '<div class="trademark e">'
            + '<a href="" class="a-upload uplogd_right">'
            + '<span>点击上传 （png，jpg）</span>'
            + '<input type="file" class="file_upload10" required>'
            + '</a>'
            + '<div class="yy9">'
            + '<img id="preview10_' + addNum + '" class="preview" name="image" style=" margin-left:120px; width:100px; height:80px; border:none;" src="" alt="">'
            + '</div>'
            + '</div>'
            + '</div></div>';
        $('#addBrand').before(clone);
        var $form = $('#brandForm_' + addNum);

        $form.find('.brandRadio').click(function () {
            if ($form.find('.radioA').prop('checked')) {
                $form.find('.radioA').siblings().prop('disabled', true).prop('checked', false);
            } else {
                $form.find('.radioA').siblings().prop('disabled', false);
            }
            var checkedC = $form.find('input[class=radioC]:checked').length;
            if (checkedC > 0) {
                $form.find('.radioB').prop('checked', true);

            }
            if ($form.find('.radioB').prop('checked')) {
                $form.find('.radioA').prop('disabled', true).prop('checked', false);
            } else {
                $form.find('.radioA').prop('disabled', false);
            }
        });
        $form.find('.radioG').click(function () {
            $form.find('.a').slideToggle();
        });
        $form.find('.radioH').click(function () {
            $form.find('.b').slideToggle();
        });
        $form.find('.radioF').click(function () {
            $form.find('.c').slideToggle();
        });
        $form.find('.radioD').click(function () {
            $form.find('.d').slideToggle();
        });
        $form.find('.radioE').click(function () {
            $form.find('.e').slideToggle();
        });
        for (var i = 4; i < 11; i++) {
            getBrandFile(addNum, i);
        }

        addNum++;

    }

    // $('#add').click(function () {
    //     addBrand();
    // });
    function getBrandFile (aNum, num) {
        var $form = $('#brandForm_' + aNum);
        $form.find('.file_upload' + num).change(function () {
            var $file = $(this);
            var fileObj = $file[0];
            console.log(fileObj);
            var windowURL = window.URL || window.webkitURL;
            var dataURL;
            var $img = $('#preview' + num + '_' + aNum);
            if (fileObj && fileObj.files && fileObj.files[0]) {
                dataURL = windowURL.createObjectURL(fileObj.files[0]);
                $img.attr('src', dataURL);
                $img.show();
            }
        });
    }
    getFile(1);
    getFile(2);
    getFile(3);
    function getFile (num) {
        $('.file_upload' + num).change(function () {
            var $file = $(this);
            var fileObj = $file[0];
            console.log(fileObj);
            var windowURL = window.URL || window.webkitURL;
            var dataURL;
            var $img = $('#preview' + num);
            if (fileObj && fileObj.files && fileObj.files[0]) {
                dataURL = windowURL.createObjectURL(fileObj.files[0]);
                $img.attr('src', dataURL);
                $img.show();
            }
        });
    }

// $(".file_upload5").change(function(){
// 	var $file=$(this);
// 	var fileObj=$file[0];
// 	var windowURL=window.URL||window.webkitURL;
// 	var dataURL;
// 	var $img=$("#preview2");
// 	if (fileObj && fileObj.files&&fileObj.files[0]) {
// 		dataURL=windowURL.createObjectURL(fileObj.files[0]);
// 		$img.attr("src",dataURL);
// 	}else{
// 		dataURL=$file.val();
// 		var imgObj=document.getElementById("preview4");
// 		imgObj.style.filter="progid:DXImageTransform.Microsoft.AlphaIageLoader(sizingMethod=scale)";
// 		imgObj.filters.item("DXImageTransform.Microsoft.AlphaIageLoader").src=dataURL;
// 	}

// });

// $("#file_upload").click(function(){
// 		$("#preview").style.display="block";
// 	});

// if(n==1){
// 	button

// }else if(n==2){
// 	button.type(submit);
// }

// $.validator.setDefaults({
// 	dabug:true,
// })
// var validate=$("#myforms").validate({
// 	debug:true,
// 	focusInvalid:false,
// 	onkeyup:false,
// 	submitHandler:function(form){
// 		$('#myforms')[0].ok='ok'
// 	},
// 	rules:{
// 		Resource_images:{
// 			required:true
// 		}
// 	},
// 	messages:{
// 		Resource_images:{
// 			required:"bitian"
// 		}
// 	}
// var validate=$("#myform").validate({
// 	debug:true,
// 	focusInvalid:false,
// 	onkeyup:false,
// 	submitHandler:function(form){
// 		$('#myform')[0].ok='ok'
// 	},
// 	rules:{
// 		// myname:{
// 		// 	required:true
// 		// },
// 		// Resource_images:{
// 		// 	required:true
// 		// }
// 		// email:{
// 		// 	required:true,
// 		// 	email:true
// 		// },
// 		// SMS_verification:{
// 		// 	required:true
// 		// },
// 		// teb:{
// 		// 	required:true
// 		// },
// 		// fax:{
// 		// 	required:true
// 		// },
// 		// Company_zip_code:{
// 		// 	required:true
// 		// },
// 		// detailed_address:{
// 		// 	required:true
// 		// },
// 		// Legal_person_phone:{
// 		// 	required:true
// 		// },
// 		// Corporate_email:{
// 		// 	required:true
// 		// },
// 		// Legal_address:{
// 		// 	required:true
// 		// },
// 		// contact:{
// 		// 	required:true
// 		// },
// 		// Contact_email:{
// 		// 	required:true
// 		// },
// 		// Contact_phone_number:{
// 		// 	required:true
// 		// },
// 		// To_upload_pictures:{
// 		// 	required:true
// 		// }
//
// 	},
// 	messages:{
// 		// myname:{
// 		// 	required:"必填"
// 		// },
// 		// Resource_images:{
// 		// 	required:"bitian"
// 		// }
// 		// email:{
// 		// 	required:"必填",
// 		// 	email:"E-Mail格式不正确"
// 		// },
// 		// SMS_verification:{
// 		// 	required:"请输入验证码",
// 		// },
// 		// teb:{
// 		// 	required:"请输入手机号"
// 		// },
// 		// fax:{
// 		// 	required:"请输入传真号"
// 		// },
// 		// Company_zip_code:{
// 		// 	required:"请输入公司传真"
// 		// },
// 		// detailed_address:{
// 		// 	required:"请输入详细地址"
// 		// },
// 		// Legal_person_phone:{
// 		// 	required:"请输入法人电话"
// 		// },
// 		// Corporate_email:{
// 		// 	required:"请输入法人邮箱"
// 		// },
// 		// Legal_address:{
// 		// 	required:"请输入法人地址"
// 		// },
// 		// contact:{
// 		// 	required:"请输入联系人"
// 		// },
// 		// Contact_email:{
// 		// 	required:"请输入联系人邮箱"
// 		// },
// 		// Contact_phone_number:{
// 		// 	required:"请输入联系电话"
// 		// },
// 		// To_upload_pictures:{
// 		// 	required:"请上传图片"
// 		// },
//
// 	}
// });

// var validate=$("#commentForm").validate({
// 	debug:true,
// 	focusInvalid:false,
// 	onkeyup:false,
// 	submitHandler:function(form){
// 		$('#commentForm')[0].ok='ok'
// 	},
// 	rules:{

// 	},
// 	messages:{

// 	}
// })
// 商标

// try{
// 	// 链接去掉虚框
// 	$("a").bind("focus",function() {
// 		if(this.blur) {this.blur()};
// 	});
// 	//所有下拉框使用select2
// 	$("select").select2();
// }catch(e){
// 	// blank
// }
// // 所有图片未找到则显示默认图片
// $('img').error(function () {
// 		this.src = "https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=2903759794,4092815975&fm=173&s=B2B3EA21C622651F03ACDCB10300A010&w=640&h=853&img.JPEG";
// });


