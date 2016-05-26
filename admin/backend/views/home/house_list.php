<!--
<?php
	use yii\widgets\LinkPager;
?>
-->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="scripts/jquery/jquery-1.7.1.js"></script>
<link href="style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="style/authority/common_style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/authority/commonAll.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/authority/jquery.fancybox-1.3.4.css" media="screen"></link>
<script type="text/javascript" src="scripts/artDialog/artDialog.js?skin=default"></script>
<title>信息管理系统</title>
<script type="text/javascript">
	$(document).ready(function(){
		/** 新增   **/
	    $("#addBtn").fancybox({
	    	'href'  : 'house_edit.html',
	    	'width' : 733,
	        'height' : 530,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() { 
	        	window.location.href = 'house_list.html';
	        }
	    });
		
	    /** 导入  **/
	    $("#importBtn").fancybox({
	    	'href'  : '/xngzf/archives/importFangyuan.action',
	    	'width' : 633,
	        'height' : 260,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() { 
	        	window.location.href = 'house_list.html';
	        }
	    });
		
	    /**编辑   **/
	    $("a.edit").fancybox({
	    	'width' : 733,
	        'height' : 530,
	        'type' : 'iframe',
	        'hideOnOverlayClick' : false,
	        'showCloseButton' : false,
	        'onClosed' : function() { 
	        	window.location.href = 'house_list.html';
	        }
	    });
	});
	/** 用户角色   **/
	var userRole = '';

	/** 模糊查询来电用户  **/
	function search(){
		$("#submitForm").attr("action", "house_list.html?page=" + 1).submit();
	}

	/** 新增   **/
	function add(){
		$("#submitForm").attr("action", "/xngzf/archives/luruFangyuan.action").submit();	
	}
	 
	/** Excel导出  **/
	function exportExcel(){
		if( confirm('您确定要导出吗？') ){
			var fyXqCode = $("#fyXq").val();
			var fyXqName = $('#fyXq option:selected').text();
//	 		alert(fyXqCode);
			if(fyXqCode=="" || fyXqCode==null){
				$("#fyXqName").val("");
			}else{
//	 			alert(fyXqCode);
				$("#fyXqName").val(fyXqName);
			}
			$("#submitForm").attr("action", "/xngzf/archives/exportExcelFangyuan.action").submit();	
		}
	}
	
	/** 删除 **/
	function del(fyID){
		// 非空判断
		if(fyID == '') return;
		if(confirm("您确定要删除吗？")){
			$("#submitForm").attr("action", "/xngzf/archives/delFangyuan.action?fyID=" + fyID).submit();			
		}
	}
	
	/** 批量删除 **/
	function batchDel(){
		if($("input[name='IDCheck']:checked").size()<=0){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'至少选择一条', ok:true,});
			return;
		}
		// 1）取出用户选中的checkbox放入字符串传给后台,form提交
		var allIDCheck = "";
		$("input[name='IDCheck']:checked").each(function(index, domEle){
			bjText = $(domEle).parent("td").parent("tr").last().children("td").last().prev().text();
// 			alert(bjText);
			// 用户选择的checkbox, 过滤掉“已审核”的，记住哦
			if($.trim(bjText)=="已审核"){
// 				$(domEle).removeAttr("checked");
				$(domEle).parent("td").parent("tr").css({color:"red"});
				$("#resultInfo").html("已审核的是不允许您删除的，请联系管理员删除！！！");
// 				return;
			}else{
				allIDCheck += $(domEle).val() + ",";
			}
		});
		// 截掉最后一个","
		if(allIDCheck.length>0) {
			allIDCheck = allIDCheck.substring(0, allIDCheck.length-1);
			// 赋给隐藏域
			$("#allIDCheck").val(allIDCheck);
			if(confirm("您确定要批量删除这些记录吗？")){
				// 提交form
				$("#submitForm").attr("action", "/xngzf/archives/batchDelFangyuan.action").submit();
			}
		}
	}

	/** 普通跳转 **/
	function jumpNormalPage(page){
		$("#submitForm").attr("action", "house_list.html?page=" + page).submit();
	}
	
	/** 输入页跳转 **/
	function jumpInputPage(totalPage){
		// 如果“跳转页数”不为空
		if($("#jumpNumTxt").val() != ''){
			var pageNum = parseInt($("#jumpNumTxt").val());
			// 如果跳转页数在不合理范围内，则置为1
			if(pageNum<1 | pageNum>totalPage){
				art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
				pageNum = 1;
			}
			$("#submitForm").attr("action", "house_list.html?page=" + pageNum).submit();
		}else{
			// “跳转页数”为空
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
			$("#submitForm").attr("action", "house_list.html?page=" + 1).submit();
		}
	}
