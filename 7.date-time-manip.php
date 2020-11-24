<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Manipulation</title>
</head>
<body>
    <a href="index.php">Back</a>
    <h1>Date and Time Manipulation</h1>

    <?php 
        //DATE
        
        echo "<h2>Date</h2>";
        $datenow = getdate();
        echo "Today's Day: ". $datenow['mday']."<br/>";
        echo "Today's Month: ". $datenow['mon']."<br/>";
        echo "Today's Year: ". $datenow['year']."<br/>";
        $dd = $datenow['mday'];
        $mm = $datenow['mon'];
        $yyyy = $datenow['year'];
        echo "Complete Date: $dd/$mm/$yyyy<br/>";
        echo "<br>";
        echo "<hr>";
        
        //TIME
        print date("d/m/y G.i:s<br />", time())."<br />";
    ?>
</body>
</html>