<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulate</title>
</head>
<body>
    <a href="index.php">Back</a>
    <h1>String Manipulate</h1>
    <button onclick=location.reload()>Reload</button>
    <br />
    <br />
    <br />  

    <?php 
        //CONCATENATION
        echo "<h3>CONCATENATION</h3>";
        $phrase1 = "Student who came late";
        $phrase2 = "in class with a rock";

        echo "$phrase1 $phrase2 <br />"; //or
        echo $phrase1." ". $phrase2. "<br />"; //or
        echo $phrase1.", ". $phrase2. "<br />";
        echo "<br /> <br />";
        echo "<hr />";

        //STRING TRANSFORMATION
        echo "<h3>STRING TRANSFORMATION</h3>";
        $name = "marcelo fortes";
        echo "Uppercase first letter: ".ucfirst($name)."<br />";
        echo "Uppercase first letter of each word: ".ucwords($name)."<br />";
        echo "Uppercase all characters of string: ".strtoupper($name)."<br />";
        echo "Uppercase all characters of string: ".strtolower("THIS WAS UPPERCASE")."<br />";
        echo "<br />";
        echo "<hr />";
        
        //REPEATING STRINGS
        echo "<h3>REPEATING STRINGS</h3>";
        echo "Repeat String: ".str_repeat("<br />".ucwords($name),3)."<br />";
        echo "<hr />";
        
        //GETTING POSITION AND FIND CHARACTER
        echo "<h3>GETTING POSITION AND FIND CHARACTER</h3>";
        echo "Get a Substring: ".substr($name, 1, 5). "<br />";
        echo "Get position of string: ".strpos($name, 'f')."<br />";
        echo "Find character 'm': ".strchr($name, 'm')."<br />";
        echo "Find character 'r': ".strchr($name, 'r')."<br />";
        echo "Find character 'c': ".strchr($name, 'f')."<br />";
        echo "Find character 't': ".strchr($name, 't')."<br />";
        echo "Find character 's': ".strchr($name, 's')."<br />";
        echo "Find character ' ': ".strchr($name, ' ')."<br />";
        echo "<br />";
        echo "<hr />";
        
        //FINDING LENGTH OF STRING
        echo "The length of string '$name' is: ".strlen($name)."<br />";
        echo "<br />";
        echo "<hr />";
        
        //REPLACING STRINGS
        echo "Replace string to another: <br />";
        echo "Original phrase: $phrase1", "<br />";
        echo "Replaced word phrase: ".str_replace("late", "earlier", $phrase1)."<br />";

    ?>
</body>
</html>