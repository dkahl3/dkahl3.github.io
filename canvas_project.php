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
	<center><h1 style="color:white;"> Canvas Game </h1></center>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		
		</div>
		
		<div class="col-md-10">
			<center><img style="height:50vh;width:83vw;border-radius:5px;" src="https://res.cloudinary.com/teepublic/image/private/s--pqyZW7kd--/t_Preview/b_rgb:36538b,c_limit,f_jpg,h_630,q_90,w_630/v1546918467/production/designs/3911649_0.jpg"></img></center>
			
			<br>
			
			<h2>Project Background</h2>
			
			<br>
			
			<p>This game was designed using canvas with key events (up/down arrow keys) to control the ship. The objective of</p>
			<p>the game is to avoid the asteroids while picking up as much of the fuel as possible. The player has three lives</p>
			<p>and one life is lost each time an asteroid is hit. Upon picking up fuel, another asteroid spawns and the speed picks</p>
			<p>up.</p>
			
			<br>
			
			<h2>Challenges and Purpose</h2>
			
			<br>
			
			<p>This project was made for an Information Technology class in order to learn about drawing elements on a canvas,</p>
			<p>creating user interation with key events, and writing a game loop. Writing collision detection proved to be</p> 
			<p>difficult since there was no way to view the hitboxes for the player and the items. My solution for this was</p>
			<p>to create a circle of set radius for all game objects and draw and outline of it so the user does not have to</p>
			<p>guess how much they have to distance themselves. Collisions were then calculated by comparing distance between</p>
			<p>objects and determining if that distance was less than the sum of the two radii.</p>
			
			<br>
			<br>
			
			<button type="button" class="btn btn-primary btn-lg" onclick=" window.open('https://dkahl3.github.io/IT202-project3/','_blank')">View Project</button>
			<button type="button" class="btn btn-primary btn-lg" onclick=" window.open('https://github.com/dkahl3/IT202-project3','_blank')">View Code</button>

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