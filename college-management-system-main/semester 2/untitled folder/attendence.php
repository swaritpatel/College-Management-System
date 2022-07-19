
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence</title>
    <style>
        .form{
    border: 5px solid rgb(236, 236, 236);
    border-radius: 20px;
    width: 20%;
    margin: auto;
    padding-left: 40px;
    padding-right: auto;
    background-image: url(./img/nav.jpg);
    background-size:cover;
    padding-top: 1vw ;
    padding-bottom: 1vw ;
    color: white;
    font-size: 18px;
    
 
  }
  h1{
    color: rgb(28, 25, 235)
  }
  body{
    background-color: rgb(237, 235, 238);}
    
  
    </style>
</head>
<body>
    <h1 style="text-align: center;">Please Mark Your Attendence</h1>  
    <div class="form">
    <form action="" method="POST">
    
    
   
    <form method="post" action="attendence.php">
       
       
        <div class="Attendence">
        <label >Are you Present for the online class <br></label>
            <label for="gender">Present:</label>
           
            
            <input type="radio" name="gender" id="male"  value="Present"/>
            <label for="gender">Absent:</label>
            <input type="radio" name="gender" id="Female" value="Absent"/>
            <label for="gender">Late:</label>
            <input type="radio" name="gender" id="Lat" value="Late"/>

        </div>
   
    <div><br>
        <input class="red-botton" type="submit" value="Submit Now" name="submit"/>

        <input class="blue-botton" type="reset" value="Reset Now" /> <br>
        
    </div>
    <div class="home"><a href="home.php">DASHBOARD</a></div>
  

</form>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
   echo "Attendence Is Recorded as ".$_POST['gender'];
}
   ?>
   
</body>
</html>
