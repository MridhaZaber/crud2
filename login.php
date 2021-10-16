<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<br><br><br>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
           <?php if(isset($_SESSION['error'])){
                ?>
                <div class="alert alert-warning">
                    <strong>Waring</strong><h1>Wrong email and passsword..!!</h1>
                </div>
                <?php
            }
            ?>
            <?php if(isset($_SESSION['reg_msg'])){
                ?>
                <div class="alert alert-warning">
                    <strong>Waring</strong><?php echo $_SESSION['reg_msg'];?>
                </div>
                <?php
            }
            ?>



            <h2 >Login</h2>
            <hr>
            <form action="confirmlogin.php" method="POST">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input required type="text" class="form-control" name="email" placeholder="EmailAddress">
                </div>
                <div class="form-group">
                    <label for="Email">Password</label>
                    <input required type="password" class="form-control" name="password" placeholder="PASSWORD">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
                <a class="btn btn-link" href="registration.php">Create new account</a>
            </form>


        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['reg_msg']); ?>


