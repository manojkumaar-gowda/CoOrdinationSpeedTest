<?php
    if(isset($_COOKIE['user'])){
        header('Location:test.php');
        exit;
    }
    if(isset($_POST['login'])){
        $name= $_POST['name1'];
        $email= $_POST['mail'];
        $age= $_POST['age'];
        $servername = "localhost";
        $username = "id16322329_rahul";
        $password = "4K6d7QVDk7X)9ycS";
        $dbname = "id16322329_iat";
        setcookie("user", $email, time() + (600*1500*6500), "/");
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT email FROM users where email='$email'";
        $result = $conn->query($sql);
        $mail = "";
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $mail = $row["email"];
          }
        } 
        if($email===$mail){
            header('Location:test.php');
            exit;
        }
        else{
            $sql = "INSERT INTO users VALUES ('$name', '$email', '$age')";
            if ($conn->query($sql) === TRUE) {
                header('Location:test.php');
                exit;
            } else {
                $msg = '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>An Error Occured</strong>
                        </div>';
                echo $msg;
            }
        }
        $conn->close();
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DETAILS</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="text-align:center;margin-top:30%;">
        <h1 class="text-primary">Enter Details</h1>
        <form method="post" action="login.php" style="margin-top:20%;">
            <div class="form-group">
                <input type="text" class="form-control" name="name1" id="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="mail" id="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
            <input type="number" class="form-control" name="age" id="age" max="100" placeholder="Enter Age" required>
            </div>       
            <button class="btn btn-primary" style="padding:5px 30px;" name="login" type="submit">Login</button>
        </form>
    </div>
</body>
</html>