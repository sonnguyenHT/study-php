<!doctype html>
<html>
<head>
<title>User_input</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
</head>
<body>
    <form action="user_input.php" method="get">
        Name:
        <br>
        <input type="text" name="name">
        <br>
        Age:
        <br>
        <input type="number" name="age">
        <br>
        <input type="submit">
    </form> 
    <br>
    Your name is <?php echo  $_GET["name"]; 
    echo "<br>";
    echo "Your age is :";
    echo $_GET["age"];
    echo "<br>";
    echo 'print $_GET value';
    print_r($_GET);
    echo "<br>";
    echo 'print $_POST value';
    print_r($_POST)
    ?>
</body>
</html>

