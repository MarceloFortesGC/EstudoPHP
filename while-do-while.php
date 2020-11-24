<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While and Do While</title>
</head>
<body>
    <a href="index.php">Back</a>
    <h1>While</h1>
    <?php 
        $grade = 0;
        $goal = 5;
        /* 
        INFINITE LOOP
        while($grade < $goal){
            echo "<p>You need at least 7 points to pass. Your actual score is: $grade</p>";
        } 
        */
        while($grade < $goal){
            echo "<p>I will stop at $goal. Now I am: $grade</p>";
            $grade++;
        }
        
        echo "<p>Now I am: $grade</p>";
        ?>

<h1>Do While</h1>
<?php 
        $grade = 7;
        $goal = 10;
        do{
            echo "<p>I will stop at $goal. Now I am: $grade</p>";
            $grade++;
            
        }while($grade < $goal);

        echo "<p>Now I am: $grade</p>";
    ?>
</body>
</html>