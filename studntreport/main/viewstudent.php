<html>
<head>
<title>
	Model :: Holy Infant Academy
</title>
<?php 
require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link href="css/bootstrap-responsive.css" rel="stylesheet">
 <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
 <script src="jQuery1.js" type="text/javascript" charset="utf-8"></script>
 <script src="js/application.js" type="text/javascript" charset="utf-8"></script>
 <script src="lib/jquery.js" type="text/javascript"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
</head>
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
<body>
<?php include('navfixed.php');?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
						<li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a> </li>
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
					<i class="icon-table"></i> Students
				</div>
				<ul class="breadcrumb">
					<li><a href="index.php">Dashboard</a></li> /
					<li class="active">Students</li>
				</ul>
			</div>
			<div style="margin-top: -19px; margin-bottom: 21px;">
			<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

		<?php
			include('../connect.php');

				$id=$_GET['id'];

				$qry = "SELECT * FROM student WHERE id= $id ";
				$user = $con->query($qry) or die($con->error);
				$row = $user->fetch_assoc();
			
				do{
		?>
			<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
			<center><h4><i class="icon-edit icon-large"></i> Student Information</h4></center>
			<hr>
			<center>
				<img src="../uploads/<?php echo $row['file'];?>" class="roundimage2"  alt=""/>
				<br><br>
				<table>
					<tr>
						<td>Student ID :</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"><?php echo $row['student_id']; ?>
						</td>
					</tr>
					<tr>
						<td>Full Name :</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['name']; ?> <?php echo $row['last_name']; ?>
						</td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['gender']; ?>
						</td>
					</tr>
					<tr>
						<td>D.O.B:</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['dob']; ?>
						</td>
					</tr>
					<tr>
						<td> Admission Year :  </td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['yoa']; ?>
						</td>
					</tr>
					<tr>
					<td>Parent Phone:</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['parent']; ?>
						</td>
					</tr>
					<tr>
						<td>Report :</td>
						<td style="padding: 10px;
									border-top: 1px solid #fafafa;
									background-color: #f4f4f4;
									text-align: center;
									color: #7d7d7d;"> <?php echo $row['report']; ?>
						</td>
					</tr>
				</table>
				<br>			
		   </center>
	   </div>
	<?php
	}while($user->fetch_assoc())
	?>

<script src="js/jquery.js"></script>
</body>
	<?php include('footer.php');?>
</html>