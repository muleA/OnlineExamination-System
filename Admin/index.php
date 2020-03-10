
<?php
include "DatabaseConnection.php"
?>

<!doctype html>


<html>


<head>

<title> Online Exam System</title>


<!--  -->

<link rel = "stylesheet" href = "../Style.css">

<meta name = 'viewport' content = 'width=device-width, initial-scale=1'>

<link rel = 'stylesheet' href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/
    css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = 'stylesheet' href = 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<!-- jQuery library -->
<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>

<!-- Latest compiled JavaScript -->
<script src = 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>



<body style=" background-color: aliceblue;" >


<!--  navigation bar -->


<nav class = 'navbar navbar-inverse navbar-static-top'>
<div class = 'container-fluid'>
<div class = 'navbar-header'>
<button type = 'button' class = 'navbar-toggle' data-toggle = 'collapse' data-target = '#myNavbar'>
<span class = 'icon-bar'></span>
<span class = 'icon-bar'></span>
<span class = 'icon-bar'></span>
</button>
<a class = 'navbar-brand' href = '#'>  EXAM SYSTEM 
</a>
</div>
<div class = 'collapse navbar-collapse' id = 'myNavbar'>
<ul class = 'nav navbar-nav navbar-right'>
<li><a href = '#'>Home</li></a>
<li><a href = '#'>about</a></li>
<li ><a href = '#'>Calendar</a></li>
<li><a href = '#'>UserGuide</a></li>

</ul>

</div>
</div>
</nav>
<!--  -->

<div class="container-fluid" style="margin-bottom:4vw;">
  
<div class="row">
<div class="col-md-12">
<div class="jumbotron" style=" background-color: aliceblue;" >
  
  
  <p>
  <span id="L"> T</span> his Online Examination System is designed to provide services for Students,  Instructors ,
   Academic Staff and  for those who play management role at at the institute
  
   </p>
  
  
  
  
 

</div>
</div>
</div>



<div class="col-md-12 col-xs-12" id="login">

<!--  -->

<div class="module form-module">
     
                <div class="form">
                    <h2 style="text-align: center;background-color:rgb(58, 115, 177);color:whitesmoke"> Sign In </h2>
                    
         <div class="alert alert-info hidden" style="clear:both;">
        <button class="close" id="btnClose" data-dismiss="alert" aria-hidden="true">×</button>
    </div>

<form action="" method="post" role="form"><input name="" type="hidden" >

                        <div style="margin-bottom: 20px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input autofocus="False" class="form-control" data-val="true" data-val-required="The User name field is required." id="UserName"
                             name="UserName" placeholder="User name" required="required" type="text" value="">
                        </div>
                        <div style="margin-bottom: 20px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" data-val="true" data-val-required="The Password field is required." id="Password" name="Password"
                             placeholder="Password" required="required" type="password">

                        </div>

                       <button class="btn btn-primary btn-md" name="submit"><i class="glyphicon glyphicon-log-in"></i> login</button>

                      
</form>              
  </div>
        
  
     </div>
</div>
</div>



<!--  -->


<?php

if ( isset( $_POST['submit'] ) )
 {
    $count = 0;
    $res = mysqli_query( $con, "SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]';" );

    $row = mysqli_fetch_assoc( $res );

    $count = mysqli_num_rows( $res );

    if ( $count == 0 )
 {
        ?>

        <script type = 'text/javascript'>
        alert( "The username and password doesn't match." );
        </script>
        <div class = 'form-group'>
        <div class = 'input-group'>
        <div class = 'alert alert-danger' style = ' background-color: #de1313; color: white'>
        <strong>The username and password doesn't match</strong>
      </div>    
        </div>
         </div>
    <?php
  }
  else
  {
    /*-------------if username & password matches---*/
/* 
    $_SESSION['login_user'] = $_POST['username']; 
    $_SESSION['pic']= $row['pic']; */

    ?>
      <script type="text/javascript">
        window.location="login.php"
      </script>
    <?php
  }
}
?>
<!--  -->

<div class="container-fluid" style="background-color: rgb(58, 115, 177)">
<div class="row">

<div class="col-md-12">

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
    

  

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3" style="margin-left:30%">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled" style="display: inline-block">
          <li>
            <a href="#!"><i class="fa fa-facebook fa-lg"></i> </a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-twitter fa-lg"></i></a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

    

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color:whitesmoke">
    &copy; <script>
    var date = document.write(new Date().getFullYear());

document.getElementById("year").innerHTML = date;

    </script>  Online Exam System
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</div>
</div>
</div>

 <!--  -->
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
</body>
</html>
