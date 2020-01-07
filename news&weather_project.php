<?php
require('navbar.php');
?>

<style>
.contentBody {
	background-color: #D3D3D3;
	border-radius: 10px;
	padding: 25px;
}

p{
	font-size: 24px;
	color: #434E5E;
}

h2 {
	color: #434E5E;
}
</style>

<div class="jumbotron" style="background-color:#41A4F5;border-radius:0px;">
	<center><h1 style="color:white;"> News and Weather Web App </h1></center>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		
		</div>
		
		<div class="col-md-10">
			<center><img style="height:50vh;width:83vw;border-radius:5px;" src="https://cdn.dribbble.com/users/915711/screenshots/5827243/weather_icon3.png"></img></center>
			
			<br>
			
			<h2>Project Background</h2>
			
			<br>
			
			<p>This app was designed to make use of two different API's, a news api and a weather api. The sidebar is made using</p>
			<p>material components for the web and the user can navigate and make use of the API's using it. The user can search</p>
			<p>for news related to a keyword and search for weather at a specific location. Searches are saved using a library called</p>
			<p>dexie.js and users can view their searches on the history page.</p>
			
			<br>
			
			<h2>Challenges and Purpose</h2>
			
			<br>
			
			<p>This project was made for an Information Technology class in order to demonstrate what we've learned about</p>
			<p>about web development throughout the semester. While applying what we knew was not as difficult as before,</p> 
			<p>polishing it up took a lot of time. Presenting the information cleanly ended up being a tedious task since</p>
			<p>I was using information from two API's and there ended up being a lot of information that was unnecessary.</p>
			<p>All in all this project helped me reinforce what I already knew and improved my css skills.</p>
			
			<br>
			<br>
			
			<button type="button" class="btn btn-primary" onclick=" window.open('https://dkahl3.github.io/IT202-project3/','_blank')">View Project</button>
			<button type="button" class="btn btn-primary" onclick=" window.open('https://github.com/dkahl3/IT202-project3','_blank')">View Code</button>

			<button type="button" class="btn btn-primary" style="float:right;" onclick="window.location.href = 'projects.php';">Back to projects</button>
			
			<br>
			
			
		</div>
		<div class="col-md-1">
		
		</div>
	
	</div>
	
</div>

</body>

<?php
require('footer.php');
?>