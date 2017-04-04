$(document).ready(function () {
	/*//左侧目录菜单展开
	$("#nav ul").hide(); 
	//控制一级子菜单 
	$("#nav li span:first-child").click(function () { 
		$(this).siblings().toggle(); 
	}); 
	//控制二级子菜单 
	$("#nav li ul span:first-child").click(function () { 
		$(this).siblings().find("ul").toggle(); 
	}); 
	//控制三级子菜单 
	$("#nav li ul li span:first-child").click(function () { 
		$(this).siblings().find("ul").toggle(); 
	});*/ 

	//优先级选项
	var x = document.getElementById("priority");
    for (var i = 0; i <= 15; i++) {
      	var option = document.createElement("option");
      	option.text = i;
      	x.add(option);
    }

    //富文本编辑器
    var editor = UE.getEditor('container');
});