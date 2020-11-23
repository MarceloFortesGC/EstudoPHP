<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <a href="index.php">Back</a>
    <?php 
        echo "<h2>If Statement</h2>";

        $grade = 70;
        
        if($grade >= 50){
            echo "<h3>You have passed! Congratulations!!!</h3>";
        }
        else{
            echo "<h3>There is Fuck</h3>";
        }
        
        $grade = 'C';

        if($grade == 'A'){
            echo "<h2>YOU'RE AMAZING</h2>";
        }
        elseif($grade == 'B' || $grade == 'C'){
            echo "<h2>You did well</h2>";
        }
        else{
            echo "<h2>Try Harder</h2>";
        }


        ?>
    
</body>
</html>