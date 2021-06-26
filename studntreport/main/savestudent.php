<?php
session_start();

include('../connect.php');

if(isset($_POST['submit'])){

    $a = $_POST['name'];
    $k = $_POST['last_name'];
    $b = $_POST['report'];
    $c = $_POST['yoa'];
    $d = $_POST['parent'];
    $e = $_POST['dob'];
    $f = $_POST['student_id'];
    $g = $_POST['gender'];
    
    
    $file_name=strtolower($_FILES['file']['name']);
    $file_ext=substr($file_name, strrpos($file_name,'.'));
    $prefix='your_site_name_'.md5(time()*rand(1, 9999));
    $file_name_new=$prefix.$file_ext;
    $path='../uploads/'.$file_name_new;
    
      if(@move_uploaded_file($_FILES['file']['tmp_name'],$path)){
    
        $qry = "INSERT INTO `student` (`name`,`last_name`,`report`,`yoa`,`parent`,`dob`,`student_id`,`gender`,`file`) VALUES ('$a','$k','$b','$c','$d','$e','$f','$g',' $file_name_new')";
        $con->query($qry) or die($con->error);
        echo header("location: students.php");
  
    }
  }

?>