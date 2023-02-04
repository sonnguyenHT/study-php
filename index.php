<!doctype html>
<html>
<head>
<title>Our Funky HTML Page</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
</head>
<body>
    <?php
        $name = "thaison";
        $age = 25;
        echo("<h1>hello world</h1>");
        echo "<hr>";
        echo "<p>This is my site</p>";
        echo "my name is $name and I'm $age years old";
        $pharse = "HAPPY BIRTHDAY";
        echo strtolower($pharse);

        echo 5.71234 * 9;
        echo "\n";
        echo 5 / 9;
    ?>
</body>
</html>

