<!DOCTYPE html>
<html>
<head>
	<!--meta part-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<!--link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Portfolio | Ayush Burman - Web Designer & Developer</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
	<!--Navigation-->
	<nav>
		<div class="navigation_logo">
			<a href="#"><img src="assets/images/logo black.png" alt="ABimaginations_logo"></a>
		</div>
		<input type="checkbox" id="active">
    	<label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
    	<div class="wrapper">
      	<ul>
	        <li><a href="#about">ABOUT ME</a></li>
			<li><a href="#Qualifications">QUALIFICATIONS</a></li>
			<li><a href="#skills">SKILLS</a></li>
			<li><a href="#">AVOCATIONS</a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="#contact">CONTACT ME</a></li>
      	</ul>
    	</div>
	</nav>
	<!--Heading-->
	<header>
		<a name="about"></a>
		<div class="neumorphism"><span>Web Designer</span></div>
		<div class="message_position">
			<a href="mailto:ayushburman143@gmail.com?Subject=My%20Website"><i class="fas fa-envelope-open"></i></a>
		</div>
	</header>
	<br><br>
	<!--main-->
	<main class=".home-intro">
		<!--Qualifications-->
		<a name="Qualifications">
		<div class="container">
			<div class="Qual_heading"><h1>Qualifications</h1></div>
			<br>
			<div class="row">
				<div class="col-md-7">
					<div class="Qual_1"><h2>B.tech in Electrical Engineering</h2><p style="font-size: 18px;">I have done my engineering degree from Techno Main Salt Lake in Electrical Engineering. Techno Main Salt Lake is located in Salt Lake, kolkata. I love making circuits and fond of Electrical Machines. I am too fond of coding. And my best part is that I love designing a website. I am part of Samaritans club which is the official NSS club of our college. I have created many projects related to my discipline. My projects includes ardinuo devices and bot making. I have done two internships, one was related solar energy and other in a power system maintainance.</p></div>
				</div>
				<div class="col-md-5">
					<img src="assets/images/Qual_1.jpg" alt="Qual_1" width="100%">
				</div>
			</div>
		</div>
		<!--Qualifications ends-->
		<br><br>
		<!--skills-->
		<a name="skills">
		<div class="container">
			<div class="myskills">
				<h2>My Skills</h2>
				<div class="skills">
					<span class="name">html</span>
					<div class="percent">
						<div class="progress" style="width: 95%"></div>
					</div>
					<span class="value">95%</span>
				</div>
				<div class="skills">
					<span class="name">css</span>
					<div class="percent">
						<div class="progress" style="width: 85%"></div>
					</div>
					<span class="value">85%</span>
				</div>
				<div class="skills">
					<span class="name">javascript</span>
					<div class="percent">
						<div class="progress" style="width: 75%"></div>
					</div>
					<span class="value">75%</span>
				</div>
				<div class="skills">
					<span class="name">c/c++</span>
					<div class="percent">
						<div class="progress" style="width: 80%"></div>
					</div>
					<span class="value">80%</span>
				</div>
			</div>
		</div>
		<!--skills ends-->
		<br><br>
		<!--Contact Me-->
		<!--form-->
		<a name="contact"></a>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div ><img src="assets/images/contact.jpg"></div>
				</div>
				<div class="col-md-8">
					<form>
						<div class="contact_heading"><h1>Contact Me</h1></div>
						<div class="row">
							<div class="col-md-6">
								  <div class="form-group">
								    <input type="text" class="form-control" placeholder="First Name" id="username">
								  </div>
								  <div class="form-group">
								    <input type="email" class="form-control" placeholder="Email" id="useremail">
								  </div>
								  
								  <div class="form-group">
								    <input type="Number" class="form-control" placeholder="Contact Number">
								  </div>
								  <button type="submit" class="btn btn-primary" onclick="myfun()">Submit</button>
							</div>
							<div class="col-md-6">
								  <div class="form-group">
								    <input type="text" class="form-control" placeholder="Last Name">
								  </div>
								  <div class="form-group">
								    <textarea class="form-control" placeholder="Ask A Question" rows="3"></textarea>
								  </div>
								  <div id="demo" class="text-success center"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br>
			<div class="row">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.884488841004!2d88.43021561479227!3d22.583423185177228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02753654af3a77%3A0xeb98d126b7edc2f9!2sSHYAMAL%20PAYING%20GUEST!5e0!3m2!1sen!2sin!4v1577990254045!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
		<!--Contact Me ends-->
	</main>
	<br><br>
	<!--footer-->
	<footer>
		<div class="footer">
			<br>
			<p title="Inspired By Damian Watracz"><i class="far fa-copyright"></i>  2020 ABimaginations. All Rights Reserved</p>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer_hover"><a href="https://www.facebook.com/profile.php?id=100010957021188" style="color: #284a75;" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
					</div>
					<div class="col-md-3">
						<div class="footer_hover"><a href="https://www.instagram.com/ayush_burman143/?hl=en" style="color: #284a75;" target="_blank"><i class="fab fa-instagram-square"></i></a></div>
					</div>
					<div class="col-md-3">
						<div class="footer_hover"><a href="https://www.linkedin.com/in/ayush-burman-2601a4191" style="color: #284a75;" target="_blank"><i class="fab fa-linkedin" style="width: 20px; height: 20px;"></i></a></div>
					</div>
					<div class="col-md-3" style="text-align: center;">
						<div class="footer_hover"><a href="#" style="color: #284a75;" target="_blank"><i class="fab fa-twitter-square"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script>
		const nav = document.querySelector("nav");

		window.onscroll = function(){
			var top = window.scrollY;
			if(top >= 325){
				nav.classList.add('active')
			}
			else{
				nav.classList.remove('active');
			}
		}
	</script>
	<script>
		function myFunction(){
			document.getElementById("demo").innerHTML = "<i class=\"far fa-check-circle\"></i> Message Sent!!!";
		}

		function myfun(){
		var email = document.getElementById("useremail").value;
		var name = document.getElementById("username").value;
		var userconformation = confirm(name + ", please check your email:" + " " + email);
		if(userconformation == true)
		{
			var d = setTimeout(myFunction, 1500);
		}else{
			return false;
		}
	}

	</script>

</body>
</html>