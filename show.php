<?php
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
    <title>Simple CRUD Applicaton</title>

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
            <a class="btn btn-info" href="index.php">Student</a>

        </div>
        <div class="col-md-9">
            <h2>Student Information</h2>
            <hr>
            <table class="table">
                <tr>
                    <th width="100" class="text-right"></th>
                    <td></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Name:</th>
                    <td><?php echo $std['name'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Age:</th>
                    <td><?php echo $std['age'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Roll:</th>
                    <td><?php echo $std['roll'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Address:</th>
                    <td><?php echo $std['address'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Mobile</th>
                    <td><?php echo $std['mobile'];?></td>
                </tr>

            </table>


        </div>
    </div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
