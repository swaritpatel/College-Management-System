<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University WebPage</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;600;700&display=swap" rel="stylesheet"> 
</head> 
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">COURSE</a></li>
                    <li><a href="">CONTACT</a></li>
                    <li><input class="blue-button"  value="login" placeholder="LOGIN" onclick="check1()"></li>
                </ul>
            </div>
        </nav>
    <div class="text-box">
        <h1>XYZ Institute of Technology</h1>
        <p>The fundamental objective of the institution is to allow each student to meet his or her individual goal in life, through industry oriented knowledge. Students are encouraged to follow dreams and ambitions in a rational and sustainable manner. The individual is expected to improve professional growth via creativity, ingenuity, expert training and critical analysis. School of Engineering, University of Petroleum and Energy Studies, Dehradun facilitates science, technology incubation and development to meet the most demanding needs of the society and country.</p>
        <a href="" class="hero-btn">Visit us to know More</a>
    </div>
    </section>
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>We offer various technical courses in engineering upto Doctrate level.</p>
        <div class="row">
            <div class="course-col">
            <h3>B.Tech</h3>
            <p>Bachelor of Technology (BTech) is a professional undergraduate engineering degree programme awarded to candidates after the completion of four years of study in the field. Engineering is one of the most popular courses in India and there are many institutes that offer the course to aspiring students. For admissions, the most common BTech entrance examination is JEE</p>
        </div>
        
        
        
            <div class="course-col">
            <h3>M.Tech</h3>
            <p>In India, this master degree is regulated under the aegis of University Grants Commission of India (UGC), All India Council for Technical Education (AICTE) and National Board of Accreditation (NBA). Admissions to ME/MTech programmes offered by technical colleges and universities in India is made through a National level/State-level/Institute-level engineering entrance examination.</p>
        </div>

    
            <div class="course-col">
            <h3>Phd</h3>
            <p>A PhD is a doctoral research degree and normally the highest level of academic qualification you can achieve. The degree normally takes between three and four years of full-time work towards a thesis offering an original contribution to your subject.</p>
        </div>
        </div>
    </section>


    </section>
   
       <section class="container" id="asmit">
           <div class="box" id="box1"><h2>Library</h2><img src="images/library.jpg" alt=""> </div>
           <div class="box" id="box1"><h2>Hostel<h2><img src="images/hostel.jpg" alt="">
        </div>
           <div class="box" id="box1"><h2>Laboratory</h2><img src="images/lab.jpg" alt="">
           
       </section>
    <script language="javascript">
        function check1()
  {
      window.open("/asmitweb/logi.php")
  }
  
  </script>
  
</body>
</html>