</script>
<style>
	.alt td{ background:black !important;}
</style>
</head>
<body>
	<form id="submitForm" name="submitForm" action="" method="post">
		<input type="hidden" name="allIDCheck" value="" id="allIDCheck"/>
		<input type="hidden" name="fangyuanEntity.fyXqName" value="" id="fyXqName"/>
		<div id="container">
			<div class="ui_content">
				<div class="ui_text_indent">
					<div id="box_border">
						<!--
						<div id="box_top">搜索</div>
						<div id="box_center">
							小区
							<select name="fangyuanEntity.fyXqCode" id="fyXq" class="ui_select01" onchange="getFyDhListByFyXqCode();">
                                <option value=""
                                >--请选择--</option>
                                <option value="6">瑞景河畔</option>
                                <option value="77">蔚蓝小区</option>
                                <option value="83">和盛园小区</option>
                            </select>

							栋号
							<select name="fangyuanEntity.fyDhCode" id="fyDh" class="ui_select01">
                                <option value="">--请选择--</option>
                            </select>
							户型
							<select name="fangyuanEntity.fyHxCode" id="fyHx" class="ui_select01">
                                <option value="">--请选择--</option>
                                <option value="76">一室一厅一卫</option>
                                <option value="10">两室一厅一卫</option>
                                <option value="14">三室一厅一卫</option>
                                <option value="71">三室两厅一卫</option>
                            </select>
							状态
							<select name="fangyuanEntity.fyStatus" id="fyStatus" class="ui_select01">
                                <option value="">--请选择--</option>
                                <option value="26">在建</option>
                                <option value="25">建成待租</option>
                                <option value="13">已配租</option>
                                <option value="12">已租赁</option>
                                <option value="24">腾退待租</option>
                                <option value="23">欠费</option>
                                <option value="27">其他</option>
                            </select>

							座落&nbsp;&nbsp;<input type="text" id="fyZldz" name="fangyuanEntity.fyZldz" class="ui_input_txt02" />
						</div>
						<div id="box_bottom">
							<input type="button" value="查询" class="ui_input_btn01" onclick="search();" /> 
							<input type="button" value="新增" class="ui_input_btn01" id="addBtn" /> 
							<input type="button" value="删除" class="ui_input_btn01" onclick="batchDel();" /> 
							<input type="button" value="导入" class="ui_input_btn01" id="importBtn" />
							<input type="button" value="导出" class="ui_input_btn01" onclick="exportExcel();" />
						</div>
						-->
					</div>
				</div>
			</div>
			<div class="ui_content">
				<div class="ui_tb">
					<table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
						<tr>
							<th width="30"></th>
							<th>编号</th>
							<th>位置</th>
							<th>房源类型</th>
							<th>房源面积</th>
							<th>户型</th>
							<th>周围建筑</th>
							<th>交通状况</th>
							<th>房屋图片</th>
							<th>押金</th>
							<th>房源审核</th>
						</tr>
						<?php 
							foreach($posts as $key=>$val){
						?>
							<tr>
								<td><input type="checkbox" name="check[]" value="<?php echo $val['h_id'];?>"/></td>
								<td><?php echo $val['h_id'];?></td>
								<td><?php echo $val['h_address'];?></td>
								<td><?php echo $val['h_type'];?></td>
								<td><?php echo $val['h_area'];?></td>
								<td><?php echo $val['h_profile'];?></td>
								<td><?php echo $val['h_architecture'];?></td>
								<td><?php echo $val['h_traffic'];?></td>
								<td><img src="/moonth9/xiangmu/yii/backend/web/uploads/<?php echo $val['h_picture'];?>" width="100" height="100"/></td>
								<td><?php echo $val['h_deposit'];?></td>
								<td>
							
								
									<a href="javascript:void(0)" id="<?php echo $val['h_id'];?>" onclick="upd(this)">通过</a> ||
									<a href="javascript:void(0)" id="<?php echo $val['h_id'];?>" onclick="upd1(this)">不通过</a>
									
								</td>
							</tr>
						<?php
						}
						?>
							
					</table>
					<center>
					<br>
				
					<br>
					<input type="checkbox" value="" onclick="qx(this)">全选/全不选
					<input type="checkbox" value="" onclick="fx(this)">反选
					<input type="button" value="批量删除" onclick="ps()">
					<input type="button" value="批量通过" onclick="pt()">
					<?php 
						echo $str;
					?>
					</center>
				</div>
				<div class="ui_tb_h30">
					<div class="ui_flt" style="height: 30px; line-height: 30px;">
					
					
					</div>
					
					<div class="ui_frt">


						<!--    如果是第一页，则只显示下一页、尾页 
						
							<input type="button" value="首页" class="ui_input_btn01" />
							<input type="button" value="上一页" class="ui_input_btn01" />
							<input type="button" value="下一页" class="ui_input_btn01"
								onclick="jumpNormalPage(2);" />
							<input type="button" value="尾页" class="ui_input_btn01"
								onclick="jumpNormalPage(9);" />
						-->
						
						
						<!--     如果是最后一页，则只显示首页、上一页
						
						转到第<input type="text" id="jumpNumTxt" class="ui_input_txt01" />页
							 <input type="button" class="ui_input_btn01" value="跳转" onclick="jumpInputPage(9);" />
							 -->
					</div> 
					
				</div>
			</div>
		</div>
	</form>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
