<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert title here</title>
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="/static/bootstrapValidator/css/bootstrapValidator.css" />
	<script type="text/javascript" src="/static/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/static/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/static/bootstrapValidator/js/bootstrapValidator.js"></script>
	<!-- bootstrap data table -->
	<script type="text/javascript" src="/static/bootstrap-table/bootstrap-table.js"></script>
    <link rel="stylesheet" href="/static/bootstrap-table/bootstrap-table.css" />
    <script type="text/javascript" src="/static/bootstrap-table/locale/bootstrap-table-zh-CN.js"></script>
	    
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="/static/img/logo.jpg" height="100%" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="icon-bar" href="/auth/manage">首页</a>
                        </li>
                        <li><a href="#">代理商管理</a>
                        </li>
                        <li><a href="#">销售线索管理</a>
                        </li>
                        <li><a href="#">用户管理</a>
                        </li>
                         <li><a href="#">任务管理</a>
                        </li>
                         <li><a href="#">财务管理</a>
                        </li>
                        <li><a href="#">道具管理</a>
                        </li>
                        <li class="active"><a href="#">权限管理</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>欢迎您,admin</a>
                        </li>
                        <li><a href="#">安全退出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container-fluid">
        
            <div class="row">
                <div class="col-sm-2">
                    <a href="#" class="list-group-item active">权限管理</a>
                    <a href="#userManage" class="list-group-item">
                        <img src="/static/img/icon.png">账号管理</a>
                    <a href="#roleManage" class="list-group-item">
                        <img src="/static/img/icon.png">角色管理</a>
                    
                </div>
                <div class="col-sm-10">
                    <ol class="breadcrumb">
                        <li class="active">权限管理
                        </li>
                        <li class="active">账号管理
                        </li>
                    </ol>
					<div id="goodsTable">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            搜索
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-inline">
                                <div class="form-group">
                                    <label for="name">名称</label>
                                    <input type="text" class="form-control" id="name" placeholder="请输入名称">
                                </div>
                                <div class="form-group">
                                    <label for="name">状态</label>
                                    <select class="form-control">
                                        <option>上架</option>
                                        <option>下架</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">开始搜索</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--
                     	   列表展示
                    -->
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>图标</th>
                                    <th>名称</th>
                                    <th>价格</th>
                                    <th>邮费</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15</td>
                                    <td>
                                        <img src="/static/img/test.png" class="img-thumbnail" style="height: 30px;" />
                                    </td>
                                    <td>超人气无花果</td>
                                    <td>18.00￥</td>
                                    <td>18.00￥</td>
                                    <td>上架</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" class="btn btn-default">修改</a><a href="" class="btn btn-default">下架</a><a href="" class="btn btn-danger">删除</a>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination" style="float: right;">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li class="disabled"><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
                
                <!-- goodsTable -->
                <div  id="roleTable">
                <button id='btnAddRole' type="button" class="btn btn-success">新增角色</button>
                 <div class="table-responsive">
                        <table id="tbRole" class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>角色名称</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination" style="float: right;">
                        <li><a href="#">&laquo;</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li class="disabled"><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
                </div>
                <!-- roleTable -->
            </div>
        </div>
        <!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">  
		    <div class="modal-dialog" role="document">  
		        <div class="modal-content">  
		            <div class="modal-header">  
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
		                    <span aria-hidden="true">×</span>  
		                </button>  
		                <h4 class="modal-title" id="myModalLabel">Modal title</h4>  
		            </div>  
		            <div class="modal-body">  
		                <p>One fine body…</p>  
		            </div>  
		            <div class="modal-footer">  
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
		                <button id="saveForm" type="button" class="btn btn-primary">Save</button>  
		            </div>  
		        </div>  
		    </div>  
		</div>  
  		<!-- Modal End -->
        
        <script type="text/javascript">
			$(document).ready(function(){
				$("#roleTable").hide();
				$.ajax({
					type: 'GET',
					url: "http://qizhuan.powersoft.com/auth/manage/menu",
					async: true,
					success: function(data) {
						//alert(data.data.title);
						}
					});	

			$("a").click(function(){
				var menu = $(this).attr("href");
				//角色管理
				if(menu == '#roleManage') {
					$("#goodsTable").hide();
					$("#roleTable").show();
					$(".breadcrumb").find("li").remove();
					$(".breadcrumb").append("<li class='active'>权限管理</li>");
					$(".breadcrumb").append("<li class='active'>角色管理</li>");
					$("#tbRole tbody").html('');
					$.ajax({
						type: "GET",
						url: "http://qizhuan.powersoft.com/auth/role/role",
						async: true,
						dataType: "json",
						success: function(data) {
							if(data.status == 'success') {
								createRoleTable(data);
								}
							}
						});	
				}
				//导航管理
				if(menu == '#userManage') {
					$("#goodsTable").show();
					$("#roleTable").hide();
					$(".breadcrumb").find("li").remove();
					$(".breadcrumb").append("<li class='active'>权限管理</li>");
					$(".breadcrumb").append("<li class='active'>账号管理</li>");
				}
				});
			});
			function createRoleTable(data) {
				$.each(data.data, function(idx, obj) {
					//console.log(obj);
					//console.log($("#tbRole tbody"));
					$("#tbRole tbody").append(
							'<tr><td>' + obj.id + '</td>' +
							'<td>' + obj.rolename + '</td>' +
							'<td>' + obj.status + '</td>' +
							'<td><div class="btn-group">' +
							'<a id="modifyRole" href="#" onClick="roleEdit(' 
							+ obj.id + ',\''+ obj.rolename + '\',' + obj.status + ')" class="btn btn-default">修改</a>' + 
							'<a id="deleteRole" href="#" onClick="deleteRole(\'' + obj.id + '\')" class="btn btn-danger">删除</a></div></td></tr>');
					});
				}
			
			function roleEdit(id, rolename, status) {
				
				var statusOption = status == 1 ? 
						'<option value="1" selected="selected">正常</option>	<option value="0">停用</option>' : 
						'<option value="1">正常</option>	<option value="0" selected="selected">停用</option>';
				$('.modal-body').html(
						'<form id="roleModifyForm" class="form-horizontal" role="form">        ' +
						'  <div class="form-group">                                                                    ' +
						'    <label class="col-sm-2 control-label">角色名称</label>                                    ' +
						'    <div class="col-sm-10">                                                                   ' +
						'      <input id="roleId" type="hidden" class="form-control" value="'+ id +'">                         ' +
						'      <input id="rolename" type="text" class="form-control" placeholder="'+ rolename +'">                         ' +
						'    </div>                                                                                    ' +
						'  </div>                                                                                      ' +
						'  <div class="form-group">                                                                    ' +
						'    <label for="inputPassword" class="col-sm-2 control-label">角色状态</label>                ' +
						'    <div class="col-sm-10">                                                                   ' +
						'				<select id="roleStatus" class="form-control">  	' + statusOption +
						'				</select>																		' +                                                                           
						'    </div>                                                                                    ' +
						'  </div>                                                                                      ' +
						'</form>                                                                                       ' 
					    );
			    //修改标题
				$('#myModalLabel').html('修改角色');
			    //添加save函数
			    $('#saveForm').attr('onClick','saveRole()');
				$('#myModal').modal('show');
				}
			
			function saveRole() {
				var roleId = $('#roleId').val();
				var rolename = $('#rolename').val();
				var roleStatus = $('#roleStatus option:selected').val();
				console.log($('#roleStatus option:selected').val());
				$.ajax({
					type: 'GET',
					url: 'http://qizhuan.powersoft.com/auth/role/roleModify',
					data: 'roleId=' + roleId + '&rolename=' + rolename + '&roleStatus=' + roleStatus,
					dataType: 'json',
					contentType: 'application/x-www-form-urlencode;charset=utf-8',
					success: function(data) {
						alert(data.status);
						$('#myModal').modal('hide');
						}
					});	
				}


			$('#btnAddRole').click(function(){
				$('.modal-body').html(
						'<div class="form-group">'+
						'<form id="roleEditForm" class="form-horizontal" role="form">        ' +
						'  <div class="form-group">                                                                    ' +
						'    <label class="col-sm-2 control-label">角色名称</label>                                    ' +
						'    <div class="col-sm-10">                                                                   ' +
						'      <input id="rolename" name="rolename" type="text" class="form-control" placeholder="角色名称" data-bv-notempty-message="firstName不能为空(提示语)" >                         ' +
						'    </div>                                                                                    ' +
						'  </div>                                                                                      ' +
						'  <div class="form-group">                                                                    ' +
						'    <label for="inputPassword" class="col-sm-2 control-label">角色状态</label>                ' +
						'    <div class="col-sm-10">                                                                   ' +
						'				<select id="roleStatus" class="form-control">  	' +
						'                  <option value="1" selected="selected">正常</option> ' +
						'                  <option value="0">信用</option> ' +
						'				</select>																		' +                                                                           
						'    </div>                                                                                    ' +
						'  </div>                                                                                      ' +
						'</form>                                                                                       ' +
						'</div>'
					    );
			    //修改标题
				$('#myModalLabel').html('添加角色');
			    //添加save函数
			    $('#saveForm').attr('onClick','addRole()');
				$('#myModal').modal('show');

				});

			function addRole() {
					var rolename = $('#rolename').val();
					var roleStatus = $('#roleStatus option:selected').val();
					$('#roleEditForm').bootstrapValidator({
						message: 'This value is not valid',
						feedbackIcons: {
							valid: 'glyphicon glyphicon-ok',
						　　　　invalid: 'glyphicon glyphicon-remove',
						　　　　validating: 'glyphicon glyphicon-refresh'
						},
						fields: {
							rolename : {
								message: '用户名验证失败',
								validators: {
									notEmpty: {
										message: '用户名不能为空'
										}
						
									}
								}
						}
					});
					$.ajax({
						type: 'GET',
						url: 'http://qizhuan.powersoft.com/auth/role/roleAdd',
						data: 'rolename=' + rolename + '&roleStatus=' + roleStatus,
						dataType: 'json',
						contentType: 'application/x-www-form-urlencode;charset=utf-8',
						success: function(data) {
							alert(data.status);
							$('#myModal').modal('hide');
							}
						});	
					
					}

			function deleteRole(id) {
				alert('确定要删除？');
				$.ajax({
					type: 'GET',
					url: 'http://qizhuan.powersoft.com/auth/role/roleDelete',
					data: 'roleId=' + id,
					dataType: 'json',
					contentType: 'application/x-www-form-urlencode;charset=utf-8',
					success: function(data) {
						alert(data.status);
						$('#myModal').modal('hide');
						}
					});	

				}
			
        </script>
</body>
</html>