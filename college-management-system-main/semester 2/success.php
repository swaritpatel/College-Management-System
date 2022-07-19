<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php
        $showAlert=false;
        $showError=false;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    $name=$_POST['name'];
    $namelast=$_POST['namelast'];
    $branch=$_POST['branch'];
    $date=$_POST['date'];
    $mytext= $_POST['myText'];
    $phone= $_POST['phone'];
    $email=$_POST['email'];
    $pass= $_POST['password'];
    $rpass = $_POST['rpassword'];
    $user = $_POST['user'];
    $p_contact= $_POST['contact'];
    $s_contact= $_POST['phone'];
    $gender=$_POST['gender'];
    echo "ran".$s_contact;
    
    //connecting to database
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
       $existSql = "select * from mytable WHERE user_name='$user'";
       $result = mysqli_query($conn,$existSql);
       $numExistRows = mysqli_num_rows($result);
       
       if($numExistRows>0){
           $showError = "Username Already Exists";
       }
       else
       {
       if(($pass == $rpass) )
       {
           $hash=password_hash($pass, PASSWORD_DEFAULT);
   $sql="INSERT INTO mytable ( First_name, Last_name, Branch, Date_of_admission, Address, Email,user_name, password, r_password,student_contact,gender)
     VALUES ( '$name', '$namelast', '$branch', '$date', '$mytext', '$email','$user','$hash','$hash','$s_contact', '$gender')";   
     $result = mysqli_query($conn, $sql);  
     if($result){
         $showAlert= true;
     }
    }
     else{
         $showError = "password do not match";
     }
       }
// if($result)
// {
//    echo "The db was created successfully last_id -> " ;
// }
// else
// {
//     echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
// }

  }  ?>
    <?php
     if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You submitted  the form successfully<br> 
        ><a href="signin.php">click to sign in your account</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
   
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    <h2</h2>;
</body>
</html>


