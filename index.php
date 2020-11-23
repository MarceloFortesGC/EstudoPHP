<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer Index</title>
</head>

<body>
    <h1>Hello World</h1>
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

    <ul>
        <li><a href="ifstatement.php">If Statement PHP</a></li>
    </ul>

</body>
</html>