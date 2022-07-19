<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script type="text/javascript" src="clock.js"></script>
    </script>
    <style>
        html{scroll-behavior:smooth;}
        #sec1{
       background-color:rgb(206, 230, 142);}
        .footer{
          font-family: Georgia, 'Times New Roman', Times, serif;
          text-align: center;
          color: brown;
         }
         .f1{
          width: 450px; 
          height:200px;
          border-radius: 3px;
         }
        </style>
    
    
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="clo.css">


    
</head>
<body >
<nav class="blank">
    <div class="blan"></div>
</nav>   
   <nav id="navbar">
    <div class="logo" id="logo1">
        <ul class="list">
          <li class="navitem"><a class="lin" href="#">Home</a>
           
          <li class="navitem"><a class="lin" href="#">Gallery</a></li>
          <li class="navitem"><a class="lin" href="/asmitweb/form.php">Form</a></li>
        
          <li class="navitem"><a class="lin" href="#sec1">Contact Us </a></li>
          <li class="navitem"><a class="lin" href="#sec1">About Us</a></li>
          <li class="navitem1"><a class="lin" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm">Payment</a></li>
          <li class="buttn"><input class="blue-button"  value="logout" placeholder="logout" onclick="check1()"></li>
          <li class="buttn"><input class="blue-button"  value="update" placeholder="update" onclick="hide()"></li>
        
          


        </ul>
    </div>
   </nav>
  
      
      <div class="full">
          <div class="student">
          
          <div class="link"><ul> <li><a href="/asmitweb/attendence.php" >Attendence</a> </li></ul></div>
          
        <div class="grades"><ul> <li><a href="#" > Grades</a></li></ul></div>
         <div class="mec"> <ul> <li><a href="/asmitweb/maths.html" class="mech">Mathematics</a></li>
         <li><a href="cp.html" class="mech">Computer Programming</a></li>
          <li><a href="Database.html" class="mech">Database</a></li>
         <li><a href="machenics-graphics.html" class="mech">Mechanics and Graphics</a></li>
          <li><a href="DigitalE.html" class="mech">Digital Electronics</a></li></ul></div>
          <ul>
          
        
          </div>
         
          <div class="personal">
          <h2>Your Profile</h2>

   
  
   <?php
// if(isset($_POST['submit'])){
//     $address=array($_POST["name"],$_POST["namelast"],$_POST["branch"],$_POST["date"],$_POST["myText"], $_POST["email"],$_POST["phone"],$_POST["contact"],$_POST["gender"]);
//  } 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a1";

$conn = mysqli_connect($servername, $username,$password, $dbname);

if(!$conn)
   die("connection is failed : ". mysqli_connect_error() );
   else {
       echo "connected successfully <br>";
   }
  $usn=$_SESSION['username'];
   $sql=" SELECT * FROM mytable WHERE user_name='$usn' ";
   $result = $conn->query($sql);  //running query after selecting all containt from content_form

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
      $address=array($row["First_name"],$row["Last_name"],$row["Branch"],$row["Date_of_admission"],$row["Address"],$row["Email"],$row["student_contact"],$row["gender"]);
    
   
    echo "<p style='color:black; font-size: 17px; font-family: system-ui;  margin-left: 10rem;'>First Name : $address[0]  <button onlick='update_first_name()'>Update</button></p>";
    echo "<p style='color:black; font-size: 17px; font-family: system-ui;  margin-left: 10rem;'>Last Name : $address[1] <button >Update</button></p>";
    echo "<p style='color:black; font-size: 17px; font-family: system-ui;  margin-left: 10rem;'>Branch : $address[2] <button >Update</button></p>";
    echo "<p style='color:black; font-size: 17px; font-family: system-ui;  margin-left: 10rem;'>Date Of Admission :$address[3] <button >Update</button></p>";
    echo "<p style='color:black; font-size: 17px; font-family: system-ui;  margin-left: 10rem;'>Address : $address[4] <button >Update</button></p>";
    echo "<p  style='color:black; font-size: 17px; margin-left: 10rem;'>Email Id : $address[5]  <button >Update</button></p>";
    echo "<p  style='color:black; font-size: 17px;  margin-left: 10rem;'>Student's Phone Number : $address[6] <button >Update</button></p>";
    echo "<p  style='color:black; font-size: 17px;  margin-left: 10rem;'>Gender : $address[7] <button >Update</button></p>";
    // echo "<p  style='color:black; font-size: 17px;  margin-left: 10rem;'>Gender : $address[8]</p>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

 ?>
 

          </div>
      </div>
      <div id="update_l">
          
  
          <input type="submit" value="Submit" placeholder="Enter your name">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "a1";
          
          $conn = mysqli_connect($servername, $username,$password, $dbname);
          
          if(!$conn)
             die("connection is failed : ". mysqli_connect_error() );
             else {
                 echo "connected successfully <br>";
             }
            $usn=$_SESSION['username'];
        $sql="UPDATE `mytable` SET `First_name` = 'submit' WHERE user_name='$usn'";
        $result = mysqli_query($conn, $sql);
      echo var_dump($result);
      $aff = mysqli_affected_rows($conn);
      echo "<br>Number of affected rows: $aff <br>";
      if($result){
          echo "We updated the record successfully";
      }
      else{
          echo "We could not update the record successfully";
      }
      $conn->close();
      ?>
      
        
                </div>      
      <div id="sec1">
    <footer><br>
     <section  style="display: flex;">
       <section> <fieldset class="f1">
        <legend class="footer"><u>Contact Us</u></legend>
       <ul type="circle">
         <li><a  style="padding: 6;margin:0px ;border:2px solid gainsboro;background-color:gainsboro;border-radius: 3px;"" href="mailto:university123@gmail.com">send mail</a><i>to university123@gmail.com</i></li>
   <br>
    <li>&nbsp;<i style="font-size:24px" class="fa">&#xf2a0;</i>&nbsp;Call On:+91890xxxx050 , +91637xxxx274</li>
   <p><li>FAX No.: +91-022-39xxxx  </li> </p></ul>                                         
   </fieldset></section>
  
  <!-- <aside style="float: right;"> -->
   <section> <fieldset class="f1" >
      <legend class="footer" ><u>About Us</u></legend><br/><br/>
<center > Best University since 2011</center>
    </fieldset>
  </section>
  <section>
    <fieldset class="f1">
      <legend class="footer" ><u>Find Us in Map</u></legend>
      <iframe src="https://goo.gl/maps/VvxrxwzZiWLm9fLG7"
       width="450px" height="185px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </fieldset>
               </section>
    </section>
    <footer style="text-align: center; background-color: cornflowerblue;">
      &copy; Copyright 2011 University
    </footer>
  </footer>
</div>
    
<script language="javascript">
     for(i=0;i<document.querySelectorAll("button").length;i++)
    {
        document.querySelectorAll("button")[i].style.visibility="hidden";
    }
      function check1()
{
    // window.open("/semester/logout.php")
    window.location.replace("http://localhost/semester/logout.php");
}
function check2()
{
    window.open("/asmitweb/signup.php")
    
}
function hide()
{
    var i;
  
    for(i=0;i<document.querySelectorAll("button").length;i++)
{
    var e=document.querySelectorAll("button")[i];
    if(e.style.visibility=="hidden")
        e.style.visibility="visible";
    else
        e.style.visibility="hidden";
}

  
function update_first_name()
{
    document.getElementById("update_l").html_entity_decode;
}


</script>
 
<script scr="/semester/update.js"></script>
</body>
</html>