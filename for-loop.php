<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <h1>For Loop</h1>
    <a href="index.php">Back</a>
    <br />
    <br />
    <?php 
        for($count = 0; $count <> 10; $count++){ //The structure is basically saying ($variable = value; do_function_while $variable =<> condition)
            echo "Value: $count<br />";
            echo "Hello World<br /><br />";
        }
    ?>
</body>
</html>