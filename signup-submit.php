<html>
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
<?php
$err = "";
if(empty($_POST["name"])){
    $err .= "Name is a required field<br>";
}
if(empty($_POST["gender"])){
    $err .= "Gender is a required field<br>";
}
if($_POST["age"] == null){
    $err .= "Age is a required field<br>";
}
if(empty($_POST["personality"])){
    $err .= "Personality is a required field<br>";
}
if(empty($_POST["os"])){
    $err .= "Favorite Operating System is a required field<br>";
}
if($_POST["min"] == null || $_POST["max"] == null){
    $err .= "Seeking age is a required field<br>";
}
if($err == "") {
    $name = $_POST["name"];
    $myFile = fopen("singles.txt", "r");
    $myLine = "";
    $found = false;
    while(!feof($myFile) && !$found){
        $myLine = fgets($myFile);
        if(substr($myLine, 0, strlen($name)) == $name){
            $err .= "There is record of another user with that name.";
            $found = true;
        }
    }
    fclose($myFile);
    $gender = $_POST["gender"];
    if ($gender != "male" && $gender != "female") {
        $err .= "Gender must be male or female<br>";
    }
    $age = $_POST["age"];
    if ($age < 0 || $age > 99 || is_numeric($age) != 1) {
        $err .= "Age must be a number between 0 and 99 inclusive<br>";
    }
    $personality = $_POST["personality"];
    if ((substr(strtolower($personality), 0, 1) != "i" && substr(strtolower($personality), 0, 1) != "e") ||
        (substr(strtolower($personality), 1, 1) != "s" && substr(strtolower($personality), 1, 1) != "n") ||
        (substr(strtolower($personality), 2, 1) != "f" && substr(strtolower($personality), 2, 1) != "t") ||
        (substr(strtolower($personality), 3, 1) != "p" && substr(strtolower($personality), 3, 1) != "j")
    ) {
        $err .= "Personality must be a four letter Briggs Meyer personality type<br>";
    }
    $os = $_POST["os"];
    if ($os != "windows" && $os != "macosx" && $os != "linux") {
        $err .= "Favorite Operating System must be Windows, Mac OS X, or Linux<br>";
    }
    $min = $_POST["min"];
    $max = $_POST["max"];
    if ($min < 0 || $min > 99 || $max < 0 || $max > 99 || is_numeric($min) != 1 || is_numeric($max) != 1) {
        $err .= "Seeking Age must be numbers between 0 and 99 inclusive<br>";
    }
    if ($min > $max) {
        $err .= "The first number in seeking age must be less than or equal to the second number<br>";
    }
}
if($err != ""){
    echo "<h1>Error! Invalid data.</h1>";
    echo $err;
    echo "<p>Please <a href=\"signup.php\">go back</a> and try again.</p>";
}
else{
    $entry = $name . ",";
    if($gender == "male"){
        $entry.="M,";
    }
    else{
        $entry.="F,";
    }
    $entry.= $age . "," . strtoupper(strval($personality)) . ",";
    if($os == "windows"){
        $entry.="Windows,";
    }
    else if($os == "macosx"){
        $entry.="Mac OS X,";
    }
    else{
        $entry.="Linux,";
    }
    $entry.= $_POST["min"] . "," . $_POST["max"] . "\n";
    file_put_contents("singles.txt", $entry, FILE_APPEND);
    echo "<h1>Thank You!</h1>";
    echo "<p>Welcome to NerdLuv, $name!</p>";
    echo "<p>Now <a href= \"matches.php\">log in to see your matches!</a></p>";
}
    ?>
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