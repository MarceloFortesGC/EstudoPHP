<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer Index</title>
</head>

<body>
    <h1>PHP Primer Index</h1>
    <h2>Hello World</h2>
    <br />
    <br />
    <h1>Links</h1>
        <ul>
            <li><a href="if-statement.php">1. If Statement PHP</a></li>
            <li><a href="switch-statement.php">2. Switch Statement PHP</a></li>
            <li><a href="for-loop.php">3. For Loop PHP</a></li>
            <li><a href="while-do-while.php">4. While and Do While PHP</a></li>
            <li><a href="arrays.php">5. Arrays</a></li>
            <li><a href="string-manipulate.php">6. String Manipulate</a></li>
        </ul>
    <br />
    <br />
    <?php 
        //PRINTING HTML
        echo '<h1>Introduction</h1>'; //Printing any string
        echo '<h2>Hello PHP</h2>'; //Printing any string
        echo '<h3>Another Text<h3/>';
        echo '<br />';
    ?>

    <?php
        //VARIABLES
        $name = 'Marcelo Fortes';
        $age = '21';

        //EXERCISE 1
        echo '<h1>Exercise 1</h1>';
        echo 'Hi, my name is ', $name;
        echo '<h3>Hello! My name is '.$name.'. Nice to meet you!<h3/>';
        echo '<br />';
        
        //EXERCISE 2
        echo '<h1>Exercise 2</h1>';
        echo 'My name is '. $name. ' and I am '. $age. ' years old';
        echo '<br />';
        
        //EXERCISE 3
        echo '<h1>Exercise 3</h1>';
        echo "My name is $name and I am $age years old";
        ?>

</body>
</html>