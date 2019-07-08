<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Search_bd Home Page</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	 
	 <link rel="stylesheet" href="style1.css"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style> 
	 
	 
  </head>
  
  <body class="hold-transition skin-green sidebar-mini">  
       <!-- NAVIGATION BAR -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light"    >
        <div class="container-fluid">
		
		  <marquee behavior="alternate" bgcolor="skyblue">Job_Search_bd.com</marquee>
	
	  <marquee direction="right" bgcolor="gray"><font color="white">50 Saleswoman wanted!!!  submit your CV Part time Job for CSE students!!!</font></marquee>
	
	
	

		
		
		
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
            </button>
			
            <a class="navbar-brand" href="#">Job Search_bd.com</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
            <ul class="nav navbar-nav navbar-right">
			
			     <?php
            if(isset($_SESSION['id_user'])) {
              ?>
              <li><a href="user/dashboard.php">Dashboard</a></li>
              <li><a href="logout.php">Logout</a></li>
            <?php
            } else { ?>
			
			
			  <li><a href="map.php">Map</a></li>
              <li><a href="company.php">Company</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
			  <li><a href="ass1.html">About us</a></li>
			  <li><a href="contactustwo.php">Contact us</a></li>
			  <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
	
	
	
	
	
	<!--imageslider-->
	
	<div id="container">
	
	
		     <img class="slides" src="slider/nav3.gif"/>
			<img class="slides" src="slider/nav2.gif"/>
			
			<img class="slides" src="slider/nav6.gif"/>
			<img class="slides" src="slider/bdjobs.gif"/>
			 <img class="slides" src="slider/nav4.gif"/>
			 <img class="slides" src="slider/1.jpg"/>
			
			
			
			<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
		<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
         </div>	
	</body>
	
	<script>
	    var index=1;
		
		function plusIndex(n){
		
		    index=index+n;
			showImage(index);
		
		}
		
		
		showImage(1);
		
		function showImage(n){
		
		     var i;
		     var x=document.getElementsByClassName("slides");
			 
			 if(n >x.length)
			 {
			     index=1;
			 }
			 
			 
			 
			 if(n<1)
			 {
			     index=x.length;
			 }
			 
			 for(i=0;i<x.length;i++){
			 
			    x[i].style.display ="none";
			 
			 }
		        x[index-1].style.display="block";	 
		
		
		}
		
		autoSlide();
		function autoSlide(){
		    
			 var i;
		     var x=document.getElementsByClassName("slides");
			 
			 for(i=0;i<x.length;i++){
			 
			    x[i].style.display ="none";
			 
			 }
			 
			     if(index>x.length){index=1};
		         x[index-1].style.display="block";

                 index++;				
		         SetTimeout(autoSlide,2000);
		
		
		}
	
	</script>


	
	
	
	
	
	<section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron text-center">
              <h1>Job Search_bd.com</h1>
			  <img src="jobsearch.gif" height="80" width="100">
              <p>Find Your Dream Job In Bangladesh</p>
			  
              <p><a class="btn btn-primary btn-lg" href="search-first.php" role="button">Search Jobs</a></p>
			  
			  
			  <div class="dropdown" style="float:left;">
  <button class="dropbtn">Top GOVT JOBs</button>
  <div class="dropdown-content" style="left:0;">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
			  
			  
			  <div class="dropdown" style="float:right;">
  <button class="dropbtn">8 Major Division of BD job posts</button>
  <div id="myDropdown" class="dropdown-content">
   <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#">Dhaka</a>
    <a href="#">Chittagong</a>
    <a href="#">Khulna</a>
	<a href="#">Rajshahi</a>
    <a href="#">Rangpur</a>
    <a href="#">Sylhet</a>
	<a href="#">Mymensingh</a>
	<a href="#">Barisal</a>
  </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	    <!-- LATEST JOB POSTS -->
  <!--  <section>
      <div class="container">
        <div class="row">
          <h2 class="text-center">Latest Job Posts</h2>
          <div class="col-md-6">
            <h3>Title 1</h3>
            <p>This is a Software company.</p>
            <button class="btn btn-default">View</button>
          </div>
          <div class="col-md-6">
            <h3>Title 2</h3>
            <p>This is a Business company.</p>
            <button class="btn btn-default">View</button>
          </div>
          <div class="col-md-6"> 
		 
            <h3>Title 3</h3>
            <p>This is an Agricultural company.</p>
            <button class="btn btn-default">View</button>
          </div>
          <div class="col-md-6">
            <h3>Title 4</h3>
            <p>This is a UNILIVER company.</p>
            <button class="btn btn-default">View</button>
          </div>
        </div>
      </div>
	  
	  
	  
	  
    </section>
	-->
	
	
	 <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-bottom-20">
            <h1 class="text-center">Latest Jobs</h1>            
            <?php 
          /* Show any 4 random job post
           * 
           * Store sql query result in $result variable and loop through it if we have any rows
           * returned from database. $result->num_rows will return total number of rows returned from database.
          */
		  
		  
		  $conn = mysqli_connect( "localhost" , "root" , "" , "job");
		     
			 if($conn-> connect_error){
				 
				 die("Connection Failed :" . $conn-> connect_error);
				 
				 
			 }
		   
          $sql = "SELECT * FROM job_post Order By Rand() Limit 4";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
             
             ?>
            <div class="attachment-block clearfix">
              <img class="attachment-img" src="front1.gif" alt="Attachment Image">
              <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="view-diff-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a> <span class="attachment-heading pull-right">$<?php echo $row['maximumsalary']; ?>/Month</span></h4>
                <div class="attachment-text">
        
                </div>
              </div>
            </div>
          <?php
              
            }
            }
          
          ?>

          </div>
        </div>
      </div>
    </section>

	
	
	
	
	<!-- COMPANIES LIST -->
    <section>
      <div class="container">
        <div class="row">
          <h2 class="text-center">Companies List</h2>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="..." alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="..." alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="..." alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="..." alt="...">
            </a>
          </div>
        </div>
      </div>
    </section>


	
	
	<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>

 
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	  
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		  
		  
		  
		  
		 <script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	 <footer class="w3-container w3-teal w3-center w3-margin-top">
	 
	 <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
	 
  <p>Find us on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity" ></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="index.php" target="_blank">Job Search_bd.com</a></p>
</footer>
  

		  
	</body>
</html>
