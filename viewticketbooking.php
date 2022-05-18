<!DOCTYPE html>
<html>
    <head>
        <title>
            ViewBooking
        </title>
        <style>
            body{
                background-image:url(images/showbookingbackground.jpg);
                background-size:1500px
            }
            
            
            .box{
                border: 3px solid;
                padding: 10px;
                box-shadow: 5px 5px 5px 5px #888888;
                margin: 10% auto 10% auto;
                width: 30%;
                height:500px;
                background:white;
            }
        </style>
    </head>
    <div class = 'box'>
        <?php
            $fullname = $_GET['fn'];
            $phoneNo = $_GET['ph'];
            $noOfSeats = $_GET['s'];
            $emailId = $_GET['em'];
              
            echo "<h1 align = 'center'>Details</h1>";
            echo "</br>";
            echo "<h1>Name: {$fullname}</h1>";
            echo "<h1>Phone No: {$phoneNo}</h1>";
            echo "<h1>No. of seats: {$noOfSeats}</h1>";
            echo "<h1>Email Id: {$emailId}</h1>";
            
            ?>
    </div>
</html>
  

