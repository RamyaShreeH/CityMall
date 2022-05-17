<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookingStatus</title>
    <script src="https://kit.fontawesome.com/16048488ea.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-color : white;
            
        }
        .icon{
            color:green;
            margin: 10% 30% auto 45%;
        }
        .box{
            border: 3px solid;
            padding: 10px;
            box-shadow: 5px 5px 5px 5px #888888;
            margin: 10% auto 10% auto;
            width: 30%;
            height:300px;
        }
    </style>
</head>
<body>
<div class = 'box'> 
<?php

    $servername="localhost";
    $username="root";
    $password="";
    $db="booking";

    $con=mysqli_connect($servername,$username,$password,$db);

    $fullname=$_POST['fullname'];
    $phoneNo=$_POST['phone'];
    $noOfTables=$_POST['tables'];
    $emailId=$_POST['emailId'];
    $sql="insert into tablebooking(name,phoneNo,noOfTables,emailId)values('$fullname','$phoneNo','$noOfTables','$emailId');";

    $a=mysqli_query($con,$sql);
    if(!$a){
        echo "<h1 align = 'center'>Oops! Something went wrong, try again.";
    }
    else {
        echo "<i class = 'icon fa-solid fa-circle-check fa-4x'></i>";
        echo "<h1 align = 'center'>Booking successful</h1>";
        echo "<a href='viewtablebooking.php?fn=$fullname&ph=$phoneNo&t=$noOfTables&em=$emailId'>
        <h1 align = 'center'>View Details</h1>
        </a>";
    }
?>
</div>
</body>
</html>