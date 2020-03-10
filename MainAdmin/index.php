<?php
include "../Admin/DatabaseConnection.php"
?>

<!doctype html>


<html>


<head>

    <title> Online Exam System</title>


    <!--  -->

    <link rel="stylesheet" href="../Style.css">

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/
    css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>

    <!-- Latest compiled JavaScript -->
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>



<body style=" background-color: aliceblue;">


    <!--  navigation bar -->


    <nav class='navbar navbar-inverse navbar-static-top'>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='#'> EXAM SYSTEM
                </a>
            </div>
            <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='#' class="active">Home</li></a>
                    <li><a href='#'>about</a></li>
                    <li><a href='#'>Calendar</a></li>


                </ul>

            </div>
        </div>
    </nav>
    <!--  -->

    <div class="container-fluid" style="margin-bottom:4vw;">

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style=" background-color: aliceblue;">


                    <p>
                        <span id="L"> T</span> his Online Examination System is designed to provide services for
                        Students, Instructors ,
                        Academic Staff and for those who play management role at at the institute

                    </p>






                </div>
            </div>
        </div>



        <div class="col-md-12 col-xs-12" id="login">




            <div class="login-form">
                <form action="index.php" method="post">
                    <h2 class="text-center">Log in</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required="required"
                            name="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="required"
                            name="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Log in</button>
                    </div>
                    <div class="clearfix">

                        <a href="#passwordchangeModal" class="pull-right" name="submit3" class='trigger-btn'
                            data-toggle='modal'>Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- modal update password  -->


    <div id='passwordchangeModal' class='modal fade'>
        <div class='modal-dialog modal-login'>
            <div class='modal-content' id='content'>
                <div class='modal-header'>
                    <h4 class='modal-title' style="text-align:center">forget Your Password?</h4>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;
                    </button>
                </div>

                <div class='modal-body'>
                    <form action='' method='post'>
                        <div class='form-group'>
                            <div class='input-group' class="justify-content-center" style="width:400px;margin-left:5vw">
                                <input type='text' name='Username' class='form-control' placeholder='Username'
                                    required='' style="margin-bottom: 1vw;"><br>

                                <input type='password' name='Password' class='form-control' placeholder='New Password'
                                    required='' style="margin-bottom: 1vw;"><br>
                                <button type='submit' name='submit3' class='btn btn-primary btn-block btn-lg'>Update
                                    Password</button>

                            </div>
                        </div>

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
    $res = mysqli_query( $con, "SELECT * FROM MainAdmin WHERE Username='$_POST[Username]' && PASSWORD='$_POST[Password]';" );

    $row = mysqli_fetch_assoc( $res );

    $count = mysqli_num_rows( $res );

    if ( $count == 0 )
 {
        ?>

    <script type='text/javascript'>
    alert("The username and password doesn't match.");
    </script>
    <div class="login-form">

        <div class='form-group'>
            <div class='input-group' style="margin-top:-13vw">
                <div class='alert alert-danger' style=' background-color: #de1313; color: white'>
                    <strong>The username and password doesn't match</strong>
                </div>
            </div>
        </div>

    </div>
    <?php
  }
 
  else
  {
   /*-------------if username & password matches---*/
 /* 
    $_SESSION['login_user'] = $_POST['Username']; 
    $_SESSION['photo']= $row['photo'];  */

    ?>
    <script type="text/javascript">
    window.location = "login.php"
    </script>
    <?php
  }
} 



if ( isset( $_POST['submit3'] ) )
 {
    if ( mysqli_query( $con, "UPDATE MainAdmin SET PASSWORD='$_POST[Password]' WHERE Username='$_POST[Username]'
 ;" ) )
 {
        ?>
    <div class="login-form">

        <div class='form-group'>
            <div class='input-group' style="margin-top:-13vw">
                <div class='btn  btn-success' style='  color: white'>
                    <strong>password updated successfully</strong>
                </div>
            </div>
        </div>

    </div>

    <?php
    }
    else

    {
        ?>
    <div class="login-form">

        <div class='form-group'>
            <div class='input-group' style="margin-top:-13vw">
                <div class='alert alert-danger' style='  color: white'>
                    <strong>incorrect username please enter correct one</strong>
                </div>
            </div>
        </div>

    </div>
    <?php
    }
}









?>






    <!--  forgot password -->











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
                        </script> Online Exam System
                    </div>
                    <!-- Copyright -->

                </footer>
                <!-- Footer -->

            </div>
        </div>
    </div>

    <!--  -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
