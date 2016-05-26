
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>Bootstrap表格插件 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							捷宜居后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->
<ul class="nav nav-list">
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 管理界面 </span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">房源管理</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=home/examine">
										<i class="icon-double-angle-right"></i>
										房源审核
									</a>
								</li>

								<li>
									<a href="index.php?r=home/list">
										<i class="icon-double-angle-right"></i>
										房源列表
									</a>
								</li>

							
									
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 留言管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=messagecheck/examine">
										<i class="icon-double-angle-right"></i>
										用户留言审核
									</a>
								</li>

								<li>
									<a href="index.php?r=messagecheck/yishen">
										<i class="icon-double-angle-right"></i>
										已审核留言
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=user/list">
										<i class="icon-double-angle-right"></i>
										用户列表
									</a>
								</li>

								<li>
									<a href="index.php?r=message/list">
										<i class="icon-double-angle-right"></i>
										留言列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 房东管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=landlord/landlord">
										<i class="icon-double-angle-right"></i>
										房东列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									广告管理
								</span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="index.php?r=advertisement/list">
										<i class="icon-double-angle-right"></i>
										广告列表
									</a>
								</li>

								<li>
									<a href="index.php?r=advertisement/add">
										<i class="icon-double-angle-right"></i>
										新增广告
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								新增广告
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<?php
use yii\widgets\ActiveForm;
$form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data'],
    'action'=>'index.php?r=advertisement/app',
    'method'=>'post',
])
?>
								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<tr>
					<td class="ui_text_rt">标题 :</td>
					<td class="ui_text_lt">
						<input type="text"  name="a_title" id="a_title" onblur="add_title()"/>
					<span id="s_title"></span>
					</td>
				</tr>
				<tr>
					<td class="ui_text_rt">上传图片 :</td>
					<td class="ui_text_lt">
						<?= $form->field($model, 'a_img')->fileInput() ?>
					</td>
				</tr>
				<tr>
					<td class="ui_text_rt">是否显示 :</td>
					<td class="ui_text_lt">
						<input type="radio"  name="a_show"  value="1" />是
						<input type="radio"  name="a_show"  value="2" />否
					</td>
				</tr>
				<tr>
					<td class="ui_text_rt">排序 :</td>
					<td class="ui_text_lt">
						<input type="text"  name="a_order" id="a_order" onblur="add_order()"/>
						<span id="s_order"></span>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="ui_text_lt">
						&nbsp;<input  type="submit" value="提交" />
						&nbsp;<input  type="reset" value="取消" />
					</td>
				</tr>
											</table>
											<center>
				
					
					</center>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->
								

		<!-- b<script>
               function delete_order(l_id){
                  confirm = confirm(' Are you sure?');
                    if(confirm){
                        $.ajax({
                            type:"GET",
                            url:'index.php?r=landlord/del',
                            data:'l_id='+l_id,
                            success:function(msg){
                                    $("#tr_"+l_id).remove();
                            }
                        });
                    }
                };
            </script>


                    <!--    如果是第一页，则只显示下一页、尾页 -->
		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
	<script src="scripts/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
function del(obj){
	var id=obj.id;
	$.ajax({
	   type: "GET",
	   url: "index.php?r=messagecheck/del",
	   data: "id="+id,
	   success: function(msg){
		  if(msg==1){
			alert("已删除");
			obj.parentNode.parentNode.parentNode.removeChild(obj.parentNode.parentNode);
			//window.location.reload();
			//location.href="index.php?home/shuaxin";
		  }
		  else{
			alert("删除失败");
			//location.href="index.php?home/shuaxin";
		  }
	   }
	}); 
}
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
        var url="index.php?r=messagecheck/del2";
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
            }else
            {
                alert("删除失败");
            }
        })
	}


</script>

</body>
</html>
