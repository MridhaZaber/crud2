<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location:login.php");
}

$conn=mysqli_connect('localhost','root','','sms');
$sql="SELECT * FROM students";
$result=mysqli_query($conn,$sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simple CRUD Application</title>

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
            <a class="btn btn-info" href="insert.php">New Student</a>

        </div>
        <div class="col-md-9">
            <?php if(isset($_SESSION['success'])){
                ?>
            <div class="alert alert-success">
                <strong>Success!</strong><h1>Added successfully.</h1>
            </div>
            <?php
            }
            ?>
            <a class="btn btn-warning pull-right" href="logout.php">Logout</a>
            <h2>Student List</h2>
            <hr>
            <table class="table">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Roll</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Actions</th>
                </thead>

                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){?>


                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['roll']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['mobile']?></td>
                <td>
                    <a class="btn btn-info" href="show.php?id=<?php echo $row['id'];?>">view</a>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>


                </td>
                </tr>
                <?php } ?>


                </tbody>
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
<?php unset($_SESSION['success']);?>