<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $emaill = $_COOKIE["user"];
    $sql = "SELECT q1 FROM test4 where email='$emaill'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['q1']==""){
                
            }
            else{
                header('Location:realtest5.php');
                exit;
            }
         }
        
    } 

    date_default_timezone_set("Asia/Calcutta");
    $start = date('Y-m-d H:i:s');
    // Create connection
    $emaill = $_COOKIE["user"];
    $sql = "SELECT email FROM test4 where email='$emaill'";
    $result = $conn->query($sql);
    $email = "";
    if ($result->num_rows > 0) {

    } 
    else{
        $sql = "INSERT INTO test4 VALUES ('$emaill','$start','','','','','','','','','','','','','','','','','')";
        if ($conn->query($sql) === TRUE) {     
            
        } 
        else {
            echo "error";
        }
    }

    if(isset($_POST['next1'])){
        $x1 = $_POST['optradio0'];
        $x2 = $_POST['optradio1'];
        $x3 = $_POST['optradio2'];
        $x4 = $_POST['optradio3'];
        $x5 = $_POST['optradio4'];
        $x6 = $_POST['optradio5'];
        $x7 = $_POST['optradio6'];
        $x8 = $_POST['optradio7'];
        $x9 = $_POST['optradio8'];
        $x10 = $_POST['optradio9'];
        $x11 = $_POST['optradio10'];
        $x12 = $_POST['optradio11'];
        $x13 = $_POST['optradio12'];
        $x14 = $_POST['optradio13'];
        $x15 = $_POST['optradio14'];
        $x16 = $_POST['optradio15'];
        $emaill = $_COOKIE["user"];
        if($x1!="" && $x2!="" && $x3!="" && $x4!="" && $x5!="" && $x6!="" && $x7!="" && $x8!="" && $x9!="" && $x10!="" && $x11!="" && $x12!="" && $x13!="" && $x14!="" && $x15!=""){
            date_default_timezone_set("Asia/Calcutta");
            $end = date('Y-m-d H:i:s');
            $emaill = $_COOKIE["user"];
            $sql = "UPDATE test4 SET q1='$x1',q2='$x2',q3='$x3',q4='$x4',q5='$x5',q5='$x5',q6='$x6',q7='$x7',q8='$x8',q9='$x9',q10='$x10',q11='$x11',q12='$x12',q13='$x13',q14='$x14',q15='$x15',q16='$x16',endtime='$end'  WHERE email='$emaill'";
            if ($conn->query($sql) === TRUE) {      
                header('Location:realtest5.php');
                exit;
            } else {
                echo "error";
            }

        }
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <form action="starttest4.php" method="post">
        <div id="myCarousel" class="carousel slide" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
                <li data-target="#myCarousel" data-slide-to="8"></li>
                <li data-target="#myCarousel" data-slide-to="9"></li>
                <li data-target="#myCarousel" data-slide-to="10"></li>
                <li data-target="#myCarousel" data-slide-to="11"></li>
                <li data-target="#myCarousel" data-slide-to="12"></li>
                <li data-target="#myCarousel" data-slide-to="13"></li>
                <li data-target="#myCarousel" data-slide-to="14"></li>
                <li data-target="#myCarousel" data-slide-to="15"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="padding-top:30%;padding-bottom:25%;">
                <div class="item active" style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s2.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio1">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio0" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio2">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio0" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>   
                    <img src="images/s3.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio3">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio1" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio4">
                                <input type="radio" class="form-check-input" id="radio4" name="optradio1" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n2.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio5">
                                <input type="radio" class="form-check-input" id="radio5" name="optradio2" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio6">
                                <input type="radio" class="form-check-input" id="radio6" name="optradio2" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s4.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio7">
                                <input type="radio" class="form-check-input" id="radio7" name="optradio3" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio8">
                                <input type="radio" class="form-check-input" id="radio8" name="optradio3" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n5.jpg" alt="" style="margin-left:15%;" width="70%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio9">
                                <input type="radio" class="form-check-input" id="radio9" name="optradio4" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio10">
                                <input type="radio" class="form-check-input" id="radio10" name="optradio4" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s5.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio11">
                                <input type="radio" class="form-check-input" id="radio11" name="optradio5" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio12">
                                <input type="radio" class="form-check-input" id="radio12" name="optradio5" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s6.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio13">
                                <input type="radio" class="form-check-input" id="radio13" name="optradio6" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio14">
                                <input type="radio" class="form-check-input" id="radio14" name="optradio6" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n6.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio15">
                                <input type="radio" class="form-check-input" id="radio15" name="optradio7" value="option1" required > 1
                            </label>
                            <label class="form-check-label" for="radio16">
                                <input type="radio" class="form-check-input" id="radio16" name="optradio7" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n7.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio17">
                                <input type="radio" class="form-check-input" id="radio17" name="optradio8" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio18">
                                <input type="radio" class="form-check-input" id="radio18" name="optradio8" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                   <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s1.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio19">
                                <input type="radio" class="form-check-input" id="radio19" name="optradio9" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio20">
                                <input type="radio" class="form-check-input" id="radio20" name="optradio9" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s2.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio21">
                                <input type="radio" class="form-check-input" id="radio21" name="optradio10" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio22">
                                <input type="radio" class="form-check-input" id="radio22" name="optradio10" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n2.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio23">
                                <input type="radio" class="form-check-input" id="radio23" name="optradio11" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio24">
                                <input type="radio" class="form-check-input" id="radio24" name="optradio11" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                   <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n7.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio25">
                                <input type="radio" class="form-check-input" id="radio25" name="optradio12" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio26">
                                <input type="radio" class="form-check-input" id="radio26" name="optradio12" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/s7.jpeg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio27">
                                <input type="radio" class="form-check-input" id="radio27" name="optradio13" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio28">
                                <input type="radio" class="form-check-input" id="radio28" name="optradio13" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n3.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio29">
                                <input type="radio" class="form-check-input" id="radio29" name="optradio14" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio30">
                                <input type="radio" class="form-check-input" id="radio30" name="optradio14" value="option2"> 2
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item " style="padding:20px;"> 
                    <p style="margin-left:11%;">South Indian</p>
                    <p style="margin-left:65%;margin-top:-9%;">North Indian</p>  
                    <img src="images/n1.jpg" alt="" style="margin-left:25%;" width="50%">
                    <div style="margin-left:40%;margin-bottom:25%;margin-top:15%;">
                        <div class="form-check">
                            <label class="form-check-label" for="radio31">
                                <input type="radio" class="form-check-input" id="radio31" name="optradio15" value="option1" required> 1
                            </label>
                            <label class="form-check-label" for="radio32">
                                <input type="radio" class="form-check-input" id="radio32" name="optradio15" value="option2"> 2
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-left:40%;" name="next1">Next</button>
                </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-color:white;">
                <span class="glyphicon glyphicon-chevron-left" ></span>
                <span class="sr-only">Next</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-color:white;">
                <span class="glyphicon glyphicon-chevron-right" ></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </form>

</body>
</html>
