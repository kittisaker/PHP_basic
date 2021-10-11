<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
<?php 
        $x = 5;
        function myfunc(){
            $x = 10;
            echo"Local output $x <br>";
        }

        myfunc();

        echo"Global output " . $x . "<br>";
    ?>
</body>
</html>