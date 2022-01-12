<?php
    if(isset($_POST['star'])){
        header('Location:login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRODUCTION</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="text-align:center;margin-top:30%;">
        <h1 class="text-primary">Co-ordination speed test</h1>
        <p>In this test we are going to measure the hand and eye co-ordination speed. Words or pictures will be displayed. Mark 1 or 2 according to instructions given </p>
        <form action="index.php" method="post">
            <button type="submit" class="btn btn-primary" style="padding:5px 30px;" name="star">Start</button>
        </form>
    </div>
</body>
</html>