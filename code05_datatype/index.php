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
        /*
        php data type
        -string = "Hello, world"
        -integer = 12345
        -float = 3.14
        -boolean = true, false
        -array = array("bmw", "ford", "benz");
        -object
        -null
        */
        $txt = "hello world";
        var_dump($txt);
        echo"<br>";

        $int = 12345;
        var_dump($int);
        echo"<br>";

        $float = 3.14;
        var_dump($float);
        echo"<br>";

        $boolean = true;
        var_dump($boolean);
        echo"<br>";

        $arr = array("BMW", "Ford", "Benz");
        var_dump($arr);
        echo"<br>";

        $txt2 = null;
        var_dump($txt2);
        echo"<br>";

        class Foo {
            public $aMemberVar = 'aMemberVar Member Variable';
            public $aFuncName = 'aMemberFunc';
           
           
            function aMemberFunc() {
                print 'Inside `aMemberFunc()`';
            }
        }
        $foo = new Foo;
        $element = 'aMemberVar';
        print $foo->$element; // prints "aMemberVar Member Variable"
    ?>
    <br>
</body>
</html>