<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $user= $_POST["usern"];
    $pass = $_POST["passd"];

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
    //    $hash = $password_hash($pass);

    $sql = "select * from mytable WHERE user_name='$user'  ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo "hello".$num;
    
    if ($num == 1){
         while($row=mysqli_fetch_assoc($result)){
             if (password_verify($pass, $row['password'])){ 
                
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user;
                header("location: student_profile.php");
            } 
            
    else{
        $showError = "Invalid Credentials2";
    }
}
    }
} 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / signup </title>

</head>
<link rel="stylesheet" href="login.css">
<body alink="red" vlink="yellow" link="blue">
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    
<h1 style="text-align: center;">Login</h1> 
<h3 style="text-align: center;">Fill to login to your college account</h3> 
<div class="form">
   <form action="signin.php" method="POST">
       <b>User name : </b><input type="text" name="usern" size="20" maxlength="15"  placeholder="Enter Your User Name." required/>
     
       <b>Password : </b> <input type="Password" name="passd" size="20"  placeholder="Enter your password"/>
       <div class="sub">
       <input type="submit" value="Login" />
      
    </div>
     

   </form>
   <a onclcik="check1()" >New to College? Create an account (FORM HTML)</a>
   
</div>

<a href="home3.html" align="center" style="color: red;"><h2>PLEASE CLICK HERE TO GO TO DASHBOARD (login facility is not avalible)</h2> </a>
<script language="javascript">
        function check1()
  {
 //window.location.replace("https://semester/signin.php.com")
 window.location.replace("http://localhost/semester/signup.php");
 //window.open("localhost://semester/signin.php","_self")
  }
  
  </script>
</body>
</html>