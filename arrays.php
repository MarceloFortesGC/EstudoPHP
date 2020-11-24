<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <a href="index.php">Back</a>
    <h1>Arrays</h1>
    <?php
        //Arrays can only have one type of data
        //Php can read more than one type of data in array, but most of the languages are more restrict about it
        $target = 2;
        $numbers = array(1,2,3,4,5,6,7,456,9,751,284,2154,78885,36529);
        $size = count($numbers);

        echo "<p>Number in Position $target: $numbers[$target]</p>";
        echo "<p>Array Numbers is size: $size</p>";

        //Showing all elements in array:
        for($count = 0; $count < $size; $count++){
            echo "<p>Position $count have the value of: $numbers[$count]<p/>";
        }
    ?>
</body>
</html>