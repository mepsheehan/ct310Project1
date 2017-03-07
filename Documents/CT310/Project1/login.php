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
                            <title>Authentication</title>
                            
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
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- create three coulumn with lg and md size - include Bootstrap Panel-->
        
        <div class="container-fluid2">
            <div class="row visible-on">
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">Ingredients
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="./cinnamon.html" target="new-tab">Cinnamon</a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="./parsnip.html" target="new-tab">Parsnip</a>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="./marjoram.html" target="new-tab">Marjoram</a>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Add Main Content here -->
                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">
                    <h2><font color=#252C3E> Welcome to our website!</font></h2>
                    <br>
                    <?php if (!isset($_SESSION["loggedin"])) :?>
			<!--Show login form if not logged in-->
			<?php if (isset($_POST['uname']) && $_POST['uname'] == "ct310" && (md5($_POST['psw']) == "3aaec86181ee6974b99d893b4c1eb5b5")) :?>
				<?php $_SESSION["loggedin"] = 1; $_SESSION["user"] = $_POST['uname']; $_SESSION["time"] = date("h:i:sa");?>
			<?php elseif (isset($_POST['uname']) && $_POST['uname'] == "benmertz" && (md5($_POST['psw']) == "1751d9d2ea4ca903f6db2847902db7ef")) :?>
				<?php $_SESSION["loggedin"] = 1; $_SESSION["user"] = $_POST['uname']; $_SESSION["time"] = date("h:i:sa");?>
			<?php else : ?>
			<form action = "#" method="POST" style="border:5px solid #6E93AA; margin-bottom: 25px; padding: 10px;" width:35%;">
				<div class = "container" style="padding:5px;">
					<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="uname">
				</div>
						
				<div class = "container" style="padding:5px;">
					<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw">
				</div>
						
				<div class = "container" style="padding:15px;">
					<input type="submit" value="submit">
				</div>
			</form>
			<?php endif; ?>
		<?php endif; ?>	
		<br><br>
		<blockquote>
			Photographs are stock images from: <a href="https://www.pexels.com" target="new-tab"> Pexels </a>
                </blockquote>
                <blockquote>
                	Last edited: March 6, 2017
                </blockquote>
                </div>
                
                <!-- Add Image here -->
                <div class="col-lg-4 col-md-4">
                    <img src="./hands.jpg" class="img-rounded"  alt="Cook" width="275"
                        height="auto">
			<br>
			<?php if (isset($_SESSION["loggedin"])):?>
				<?php echo "Logged in as: " . $_SESSION["user"]; ?>
			<?php endif ?>
                </div>
                
            </div>
        </div>
        <footer>
        <center>This site is part of a CSU <a href="https://www.cs.colostate.edu/~ct310/yr2017sp/" target="new-tab"> CT310 </a> Course Project</center>
        <center>Website developed by Ben Mertz and Madeleine Sheehan</center>
        </footer>
    </body>
</html>
