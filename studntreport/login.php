<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	include_once('connect.php');

		if(isset($_POST['login'])){

			$username = ($_POST['username']);
			$password = ($_POST['password']);
		
			
				if($username == '') {
					$errmsg_arr[] = 'Username missing';
					$errflag = true;
				}
				if($password == '') {
					$errmsg_arr[] = 'Password missing';
					$errflag = true;
				}
		
				if($errflag) {
					$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
					session_write_close();
					header("location: index.php");
					exit();
				}
			
			$qry="SELECT * FROM user WHERE username='$username' AND password='$password'";
			$user= $con->query($qry) or die($con->error);
			$row = $user->fetch_assoc();
			$total = $user->num_rows;

			if($total > 0) {

				session_regenerate_id();
				$_SESSION['SESS_MEMBER_ID'] = $row['id'];
				$_SESSION['SESS_FIRST_NAME'] = $row['name'];
				$_SESSION['SESS_LAST_NAME'] = $row['position'];
				session_write_close();
				echo header("location: main/index.php");
				exit();

			}else{

				echo header("location: index.php");
				exit();
			}

	}

	
?>