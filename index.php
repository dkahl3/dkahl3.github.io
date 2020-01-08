<?php
require('navbar.php');
?>

<style>
.rectangle {
	position:absolute;
	left: 20%;
	height:40vh;
	width: 20vw;
	border-radius:5px;
	background-color:white;
	border: 1px solid;
	border-color:#434E5E;
	padding: 10px;
	box-shadow: 5px 10px 18px #888888;
}

.circle-icon {
	background: #41A4F5;
	padding: 15px;
	border-radius: 50%;
	border: 1px solid;
	border-color:#434E5E;
}
</style>

<div class="jumbotron" style="background-color:#41A4F5;border-radius:0px;">
	<div class="row">
		<div class="col-md-1">
		
		</div>
		<div class="col-md-2">
			<div class="imageContainer">
				<img src="profilepic.jpg">
			</div>
		</div>
		<div class="col-md-9">
			<h1 style="color:white;margin-left:30px;"> Daniel Kahl </h1>
			<h4 style="color:white;margin-left:30px;"> I am an undergraduate student working towards my Bachelor of Science at UIC. Want to know how I may help your project? Check out my resume and projects. </h4>
		</div>
	</div>
</div>

<div class="jumbotron text-center" style="background-color:#F7F8FA;color:#434E5E;">
	<h2 style="position:relative;top:-40px;font-weight:bold;">Skills Overview</h2>
	<h5 style="position:relative;top:-30px;">I have more than 4 years' experience developing software for coursework and personal projects.</h5>
	<h5 style="position:relative;top:-30px;">Below is a quick overview of my main technical skill sets and tools I use</h5>
</div>

<div class="container-fluid" style="position:relative;top:-50px;height:40vh;">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class= "rectangle">
				<div style="position:relative;top:-50px;color:#434E5E;">
					<center><i class="fa fa-palette circle-icon" style="font-size:48px;color:white;"></i></center>
					<center><h5 style="margin-top:10px;">Frontend</h5></center>
					<br>
					<center><p>HTML/CSS</p></center>
					<center><p>JavaScript/JQuery</p></center>
					<center><p>UI Design</p></center>
					<center><p>OpenGL</p></center>
				</div>
				
			</div>
		</div>
		<div class="col-md-4" style="text-align:center;">
			<div class= "rectangle">
				<div style="position:relative;top:-50px;color:#434E5E;">
					<center><i class="fas fa-database circle-icon" style="font-size:48px;color:white;"></i></center>
					<center><h5 style="margin-top:10px;">Backend</h5></center>
					<br>
					<center><p>PHP</p></center>
					<center><p>MySQL</p></center>
				</div>
			</div>
		</div>
		<div class="col-md-4" style="text-align:center;">
			<div class= "rectangle">
				<div style="position:relative;top:-50px;color:#434E5E;">
					<center><i class="fas fa-wrench circle-icon" style="font-size:48px;color:white;"></i></center>
					<center><h5 style="margin-top:10px;">Other</h5></center>
					<br>
					<center><p>Version Control</p></center>
					<center><p>Command Line</p></center>
					<center><p>3D Modeling/Printing</p></center>
					<center><p>Computer Repair</p></center>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
	$("#about").removeClass(".activeNav");
	$("#projects").removeClass(".activeNav");
	$("#resume").removeClass(".activeNav");
	$("#contact").removeClass(".activeNav");
	
	$("#about").addClass("activeNav");
});
</script>
</body>

<?php
require('footer.php');
?>