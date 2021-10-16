<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
}
$id=$_GET['id'];

$conn=mysqli_connect('localhost','root','','sms');
$sql="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($conn,$sql);
$std=mysqli_fetch_assoc($result);

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
        <div class="col-md-3">
            <a class="btn btn-info" href="index.php">Student List</a>

        </div>
        <div class="col-md-9">
            <h2>Edit  Student</h2>
            <hr>
            <form action="update.php?id=<?php echo $id ?>" method="POST">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input required type="text" class="form-control" name="name" placeholder="StudentName" value="<?php echo $std['name']?>">
                </div>
                <div class="form-group">
                    <label for="Age">Age</label>
                    <input required type="text" class="form-control" name="age" placeholder="StudentAge" value="<?php echo $std['age']?>">
                </div>
                <div class="form-group">
                    <label for="Roll">Roll</label>
                    <input type="text" class="form-control" name="roll" placeholder="StudentRoll" value="<?php echo $std['roll']?>">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="StudentAddress" value="<?php echo $std['address']?>">
                </div>
                <div class="form-group">
                    <label for="Mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="StudentMobile" value="<?php echo $std['mobile']?>">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
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
