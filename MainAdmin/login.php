<?php
include "../Admin/DatabaseConnection.php"

?>

<!doctype html>


<html>


<head>

    <title> home</title>


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
                <a class='navbar-brand' href='#'> Admin
                </a>
            </div>
            <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav '>

                    <li><a href='login.php' class="active"> <i class="glyphicon glyphicon-home"></i>Home</a>
                    <li><a href='#'><i class="glyphicon glyphicon-briefcase"></i>profile</a>
                        <!--  -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> Student<i
                                class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="add_Student"><i class="glyphicon glyphicon-plus"></i>Add </a>
                            </br>
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-trash"></i>View </a>

                        </div>





                        <!-- drop down -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i> Instructor<i
                                class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-plus"></i>Add </a>
                            </br>
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-trash"></i>View </a>

                        </div>




                        <!--  drop down -->
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


                        <!--  -->
                    <li><a href='#' class="notification"> <i class="glyphicon glyphicon-envelope"></i>Message <span
                                class="badge badge-light">3</span></a>
                        <!-- drop down -->



                        <!--  -->
                </ul>


                <ul class=" nav navbar-nav navbar-right">

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" class="account"><i
                                class="glyphicon glyphicon-user"></i>
                            Account<i class="glyphicon glyphicon-chevron-down"></i>


                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="glyphicon glyphicon-lock"></i>change </a>
                            </br>
                            <a class="dropdown-item" href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Logout
                            </a>

                        </div>


                </ul>

            </div>
        </div>
    </nav>
    <!--  -->


    <!--  panel for quick links -->


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2 md-xs-2">

                <div class="panel panel-primary">
                    <div class="panel-heading">Quick links</div>


                    <div class="panel-body">
                        <div class="list-group">
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-export"></i> post notice
                            </a>
                            <a href="add_Student.php" class="list-group-item"> <i class="glyphicon glyphicon-plus"></i> add
                                student </a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> view
                                Student </a>
                            <a href="" class="list-group-item"> <i class="glyphicon glyphicon-plus"></i>add
                                instructor</a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i> view
                                Instructor </a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-trash"></i>delete
                                Notice</a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-folder-open"></i>view
                                profile</a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> Message
                                <span class="badge badge-primary 
        badge-pill">3</span></a>
                            <a href="" class="list-group-item"><i class="glyphicon glyphicon-log-out"></i> Logout</a>

                        </div>



                    </div>
                </div>
            </div>





            <!--  content -->

            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align:center">Myprofile</div>
                    <div class="panel-body">


                        <!--  content for panel profile -->
                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-md-6">


                                    <div class="conatiner-fluid">

                                        <div class="row">

                                            <div class="col-md-6">



                                                <!--  -->
                                                <?php 
    
    $q=mysqli_query($con,"SELECT * FROM mainadmin where username='OES/1012/12' ;");
      $row=mysqli_fetch_assoc($q);
     
        
        ?>


                                                </h4>
                                            </div>
                                            <?php
          echo "<b>";
          echo "<table class='table table-bordered'";
            echo "<tr>";
              echo "<td>";
                echo "<b> First Name: </b>";
              echo "</td>";
 
              echo "<td>";
                echo $row['first'];
              echo "</td>";
            echo "</tr>";
 
            echo "<tr>";
              echo "<td>";
                echo "<b> Last Name: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['last'];
              echo "</td>";
            echo "</tr>";
 
            echo "<tr>";
              echo "<td>";
                echo "<b> User Name: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['username'];
              echo "</td>";
            echo "</tr>";
 
            echo "<tr>";
              echo "<td>";
                echo "<b> Password: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['PASSWORD'];
              echo "</td>";
            echo "</tr>";
 
            echo "<tr>";
              echo "<td>";
                echo "<b> Email: </b>";	
              echo "</td>";
              echo "<td>";
                echo $row['email'];
              echo "</td>";
            echo "</tr>";
 
            echo "<tr>";
              echo "<td>";
                echo "<b> Contact: </b>";
              echo "</td>";
              echo "<td>";
                echo $row['phone'];
              echo "</td>";
            echo "</tr>";
 
            
          echo "</table>";
          echo "</b>"; 
        ?>

                                            <!--  -->

                                        </div>
                                    </div>

                                    <!--  sub content of content -->
                                </div>







                                <!--  photo -->

                                <div class="col-md-6 col-md-push-4">
                                    <div class="container">
                                        <div class="card" style="width:100px">


                                            <!--  -->
                                            <?php 
    
	 $q=mysqli_query($con,"SELECT * FROM mainadmin where username='OES/1012/12'");
		 $row=mysqli_fetch_assoc($q);
		
 				/* echo "<div style='text-align: center'>
 					<img class=img-circle profile-img' height=110 width=120 src='../IMAGE/Profile/".$_SESSION['pic']."'>
 				</div>"; */
 			?>

                                            <img class="card-img-top" src="../image/avatar.JPG" class="rounded-circle"
                                                alt="Card image" style="width:100%">
                                            <div class="card-body">


                                                <h4 class="card-title">Welcome , OES/1012/12

                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <!--  content -->
            </div>


        </div>


    </div>


    <!--  -->


    </div>
    </div>
    </div>



    <!--  -->


    </div>

    </div>


    <!--  -->
    <?php
include "footer.php";
?>



    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
