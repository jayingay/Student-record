 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div style="float:left;">
            <img src="img/HIA-logo.png" alt="" style="width: 37px; padding-top:3px; margin-right:10px;">
          </div>
          <div style="float:left;">
             <a class="brand" href="#" ><b>Holy Infant Academy </b></a>
          </div>
          <div class="nav-collapse collapse">
              <ul class="nav pull-right">
                <li><a><i class="icon-user icon-large"></i> Welcome:<strong> <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
                <li>
                    <a><i class="icon-calendar icon-large"></i>
                          <?php
                            $Today = date('y:m:d',mktime());
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                          ?>
                    </a>
                </li>
                <li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> Log Out</a></li>
            </ul>
         </div>
      </div>
    </div>
  </div>
	