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
    <title>Job Seeker Registration page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- NAVIGATION BAR -->
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
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
			
			
              <li><a href="company.php">Company</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="login.php">Login</a></li>
			  <li><a href="ass1.html">About us</a></li>
			  <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div class="div4">
	<img src="create2.gif" width="100%" height="300px">
	</div>
	
      <div class="container" id="registerbox">
        <div class="row">
          <div class="">
          <h2 class="text-center">Create Job Post</h2>
            <form method="post" action="addpost.php">
              <div class="form-group">
                <label for="jobtitle">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle" placeholder="Job Title" required="">
              </div>
              <div class="form-group">
                <label for="description">Job Description</label>
				
				<textarea  class="form-control"  id="description" name="description"  placeholder="Job Description"></textarea>
				
                
              </div>
              <div class="form-group">
                <label for="minimumsalary">Minimum Salary</label>
                <input type="text" class="form-control" id="minimumsalary" name="minimumsalary" placeholder="Minimum Salary" required="">
              </div>
              <div class="form-group">
                <label for="maximumsalary">Maximum Salary</label>
                <input type="text" class="form-control" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="">
              </div>
			  
			  <div class="form-group">
                <label for="experiencerequired">Experience Required</label>
                <input type="text" class="form-control" id="experiencerequired" name="experiencerequired" placeholder="Experience Required" required="">
              </div>
			  
			  
			  <div class="form-group">
                <label for="qualificationrequired">Qualification Required</label>
                <input type="text" class="form-control" id="qualificationrequired" name="qualificationrequired" placeholder="Qualification Required" required="">
              </div>
			  
              <div class="text-center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
			   <?php 
              if(isset($_SESSION['registrationError'])) {
                ?>
                <div>
                  <p class="text-center">This Email is already exits!Choose another email for registration</p>
                </div>
              <?php
			  unset($_SESSION['registrationError']); }
              ?>     
              
            </form>
          </div>
        </div>
      </div>
	  
	  <div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
  <h3>Attention!!</h3>
  <p>Please dont create any kind of fake job posts.If any one do this the admin can cancel your ID from the website.</p>
</div>
    
	
	

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

  </body>
</html>