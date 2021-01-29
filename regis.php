<?php>

?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="JavaScript Form Validation" />
	<meta name="description" content="GPIT Page">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<img src= "great.png"/>
	<title> GPIT PROJECT Java Script Form</title>
		<link rel="stylesheet" type="text/css" href="styles.css" media ="screen"/>
		

</head>
<body>
	
	<header>
		<div class="nav" id="myTopnav">
			
		<a href="#about"><i class="fa fa-users"></i>About</a>
		<a href="#contact"><i class="fa fa-phone"></i>Contact Us</a>
		<a>
		<div class="dropdown">
    		<button class="dropbtn"><i class="fa fa-user"></i>Courses
    		</button>
    			<div class="dropdown-content">
      				<a href="#">C++</a>
      				<a href="#">Java</a>
      				<a href="#">Python</a>
    			</div>
  			</div></a>
		<a href="#Home"><i class="fa fa-home"></i>Home</a>  		
	</div>
		<h1>Great Place to Work</h1>
		<p>In Collabration with Great Place IT services</p>
	</header>
	<!--<div class="wrapper">
		<div class="sidebar">
		<a href="#"><i class="fa fa-home"></i>Home</a><br>
		<a href="#"><i class="fa fa-phone"></i>Contact Us</a><br>
		<a href="#"><i class="fa fa-user"></i>Courses</a><br>
		<a href="#"><i class="fa fa-users"></i>About</a>			
		</div>
		<form action="action_page.php">
		<div class="main">-->
			

	<div class="container"><br>
		
		<div class="col-lg-6 m-auto d-block">
			
			<form action="#" onsubmit="return validation()" class="bg-light">
				
				<div class="form-group">
					<label for="user" class="font-weight-bold"> Name: </label>
					<input type="text" name="user" class="form-control" id="user" >
					<br><span id="username" class="text-danger font-weight-bold"> </span>
				</div><br>

				<div class="form-group">
					<br><label class="font-weight-bold"> Email: </label>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<br><span id="emailids" class="text-danger font-weight-bold"> </span>
				</div><br>

				<div class="form-group">
					<br><label class="font-weight-bold"> Password: </label>
					<input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
					<br><span id="passwords" class="text-danger font-weight-bold"> </span>
				</div><br>

				<div class="form-group">
					<br><label class="font-weight-bold"> Confirm Password: </label>
					<input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
					<br><span id="confrmpass" class="text-danger font-weight-bold"> </span>
				</div><br>

				<div class="form-group">
					<br><label class="font-weight-bold" id="btn1">Gender:</label><br>
 					<br>Male<input type="radio" name="coding" value ="Yes" id="male"/><br>
 					Female<input type="radio" name="coding" value ="No" id="female"/><br>
 					<br><span id="gender1" class="text-danger font-weight-bold"> </span>
 				</div><br>

				<div class="form-group">
					<br><li><label class="font-weight-bold" for="country">Country:</label></li>
					<br><li><select id ="country" name="country">
						<option selected="" value="Default">Please select a country</option>
						<option value="AF">Australia</option>
						<option value="AL">Canada</option>
						<option value="DZ">India</option>
						<option value="AS">Russia</option>
						<option value="AD">USA</option>
					</select></li><br><span id="country1" class="text-danger font-weight-bold"> </span><br>
				</div><br>

				<div class="form-group">
					<br><label for ="aboutus" class="font-weight-bold"> About Us: </label>
					<input type="text" name="aboutus" class="form-control" id="aboutus" autocomplete="off">
					<br><span id="aboutus1" class="text-danger font-weight-bold" > </span>
				</div><br>

				

				<br><input type="submit" name="submit" value="submit" class="btn btn-success" 	autocomplete="off" >


			</form><br><br>


		</div>
	</div>



	<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var emails = document.getElementById('emails').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var male = document.getElementById('male').checked;
			var female = document.getElementById('female').checked;
			var country = document.getElementById('country').value;
			var aboutus= document.getElementById('aboutus').value;


			
			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20" ;
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}


			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email id field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}


			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}

			if (pass == (/^[A-Z]/)){
				document.getElementById('passwords').innerHTML =" ** Please should have a uppercase and lowercase";
				return false;
			}
			if((pass.length <= 8) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  8 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}

			
			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirm password field";
				return false;
			}

			if(male== false && female == false){
				document.getElementById('gender1').innerHTML = "** Please select your gender";
				return false;
			}

			if (country == "Default")
			{
			document.getElementById('country1').innerHTML ="**Please enter your country";   
	        return false; 
			}
			if(aboutus == ""){
				document.getElementById('aboutus1').innerHTML =" ** Please fill the field";
				return false;
			}

	}


		

		

	</script>

			 
	<div class="footer" id ="myfoot">
			<p> @Copyright Great Place IT Services</p>
	</div>
	</div>
</body>
</html>