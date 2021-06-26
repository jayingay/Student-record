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
                          <li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Students</a>  </li>
                          <li class="active"><a href="addstudent.php"><i class="icon-user icon-2x"></i>Add Student</a>     </li>
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
                      <i class="icon-table"></i> Add Student
                  </div>
                  <ul class="breadcrumb">
                      <li><a href="index.php">Dashboard</a></li> /
                      <li class="active">Add Student</li>
                  </ul>
                  <div style="margin-top: -19px; margin-bottom: 21px;">
                       <a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i>Back</button></a>
                        <center><h4><i class="icon-edit icon-large"></i>Add New Student</h4></center>
                        <hr>
                  </div>
            </div>
       </div>
  </div>

  <center>
      <div id="ac">
           <form action="savestudent.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="memi" value="<?php echo $id; ?>" />
                <span>Student ID: </span><input type="text" style="width:265px; height:30px;"  value="MS17-<?php 
                $prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="student_id" readonly Required /><br>
                <span>First Name : </span><input type="text" style="width:265px; height:30px;"  name="name" Required /><br>
                <span>Last Name : </span><input type="text" style="width:265px; height:30px;"  name="last_name" Required /><br>
                <span>Gender: </span>
                <select name="gender" style="width:265px; height:30px; margin-left:-5px;" >
                    <option>Female</option>
                    <option>Male</option>
                </select><br>
                <span>D.O.B: </span><input type	="date" style="width:265px; height:30px;" name="dob" required /><br>
                <span>Admission Year </span><select name="yoa" style="width:265px; height:30px; margin-left:-5px;" >
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025 </option>
                </select><br>
                <span>Parent Phone: </span><input type	="text" style="width:265px; height:30px;" name="parent" required />
                <br>
                <span>Report : </span><textarea style="width:265px; height:50px;" name="report" ></textarea><br>
                <span>Picture:</span><input type="file" name="file" id="file" required  style="height:50px;"><br><br>
                <div >
                   <button class="btn btn-success btn-block btn-large" style="width:275px; margin-left:105px;" name="submit"><i class="icon icon-save icon-large"></i> Save Student</button>
                </div>
          </form>
      </div>
 </center>

<script src="js/jquery.js"></script>
</body>
  <?php include('footer.php');?>
</html>