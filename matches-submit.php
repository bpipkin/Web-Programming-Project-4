<!DOCTYPE html>
<html>
  <head>
    <title>NerdLuv</title>
    <meta charset = "utf-8" />
    <!-- instructor-provided CSS and JavaScript links; do not modify -->
    <link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" rel="shortcut icon" />
    <link href="https://webster.cs.washington.edu/css/nerdluv.css" type="text/css" rel="stylesheet" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
    <script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" type="text/javascript"></script>
  </head>

  <body>
    <div id = "bannerarea">
      <img src="https://webster.cs.washington.edu/images/nerdluv/nerdluv.png" alt="banner logo" /> <br />
      where meek geeks meet
    </div>
    
    
    Matches for <?php echo $_GET["name"]; ?></br>

    <?php
       $myfile = fopen("singles.txt","r") or die("Unable to open file!");

       $person = array("name","gender","age","personality","os","minAge","maxAge");
       while (!(feof($myfile))) {
         $person = explode(",",fgets($myfile));
         if ($person[0] == $_GET["name"])
           break;
       }
       
       rewind($myfile);
       
       $possibleMatch = array("name","gender","age","personality","os","minAge","maxAge");
       while (!(feof($myfile))) {
         $line = fgets($myfile);
         $possibleMatch = explode(",",$line);
         if (strcmp($person[1],$possibleMatch[1]) == 0 || $possibleMatch[2] < $person[5] || $possibleMatch[2] > $person[6] || $person[2] < $possibleMatch[5] || $person[2] > $possibleMatch[6] || strcmp($person[4],$possibleMatch[4]) != 0)
           continue;
         $count = 0;
         $index = 0;
         while ($index < 4) {
	   if (strcmp(substr($person[3],index,1),substr($possibleMatch[3],index,1)) == 0)
	     $count = $count + 1;
	   $index = $index + 1;
	 }
	 if ($count > 0) {
           echo $possibleMatch[0] . "<br>";
           echo "gender:\t" . $possibleMatch[1] . "<br>";
           echo "age:\t" . $possibleMatch[2] . "<br>";
           echo "type:\t" . $possibleMatch[3] . "<br>";
           echo "OS:\t" . $possibleMatch[4] . "<br>";
           echo "<br>";
         }
       }
       fclose($myfile);
       ?>

    <div id="w3c">
      <a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML" /></a>
      <a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
    </div>
    
    
  </body>

</html>