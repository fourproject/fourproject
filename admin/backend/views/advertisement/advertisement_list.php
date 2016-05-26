
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
<style>
	.alt td{ background:black !important;}
</style>
</head>
<body>
	
		<input type="hidden" name="allIDCheck" value="" id="allIDCheck"/>
		<input type="hidden" name="fangyuanEntity.fyXqName" value="" id="fyXqName"/>
		<div id="container">
			<div class="ui_content">
				<div class="ui_tb">
					<table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
						<tr>
							<th width="30"><input type="checkbox" />
							</th>
							<th>标题</th>
							<th>图片</th>
							<th>是否显示</th>
							<th>排序</th>
							<th>操作</th>
						</tr>
						<?php foreach($arr as $k=>$v){ ?>
							<tr>
								<td><input type="checkbox"/></td>
								<td><?php echo $v['a_title'];?></td>
								<td><img src="/moonth9/xiangmu/yii/backend/web/upload/<?php echo $v['a_img'];?> "width="40"></td>

								<td><?php  if($v['a_show']==1){
									echo "是";
								}else{
									echo "否";
								};?>			
								</td>
								<td><?php echo $v['a_order'];?></td>
								<td>
									<a href="javascript:void(0)" id="<?php echo $v['a_id']?>" onclick="sc
									(this)">删除</a>
								</td>
							</tr>
							<?php  }?>
					</table>
				</div>
				
				</div>
			</div>
		</div>
	
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
<script src="./jquery.js"></script>
<script>
    function sc(obj){
	//alert("1");
        var id=obj.id;
        $.ajax({
            type: "POST",
            url: "index.php?r=advertisement/sc",
            data: "id="+id,
            success: function(msg){     
                    obj.parentNode.parentNode.parentNode.removeChild(obj.parentNode.parentNode)
            }
        });
    }
</script>