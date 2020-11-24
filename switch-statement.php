<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <a href="index.php">Back</a>
    <br />
    <h1>Switch Statement</h1>
    <br />
    
    <?php 
        $grade = 'D';

        switch($grade){
            case 'A': //Similar to "if"
                echo "<h2>You are amazing! You have scored $grade</h2>";
            break;
            case 'B':
                echo "<h2>You done well. You have scored $grade</h2>";
            break;
            default: //Similar to "else"
                echo "<h2>Sorry, try harder, you scored $grade</h2>";
            break;
        }
    ?>
</body>
</html>