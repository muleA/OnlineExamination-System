<?php
include "../Admin/DatabaseConnection.php"

?>

<!doctype html>
<html>
<!-- head -->

<head>
    <title> Notice-Online Examination System</title>
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

<!-- head  -->

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
                <a class='navbar-brand' href='#'> Admin
                </a>
            </div>
            <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav '>
                    <li><a href='login.php'> <i class="glyphicon glyphicon-home"></i>Home</a>
                    <li><a href='#'><i class="glyphicon glyphicon-briefcase"></i>profile</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> Student<i
                                class="glyphicon glyphicon-chevron-down"></i> </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="add_Student.php" class="active"><i
                                    class="glyphicon glyphicon-plus"></i>Add </a>
                            </br>
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-trash"></i>View </a>
                        </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> Instructor<i
                                class="glyphicon glyphicon-chevron-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="add_Instructor.php"><i
                                    class="glyphicon glyphicon-plus"></i>Add </a>
                            </br>
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-trash"></i>View </a>
                        </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-bell"></i>
                            Notice<i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"> <i class="glyphicon glyphicon-plus"></i>Add </a>
                            </br>
                            <a class="dropdown-item" href="#"> <i class="glyphicon glyphicon-trash"></i>Delete </a>

                        </div>
                    <li><a href='#' class="notification"> <i class="glyphicon glyphicon-envelope"></i>Message <span
                                class="badge badge-light">3</span></a>
                </ul>
                <ul class=" nav navbar-nav navbar-right">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" class="account"><i
                                class="glyphicon glyphicon-user"></i>
                            Account<i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="#passwordchangeModal" class='trigger-btn' data-toggle='modal'
                                class="list-group-item"><i class="glyphicon glyphicon-lock"></i>
                                Change </a>
                            </br>
                            <a class="dropdown-item" href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Logout
                            </a>
                        </div>
                </ul>
            </div>
        </div>
    </nav>
    <!--  -->

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2 md-xs-2">

                <div class="panel panel-primary">
                    <div class="panel-heading">Quick links</div>


                    <div class="panel-body">
                        <div class="list-group">
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-export"></i> post notice
                            </a>
                            <a href="add_Student.php" class="list-group-item "> <i class="glyphicon glyphicon-plus"></i>
                                add
                                student </a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> view
                                Student </a>
                            <a href="add_Instructor.php" class="list-group-item"> <i
                                    class="glyphicon glyphicon-plus"></i>add
                                instructor</a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> view
                                Instructor </a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-trash"></i>delete
                                Notice</a>
                            <a href="profile.php" class="list-group-item"><i
                                    class="glyphicon glyphicon-folder-open"></i>view
                                profile</a>

                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> Message
                                <span class="badge badge-primary 
badge-pill">3</span></a>


                            <a href="#passwordchangeModal" class="list-group-item" class="trigger-btn"
                                data-toggle="modal">
                                <i class="glyphicon glyphicon-lock"></i> Change password</a>

                            <a href="logout.php" class="list-group-item"><i class="glyphicon glyphicon-log-out"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal update password  -->


            <div id="passwordchangeModal" class='modal fade'>
                <div class='modal-dialog modal-login'>
                    <div class='modal-content' id='content'>
                        <div class='modal-header'>
                            <h4 class='modal-title' style="text-align:center">Change Your Password?</h4>
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;
                            </button>
                        </div>

                        <div class='modal-body'>
                            <form action='' method='post'>
                                <div class='form-group'>
                                    <div class='input-group' class="justify-content-center"
                                        style="width:400px;margin-left:5vw">
                                        <input type='text' name='Username' class='form-control' placeholder='Username'
                                            required='' style="margin-bottom: 1vw;"><br>

                                        <input type='password' name='Password' class='form-control'
                                            placeholder='New Password' required='' style="margin-bottom: 1vw;"><br>
                                        <button type='submit' name='submit3'
                                            class='btn btn-primary btn-block btn-lg'>Update
                                            Password</button>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <!--  -->

            <!--  content -->



            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="font-style: bold;font-size:large">Add Notice</div>
                    <div class="panel-body">

                        <!--  -->







                        <div class='container-fluid' style='text-align: center;'>
                            <div class="row">

                                <div class="col-md-4">
                                    <form action='add_Student.php' method='post'>
                                        <div class="form-group " style="width:250px;">

                                            <input type='text' name='fullname' class='form-control' id="control"
                                                placeholder='Writer Full Name' required='' style="margin-bottom:2vw;">

                                            <input type='text' name='title' class='form-control' id="control"
                                                placeholder='Title' required='' style="margin-bottom:2vw;"><br>

                                            <input type='date' name='last' class='form-control' id="control"
                                                placeholder='Title' required='' style="margin-bottom:2vw;"><br>
                                            <input type='number' name='id' class='form-control' id="control"
                                                placeholder='notice Id' required='' style="margin-bottom:2vw;"><br>

                                            <button style="text-align: width=1vw ;color:whitesmoke;"
                                                class='btn btn-primary ' type='submit' name='submit'>
                                                <i class="glyphicon glyphicon-ok-circle"></i>
                                                Post</button>





                                        </div>





                                        <!--  -->
                                </div>
                                <div class="col-md-5">

                                <textarea cols="12" rows="12" name='message' maxlength="3000" class='form-control' id="control"
                                                placeholder='Enter your Notice' required='' style="margin-bottom:2vw;">
                                        
                                            </textarea></br>

                                </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php

if ( isset( $_POST['submit3'] ) )
{
if ( mysqli_query( $con, "UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]'
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

}}

?>


        </div>

    </div>




    <?php
include "footer.php";
?>



    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
