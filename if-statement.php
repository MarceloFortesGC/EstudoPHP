<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Statement</title>
</head>
<body>
    <a href="index.php">Back</a>
    <br />
    <h1>If-Else Statement</h1>
    <?php 
        echo "<h2>If Statement</h2>";

        $grade = 70;
        
        if($grade >= 50){
            echo "<h3>You scored $grade. You have passed! Congratulations!!!</h3>";
        }
        else{
            echo "<h3>You scored $grade. There is Fuck</h3>";
        }
        
        $grade = 'C';

        if($grade == 'A'){
            echo "<h3>YOU HAVE SCORED $grade. YOU'RE AMAZING</h3>";
        }
        elseif($grade == 'B' || $grade == 'C'){
            echo "<h3>You have scored $grade, You did well</h3>";
        }
        else{
            echo "<h3>You have scored $grade, Try Harder</h3>";
        }


        ?>
    
</body>
</html>