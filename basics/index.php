<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pages = array("Hello World in Php"=>"1_hello.php", "Comments in Php"=>"2_comment.php", "Variables in Php"=>"3_variables.php");

        echo "<h1> Hello from php </h1>";


    foreach ($pages as $x => $y) {
        echo "<a href='".$y."'>".$x."</a><br />";




        // echo "<a href='$y'>$x</a> <br>";
    }
    echo "<br />";
    print_r($pages);
?>

</body>
</html>