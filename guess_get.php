<head>
<title> This is guessing game of Thai Son ban </title>
</head>

<body>
<form method="get">
<input name="guess" type="text"> guess number <br>
<input type="submit">

<input type="button"
onclick="location.href='https://www.google.com/';return false;"
value="Escape">
</form>

<?php
if( ! isset($_GET['guess'])){
    echo("Missing guess parameter");
}
else if(strlen($_GET['guess'])<1){
    echo("your guess is too short");
}
else if(! is_numeric($_GET['guess'])){
    echo("your guess is not a number");
}
else if( $_GET['guess']<42){
    echo ("your guess is too low");
}
else if($_GET['guess'] > 42){
    echo ("your guess is too big");
}
else {
    echo ("you are correct guess");
}
