<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
	Model :: Holy Infant Academy
</title>
    <link rel="shortcut icon" href="main/images/pos.jpg">
    <link href="main/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
	<link rel="stylesheet" href="main/css/font-awesome.min.css">
	<link href="main/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
    <style type="text/css">
      body {
        padding-top: 30px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>  
</head>
<body>
    <div class="container-fluid">
      	<div class="row-fluid">
			<div>
				<center><img src="main/img/HIA-logo.png" alt="" style="width: 220px; padding-top:px; margin-right:10px;"></center>
			</div>
	  	</div>
		<div id="login">
			<?php
				if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR'])>0 ){
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo '<div style="color: black; text-align: center;">',$msg,'</div><br>'; 
					}
					unset($_SESSION['ERRMSG_ARR']);
				}
			?>
			<form action="login.php" method="post">
				<font style=" font:bold 44px 'Aleo'; color:#fff;"><center>Login System</center></font>
				<br>	
				<div class="input-prepend">
					<input style="height:40px;" type="text" name="username" Placeholder="Username" ><br>
				</div>
				<div class="input-prepend">
					<input type="password" style="height:40px;" name="password" Placeholder="Password" ><br>
				</div>
				<br>
				<div class="qwe">
					<button class="btn btn-large btn-primary btn-block pull-right" href="dashboard.html" type="submit" name="login"><i class="icon-signin icon-large"></i> Login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>