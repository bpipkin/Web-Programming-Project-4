<!DOCTYPE html>
<html>
	<!-- Web Programming Step by Step, Homework 4 (NerdLuv) -->
	<!-- shared page top HTML -->
	
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		<script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="bannerarea">
			<img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
		
		<!-- your HTML output follows -->
        
		<form id="form" action = "signup-submit.php" method = "post" onSubmit="">
        <legend>New User Signup:</legend>
        	<fieldset>
            	<ul class="column"><strong>
                	<li><label class="left">Name:</label><br/><br/></li>
                	<li><label class="left">Gender:</label><br/><br/></li>
                	<li><label class="left">Age:</label><br/><br/></li>
                	<li><label class="left">Personality Type:</label><br/><br/></li>
                	<li><label class="left">Favorite OS:</label><br/><br/></li>
                	<li><label class="left">Seeking Age:</label><br/><br/></li>
                    <li><input type="submit" value="Sign Up"></li>
                </strong></ul>
                <div>
                	<input type="text" name="name" size="16"><br/><br/>
                    <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female<br/><br/>
                    <input type="text" name="age" maxlength="2" size="6"><br/><br/>
                    <input type="text" name="personality" maxlength="4" size="6">(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)<br/><br/>
                    <select name="os" value="windows">
                    	<option value="windows">Windows</option>
                    	<option value="macosx">Mac OS X</option>                     
                    	<option value="linux">Linux</option>                     
                    </select><br/><br/>
                    <input type="text" name="min" maxlength="2" size="6"> to <input type="text" name="max" maxlength="2" size="6"><br/><br/>
                    
                </div>
            </fieldset>
        </form>
        
        		
		<!-- shared page bottom HTML -->
	<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			
			<ul>
				<li>
					<a href="index.php">
						<img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>

		<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
