<?php
    if(isset($_POST['starttest3'])){
        header('Location:starttest3.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OVERVIEW 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div >
    <h1 class="text-primary" style="margin-top:55%;width:60%;text-align:center;margin-left:20%">Start Test</h1>
    <p style="margin-top:15%;text-align:center;" class="container">During this phase of the experiment, you will see the two concept names shown at the top of the screen. Press 1 for North-Indian faces or Bad words described by the left concept name and 2 for South-Indian faces or Good names described by the right concept name</p>
    <form action="realtest3.php" method="post">
        <button type="submit" class="btn btn-primary" style="margin-left:35%;margin-bottom:7%;" name="starttest3">I am Ready</button>
    </form>
</div>

</body>
</html>