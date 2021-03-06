<?php
    // Start session
    session_name("session");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Add appropriate required meta tags needed for the responsive webpage using bootstrap -->
        <!-- Add required bootstrap CDN links for style sheet and required scripts -->
        
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <link rel="stylesheet" href="custom.css">
                            <title>Maddie and Ben's IFY</title>
                            
                            </head>
    
    
    <body>
        
        <!-- Use the jumbotron for creating the header for the webpage -->
        
        <div class="jumbotron">
            <h1>Ingredients for You</h1>
            <p>A website dedicated to cooking.</p>
            
        </div>
        
        <!-- Create the collapsing navigation bar -->
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html">Homepage</a>
                    <a class="navbar-brand" href="./login.php">Authentication</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="./index.html">About Us<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="aboutBen.html">About Ben</a></li>
                                <li><a href="aboutMaddie.html">About Maddie</a></li>
                            </ul>
                        </li>
			<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="./index.html">Ingredients<span class="caret"></span></a>
			    <ul class="dropdown-menu">
				<li><a href="./cinnamon.php">Cinnamon</a></li>
				<li><a href="./parsnip.php">Parsnip</a></li>
				<li><a href="./marjoram.php">Marjoram</a></li>
			    </ul>
			</li>
                        </ul>
                </div>
            </div>
        </nav>
        
        <!-- create three coulumn with lg and md size - include Bootstrap Panel-->
        
        <div class="container-fluid2">
            <div class="row visible-on">
               
                <!-- Add Main Content here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<h2><center><font color=#252C3E> Marjoram</font></center></h2>
                    <br>
                    
					<!---Display comment form if logged in--->
					<div align="center" style="border:5px solid #6E93AA; margin-bottom: 30px; padding:10px;">
						<?php if (isset($_SESSION["loggedin"])) :?>
							<form action = "#" method="POST">
								<label><b>Enter Comment here</b></label><br>
								<input type="text" placeholder="Enter Comment" size="30%" name="comment">
								<input type="submit" value="submit">
							</form>
							<div style="margin-top:50px; margin-bottom:50px;">
								<?php if (isset($_POST['comment'])) :?>
									<?php echo "<strong>USER: </strong>" . $_SESSION["user"] . " => " . filter_var($_POST['comment'], FILTER_SANITIZE_STRING); ?>
								<?php else :?>
									<b>No comment has been entered</b>
								<?php endif; ?>
							</div>
						<?php else :?>
							<h3><a href = "./login.php">Login</a></h3><br>
						<?php endif; ?>
			</div>
                </div>
	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<blockquote>
				Marjoram, also known as pot marjoram, is an herb indigenous to Cyprus and southern Turkey. 
				In can be used both fresh and dried in countless recipes. 
				While very closely related to oregano, marjoram us known for having a lighter, more citrus flavor.
				</blockquote>
			<blockquote>
				Our suggestion is to try sprinkling marjoram into a cup of tomato soup!
				</blockquote>
		</div>
                
                <!-- Add Image here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="./marjoram.jpg" class="img-responsive"  alt="marjoram" width="575"
                        height="auto">
                </div>
                
            </div>
        </div>
        <footer>
        <center>This site is part of a CSU <a href="https://www.cs.colostate.edu/~ct310/yr2017sp/" target="new-tab"> CT310 </a> Course Project</center>
        <center>Website developed by Ben Mertz and Madeleine Sheehan</center>
        </footer>
    </body>
</html>