<script src="scripts/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
//全选
  function qx(obj)
    {
       var check=document.getElementsByName('check[]').valueOf();
		//alert(check)
		for(var i=0;i<check.length;i++){
				if(obj.checked){
					check[i].checked=true;
				}else{
					check[i].checked=false;
				}
		}      
    }
//反选
  function fx(obj)
    {
       var check=document.getElementsByName('check[]').valueOf();
		//alert(check)
		for(var i=0;i<check.length;i++){
				if(obj.checked){
					check[i].checked=false;
				}else{
					check[i].checked=true;
				}
		}
        
    }
	//批量删除
	function ps(){
		var check=document.getElementsByName('check[]').valueOf();
        var str="";
        for(var i=0;i<check.length;i++)
        {
            if(check[i].checked)
            {
                str+=','+check[i].value;
            }
        }
        n_str=str.substr(1);
		//alert(str)
		var data={"str":n_str};
        var url="index.php?r=home/del2";
        $.get(url,data,function(msg){
            //<p></p>alert(msg)
            if(msg==1)
            {
                for(var j=check.length-1;j>=0;j--)
                {
                    if(check[j].checked)
                    {
						
                        check[j].parentNode.parentNode.parentNode.removeChild(check[j].parentNode.parentNode)
                        //window.location.reload();
                    }
               }
			   alert("批量删除成功");
            }else
            {
                alert("删除失败");
            }
        })
	}
//批量通过
	function pt(){
		var check=document.getElementsByName('check[]').valueOf();
        var str="";
        for(var i=0;i<check.length;i++)
        {
            if(check[i].checked)
            {
                str+=','+check[i].value;
            }
        }
        n_str=str.substr(1);
		//alert(str)
		var data={"str":n_str};
        var url="index.php?r=home/pass";
        $.get(url,data,function(msg){
            //<p></p>alert(msg)
            if(msg==1)
            {
                for(var j=check.length-1;j>=0;j--)
                {
                    if(check[j].checked)
                    {
						
                        check[j].parentNode.parentNode.parentNode.removeChild(check[j].parentNode.parentNode)
						//window.location.reload();
                        
                    }
               }
			   alert("批量审核通过");
            }else
            {
                alert("删除失败");
            }
        })
	}




















//审核通过
function upd(obj){
	var id=obj.id;
	$.ajax({
	   type: "GET",
	   url: "index.php?r=home/upd",
	   data: "id="+id,
	   success: function(msg){
		   //alert(msg)
		  if(msg==1){
			alert("审核通过");
			obj.parentNode.parentNode.parentNode.removeChild(obj.parentNode.parentNode);
			//window.location.reload();
			//location.href="index.php?home/shuaxin";
		  }
		  else{
			alert("审核失败");
			//location.href="index.php?home/shuaxin";
		  }
	   }
	}); 
}
//审核不通过
function upd1(obj){
	var id=obj.id;
	$.ajax({
	   type: "GET",
	   url: "index.php?r=home/upd1",
	   data: "id="+id,
	   success: function(msg){
		  // alert(msg)
		 if(msg==2){
			 
			alert("审核不通过");
			obj.parentNode.parentNode.parentNode.removeChild(obj.parentNode.parentNode);
			//window.location.reload();
		  }
		  else{
			alert("审核失败");
			
		  }
	   }
	}); 
}

</script>
