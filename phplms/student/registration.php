<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

        <section class="login_content" style="margin-top: -40px;">
            <form name="form1" action="" method="post">
                <h2>User Registration Form</h2><br>

                <div>
                    <input type="text" class="form-control" placeholder="FirstName" name="firstname" required="" />
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="LastName" name="lastname" required="" />
                </div>

                <div>
                    <input type="text" class="form-control" placeholder="Username" name="username" pattern="[A-Za-z]{6,12}" title = "The Username must be upper or lower case of length between 6 to 12"required="" />
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Password" title = "Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number." name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required="" />
                    <div class="requirements">
                        
                    </div>
                </div>
                <div>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="" />
                </div>
                <div>
                    <input type="number" class="form-control" placeholder="Contact" name="contact" pattern="(?=.*\d).{7,15}" title = "The lenght must be between 7 to 15" min="1000000" max ="999999999999999" required="" />
                </div>
                ;
                ;

                <div>
                    <input type="number" class="form-control" placeholder="SEM" name="sem" pattern="(?=.*\d).{,1}" min="1" max="10" required="" />
                </div>
                ;
                ;

                <div>
                    <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" pattern="[0-9A-Z]{11}" title = "The Enrollment No. Must be of 11 Letters and Contain an Alphabet " required="" />
                </div>
                <div class="col-lg-12  col-lg-push-3">
                    <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                </div>

            </form>
        </section>

        <?php

        if (isset($_POST["submit1"])) {

            mysqli_query($link, "insert into student_registration values ('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[sem]','$_POST[enrollmentno]','no')");

        ?>
            <div class="alert alert-success col-lg-12 col-lg-push-0">
                Registration successful, You will get an email when your account is approved
            </div>
        <?php

        }

        ?>


    </div>




</body>

</html>