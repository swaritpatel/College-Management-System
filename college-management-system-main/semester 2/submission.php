<?php
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
    $contact= $_POST['contact'];
    $gender=$_POST['gender'];
    
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
     
    $sql="INSERT INTO content_form ( First_name, Last_name, Branch, Date_of_admission, Address, Email, password, Student_contact_no, Parent_contact_no)
     VALUES ( '$name', '$namelast', '$branch', '$date', '$mytext', 'email','password','$phone', '$contact')";   
     $result = mysqli_query($conn, $sql);  
if($result)
{
   echo "The db was created successfully last_id -> " ;
}
else
{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
    }
    ?>