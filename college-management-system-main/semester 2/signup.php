<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <h1 style="text-align: center;">Looks like you're new here!</h1>  
    <h3 style="text-align: center;">Sign up with your mobile number to get started</h3>
    <div class="form">
    
    
    
    <div class="contact-details">
        <form action="success.php" method="POST">
        First Name:<input type="text" name="name" placeholder="Enter First Name" required>
        <!-- Middle Name:<input type="text" name="name" placeholder="Enter Middle Name" required> -->
        Last Name:<input type="text" name="namelast" placeholder="Enter Last Name" required>
        Branch:<input type="text" name="branch" placeholder="Enter Your Branch Name" required>

        Date Of   Admission:<input type="date" name="date" placeholder="Enter Admission Date" required>

        <!-- Address:<input type="text" name="address" placeholder="Enter your local address"> -->
        Address:<textarea name="myText" cols="20" rows="10"  placeholder="Enter your local address" style="width : 279px; height : 70px;"></textarea>

        <!-- Permanent Address:<input type="text" name="address" placeholder="Enter Permanent address"> -->
        Email:<input type="email" name="email" placeholder="Enter Your Email" required>
        Create your username:<input type="text" name="user" placeholder="create your username" required>
        Password:<input type="password" name="password" placeholder="Enter your password" required>
        Password:<input type="password" name="rpassword" placeholder="Confirm your password" required>
        Student's Contact Number:<input type="number" name="phone" placeholder="Enter Your Phone" required minlength="10">
       Parent's Contact Number :<input type="number" name="contact" placeholder="Enter your parent's phone ">
        <div class="gender">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" id="male"  value="male">Male
            <input type="radio" name="gender" id="Female" value="female">Female
        </div>
   
    </div>
    <!-- <button type="submit" class="hero-btn red-btn">Submit</button> -->
    <div><br>
        <input class="red-botton" type="submit" value="Submit Now" name="submit">

        <input class="blue-botton" type="reset" value="Reset Now">
    </div>

</form>
</div>
</body>
</html>