<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="/static/bootstrapValidator/css/bootstrapValidator.css" />
	<link rel="stylesheet" href="/static/qizhuan-css/manage.css" />
	<script type="text/javascript" src="/static/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/static/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/static/bootstrapValidator/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="/static/qizhuan-js/manager.js"></script>   
    <script type="text/javascript" src="/static/qizhuan-js/util.js"></script> 
    <script type="text/javascript" src="/static/jquery/jquery.cookie.js"></script>  
	<style>  
		body{  
			margin-left:auto;  
			margin-right:auto; 
			margin-TOP:100PX; 
			width:20em;  
		}
	</style>
	
</head>
<body>
	<form id="loginForm" role="form" action="/user/login/login"> 
	<!--下面是用户名输入框-->
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">@</span>
  		<input id="username" name="username" type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1">
	</div>
	<br>
	<!--下面是密码输入框-->
	<div class="input-group">
  		<span class="input-group-addon" id="basic-addon1">@</span>
  		<input id="password" name="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1">
	</div>
	<br>
	<!--下面是登陆按钮,包括颜色控制-->
	<button type="submit" style="width:280px;" class="btn btn-default">登 录</button>
		<span id="err-msg" ></span>
	</form>
	<script type="text/javascript">
		$("document").ready(function(){
			manage.login();
		});
		
		
	</script>
	

</body>
</html>