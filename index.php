<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Program In PHP</title>
</head>
<body>

<!-- Data type terms in PHP -->
    <?php 
        $username= "Adnan";
        $number_list= 100.5;
        echo $username . " " . $number_list;
        $html_element = "<h1>Hello Adnan</h1>";
        echo $html_element;
        $name = "Hello World";
        echo "<h1>Hello</h1>";

        // let's do some math in php
        echo 45 + 30;
        echo "<br>";
        echo "<br>";
        echo 45 -15;
        echo "<br>";
        echo "<br>";
        echo 45 * 5;


        echo "<br>";
        echo "<br>";
        $number_Lists = array(23,4,5,6,7,8,"<h1>I love Arrays</h1>");
        $number_lists = array();
        $number_lists = [23,23,3,4];

        echo $number_Lists[0];
        echo "<br>";
        echo "<br>";
        echo $number_lists[2];
        echo "<br>";
        echo "<br>";
        print_r($number_Lists);

    ?>

    <h1><?php echo $name ?></h1>


    
</body>
</html>