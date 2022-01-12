<?php
    if(isset($_POST['ready'])){
        header('Location:realtest.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div >
    <h1 class="text-primary" style="width:60%;text-align:center;margin-left:20%">Instructions</h1>
  <div id="myCarousel" class="carousel slide" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="margin-top:5%">
      <div class="item active" style="padding:20px;">
        <p style="width:60%;text-align:left;margin-left:15%">In this task, a set of words and images will be presented for you to classify into groups. This task requires that you classify items as quickly as you can while making as few mistakes as possible. Going too slow or making too many mistakes will result in an uninterpretable score. This part of the study will take about 5 minutes. The following is a list of categories and the items that belong to the categories.</p>
        <table class="table container">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Items</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Good</td>
                    <td>Healthy, polite, unity, loyal, innocent, charming, pleasant/calm, empathy, love, confident, religious</td>
                </tr>
                <tr>
                    <td>Bad</td>
                    <td>greed, poverty, illiteracy, cunning, unhygienic, cruel, terrorism, abuse, lazy</td>
                </tr>
                <tr>
                    <td>North Indian</td>
                    <td>Faces of North Indian</td>
                </tr>
                <tr>
                    <td>South Indian</td>
                    <td>Faces of South Indian</td>
                </tr>
            </tbody>
        </table>
      </div>
    
      <div class="item" style="padding:20px;">
        <h1 style="width:60%;text-align:center;margin-left:15%" class="text-primary">Keep your mind</h1>
        <p style="width:60%;margin-left:15%">- Keep your fingers on the '1' and '2' keys to enable rapid response</p>
        <p style="width:60%;margin-left:15%">- Two labels at the top will tell you which words or faces go with each key.</p>
        <p style="width:60%;margin-left:15%">- Each word or face has a correct classification. Most of these are easy.</p>
        <p style="width:60%;margin-left:15%">- The test gives no results if you go slow -- Please try to go fast.</p>
        <p style="width:60%;margin-left:15%">- Expect to make a few mistakes because of going fast. That's OK.</p>
        <form action="test.php" method="post">
            <button type="submit" class="btn btn-primary" style="margin-left:30%;margin-bottom:7%;" name="ready">I am Ready</button>
        </form>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-color:white;">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-color:white;">
      <span class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>