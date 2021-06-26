<!DOCTYPE html>
<html>
<head>
<title>
  Model :: Holy Infant Academy
</title>
 	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="jQuery1.js" type="text/javascript" charset="utf-8"></script>
	<script src="lib/jquery.js" type="text/javascript"></script>
	<style type="text/css">
    
      .sidebar-nav {
		padding: 9px 0;
		
	  }
	</style>
	
	<?php
		require_once('auth.php');
	?>
		<script language="javascript" type="text/javascript"> 
		var timerID = null;
		var timerRunning = false;

		function stopclock(){
			if(timerRunning)
				clearTimeout(timerID);
				timerRunning = false;
		}

		function showtime(){
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds()
			var timeValue = "" + ((hours >12) ? hours -12 :hours)

				if(timeValue == "0") timeValue = 12;
					timeValue += ((minutes < 10) ? ":0" : ":") + minutes
					timeValue += ((seconds < 10) ? ":0" : ":") + seconds
					timeValue += (hours >= 12) ? " P.M." : " A.M."
					document.clock.face.value = timeValue;
					timerID = setTimeout("showtime()",1000);
					timerRunning = true;
		}

		function startclock(){
			stopclock();
			showtime();
		}
		window.onload=startclock;
	</script>	
</head>
<body>
	<?php include('navfixed.php');?>
	<?php
		$position=$_SESSION['SESS_LAST_NAME'];
		if($position=='cashier'){
	?>
		<a href="../index.php">Logout</a>
	<?php
		}

	if($position =='admin'){
	?>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i>Dashboard</a></li> 
							<li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a></li>
							<li><a href="addstudent.php"><i class="icon-user icon-2x"></i>Add Student</a></li>
							<br><br>	
							<li>
								<div class="hero-unit-clock">
									<form name="clock">
										<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
									</form>
								</div>
							</li>
						</ul>             
					</div>
				</div>

				<div class="span10">
					<div class="contentheader">
						<i class="icon-dashboard"></i>Dashboard
					</div>
					<ul class="breadcrumb">
						<li class="active">Dashboard</li>
					</ul>
					<font style=" font:bold 44px 'Aleo'; color:#63091b;"><center>Holy Infant Academy</center></font>
					<font style=" font:bold 44px 'Aleo'; color:#63091b;"><center>Student Record Management System</center></font>
					<div id="mainmain">                   
						<a href="students.php"><i class="icon-group icon-2x"></i><br> Students</a>     
						<a href="addstudent.php"><i class="icon-user icon-2x"></i><br> Add Student</a>     
						<a href="../index.php"><font color="red"><i class="icon-off icon-2x"></i></font><br> Logout</a> 
	<?php
	}
	?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php include('footer.php');?>
</html>
