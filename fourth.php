<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="mediaquery.css" />
    <title>Oneburner</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
      <div class="dropdown">
  <div class="dropbtn"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product
        </a></div>
          <div class="dropdown-content"style="padding-top:20px">
            <div class="dropdown-content d-flex justify-content-around bg-white">
              <div style="margin-right:2%;width:250px">
                <h5 class="font-weight-bold">Clients</h5>
                <p class="text-muted">See the amazing team that uses Oneburner</p>
              </div>
              <div style="margin-right:2%;width:250px">
                <h5 class="font-weight-bold">Oneburner Stores</h5>
                <p class="text-muted">Explore our ready made solutions to expand your business.</p>
              </div>
              <div style="margin-right:2%;width:250px">
                <h5 class="font-weight-bold">Integrations</h5>
                <p class="text-muted">Connect different solution to one burner and get more done</p>
              </div>
              <div style="margin-right:2%;width:250px">
                <h5 class="font-weight-bold">Why Oneburner?</h5>
                <p class="text-muted">Learn more about our features, success rates, benefits and demo.</p>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="second.php">Enterprise</a>
      </li>
    </ul>  
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="third.php">Contact Sales</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<section class="my-30 signin">
  <div style="padding-top:10%">
      <h2 class="text-center">Sign In</h2> 
  </div>
  <div class="w-50 m-auto">
      <form action="validation.php" method="post">
         <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" auto-complete="off" class="form-control"required>    
         </div>  
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" auto-complete="off" class="form-control"required>    
         </div>  
         <button type="submit" class="btn button">Login</button>
         <p><a href="forget_pass.php">Forgot password</a></p>
         <p>Don't have an account?<a href="fifth.php">Signup</a>    </p>
      </form>
  </div>
</section>     

<section class="my-5">
    	<div class="container-fluid">
        	<div class="row">
         		<div class="col-lg-4 col-md-12 col-12" style="transform:translateY(-100px)">
				    <img src="images/logo.jpg" class="img-fluid">
					<h4>No 1 CRM solution in Africa </h4> 
					<p>Terms of Use | Privacy Policy </p>
					<br>
					<br>
					<p>Get in touch</p>
					<p>+234-80-000-0000</p>
					<span><i class="fab fa-facebook-square"></i></span>
	  				<span><i class="fab fa-twitter-square"></i></span>
	  				<span><i class="fab fa-linkedin"></i></span>
	  				<span><i class="fab fa-youtube-square"></i></span>
				</div>
		        <!--<div class="col-lg-6 col-md-6 col-12 d-flex justify-content-around"> -->
					<div class="col-lg-2 col-md-6 col-6 list">
	 					<p style="font-weight:bold">PRODUCT</p>	 
	 					<ul>
							<li>Features</li>
	 						<li>Enterprise</li>
	 						<li>Security</li>
	 						<li>Trust</li>
	 						<li>Customer Stories</li>
	 						<li>Pricing</li>
							<li>Integrations</li>
	 						<li>Oneburner Partners</li>
	 					</ul>
	 				</div>
					<div class="col-lg-2 col-md-6 col-6 list">
	 					<p style="font-weight:bold">COMPANY</p>	 
	 					<ul>
	 						<li>About Us</li>
	 						<li>Contact Us</li>
							<li>Careers</li>
	 						<li>In the News</li>
	 					</ul>
	 				</div>
					<div class="col-lg-2 col-md-6 col-6 list">
	 					<p style="font-weight:bold">ONEBURNER FOR TEAMS</p>	 
	 					<ul>
	 						<li>Engineering</li>
	 						<li>Financial Services</li>
	 						<li>CRM and Sales</li>
	 						<li>IT</li>
	 						<li>Marketing</li>
							<li>Customer Support</li>
	 						<li>Human Resources</li>
	 						<li>Project Management</li>
	 						<li>Remote Work</li>
	 					</ul>
	 				</div>
	 				<div class="col-lg-2 col-md-6 col-6 list">
	 					<p style="font-weight:bold">RESOURCES</p>	 
	 					<ul>
	 						<li>Community</li>
	 						<li>Guides</li>
	 						<li>Templates</li>
	 						<li>Video Tutorials</li>
	 						<li>Professional Services</li>
	 						<li>Knowledge Base</li>
	 						<li>Blog</li>
	 						<li>Webinar</li>
	 						<li>Find a Partner</li>
	 					</ul>
					</div>
         		<!--</div>-->
      		</div>
    	</div>  
	</section>
	<hr>
	<footer>
	<p>&copy;2020 Oneburner.com. All Rights Reserved.</p>
  
    </footer>

<script src="main.js" > </script>
</body>
</html>