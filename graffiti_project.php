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
	<center><h1 style="color:white;"> Graffiti Removal Web App </h1></center>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		
		</div>
		
		<div class="col-md-10">
			<center><img style="height:50vh;width:83vw;border-radius:5px;" src="https://www.webfarmer.com.au/wp-content/uploads/2019/06/best-anti-graffiti-coatings-products.jpg"></img></center>
			
			<br>
			
			<h2>Project Background</h2>
			
			<br>
			
			<p>This application retrieves information from an API that contains graffiti locations around chicago. These locations </p>
			<p>are either cleaned up or still waiting to be cleaned. The search allows user to filter based on the status of the</p>
			<p>graffiti, returning the results as individual cards. The search requires a ward number in Chicago to begin.</p>
			
			<br>
			
			<h2>Challenges and Purpose</h2>
			
			<br>
			
			<p>This project was made for an Information Technology class in order to learn about AJAX calls, dynamically</p>
			<p>modifying elements on the page when making a call to the API, and working with Google Maps API to display</p> 
			<p>the locations of the graffiti. I further applied what I learned from my UI course to make the search menu</p>
			<p>easier to understand and more aesthetically pleasing.</p>
			
			<br>
			<br>
			
			<button type="button" class="btn btn-primary" onclick=" window.open('https://dkahl3.github.io/IT202Project2/','_blank')">View Project</button>
			<button type="button" class="btn btn-primary" onclick=" window.open('https://github.com/dkahl3/IT202Project2','_blank')">View Code</button>

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