


//function login_toggle() {
//	$(".top_login").slideToggle("slow");
//}

$(function(){
    /***下拉菜单**/
    $(".drop").hover(function(){
        $(this).children("a").css("background-color","#f1dda0");

        $($(this).children(".drop_down")).fadeIn("fast");
    },function(){
        $($(this).children(".drop_down")).fadeOut("fast");
        $(this).children("a").css("background-color","#ebb922");

    });


    $("#search_submit").click(function(){
        var key = $("#key").val();
        if(key == ""){
            shake($("#key"));
        }else{
            $("#search_form").submit();
        }
    });

    if($("#middle_img")){

        $("#middle_img img").click(function(){
            if($(".maskDiv").size() != 0){
                var mask =$(".maskDiv");
                $(mask).fadeIn("slow");
            }else{
                var mask = $("<div>");
                $(mask).addClass("maskDiv");
                var img = $("<img>");
                $(img).attr("src", $(this).attr("src"));
                $(img).appendTo(mask);
                $(mask).appendTo("body");
                $(mask).fadeIn("slow");
                $(mask).click(function(){
                    $(this).fadeOut("slow");
                });

            }

        });
    }



});

//function loginInit () {
//	$("#login_submit").click(function(){
//		$("login_erro").empty();
//		var user_name = $("#user_name").val();
//		var user_pswd = $("#user_pswd").val();
//		if(user_name == ""){
//			shake($("#user_name"));
//			return;
//		}
//
//		if(user_pswd == ""){
//			shake($("#user_pswd"));
//			return;
//		}
//
//		$(this).text("登录中...");
//
//		$.ajax({
//			url:web_url+"/index.php/index/login",
//			data:{"user_name":user_name, "user_pswd":user_pswd},
//			dataType:"json",
//			success:function(data){
//				if(data.json.state == 0){
//					shake($("#login_error"));
//					$("#login_error").html(data.json.msg);
//				}else{
//					location.reload();
//				}
//			},
//			async:false
//		});
//		$(this).text("登录");
//
//	});
//}

/**
 * 让元素抖动起来
 * @param  {[type]} ele
 * @return {[type]}
 */
function shake(ele) {
    $(ele).addClass("shake");
    setTimeout(function() {
        $(ele).removeClass("shake");
    }, 1000);
}




function feedBackInit(){
    $("#feed_submit").click(function(){
        var text = $("#feedback_text").val();
        var title = $("#feedback_title").val();
        if(title == ""){
            shake($("#feedback_title"));
            $("#feedback_text").attr("placeholder","写点什么吧!");
            return;
        }
        if(text == ""){
            shake($("#feedback_text"));
            $("#feedback_text").attr("placeholder","写点什么吧!");
        }else{
            var ui = $("#friendly .star_on").length;
            var info = $("#effective .star_on").length;
            var fun  = $("#helpful .star_on").length;
            var content = text;
            $.post(web_url+"/index.php/index/feedback",{"ui":ui,"info":info,"fun":fun,"content":content,"title":title},function(data){
                if(data.json.state == 0){
                    alert(data.json.msg);
                }else{
                    alert("反馈成功!");
                }
            }, "json");
        }
    });
}