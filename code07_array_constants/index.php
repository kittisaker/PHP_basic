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
        //constants are global
        define("car", ["BMW", "Ford", "Mazda"]);

        echo car[2];
    ?>
    
</body>
</html>