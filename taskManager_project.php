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
	<center><h1 style="color:white;"> Task Manager Web App </h1></center>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		
		</div>
		
		<div class="col-md-10">
			<center><img style="height:50vh;width:83vw;border-radius:5px;" src="https://d2slcw3kip6qmk.cloudfront.net/marketing/blog/2018Q4/sales-org-structure/sales-organization-team-structure-header@2x.png"></img></center>
			
			<br>
			
			<h2>Project Background</h2>
			
			<br>
			
			<p>This app was created for users that lack organization skills and keeping track of objectives they wish to</p>
			<p>complete for any given time frame. A task can be made in the add screen, creating an insertion in the table with</p>
			<p>the information provided by the user. Upon entering the view tasks page, the tasks table is retrieved and each</p>
			<p>row is displayed on the web page. I used MySQL to create the database and PHP to modify and retrieve information</p>
			<p>in the database.</p>
			
			<br>
			
			<h2>Challenges and Purpose</h2>
			
			<br>
			
			<p>This project was something I started during my own time in order to familiarize myself with relational databases</p>
			<p>and php. Since a lot of businesses use databases to store persistent data I figured that learned about it would</p> 
			<p>be worth my while. I had a difficult time picking up PHP since the syntax was much different than the languages</p>
			<p>I'm familiar with. On top of that initializing the database was unfamiliar territory for me so it took some time</p>
			<p>to get familiar with the interface provided by phpmyadmin.</p>
			
			<br>
			<br>
			
			<button type="button" class="btn btn-primary btn-lg" onclick=" window.open('https://github.com/dkahl3/TaskManager','_blank')">View Code</button>

			<button type="button" class="btn btn-primary btn-lg" style="float:right;" onclick="window.location.href = 'projects.php';">Back to projects</button>
			
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