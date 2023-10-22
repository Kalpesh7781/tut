<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    //constant in php
    define("PI",3.14);
    echo PI;
    echo "<br/>";
    
    //Magical constants
    echo"line num is ". __LINE__."<br/>";
    echo "file name is ".__FILE__."<br/>";
    echo "class name is ".__CLASS__."<br/>";
 

    function show()
    {   //variables in php
        echo "function name is ".__FUNCTION__."<br/>";
        echo "methid name is ".__METHOD__."<br/>";
        $var1=10;
        echo "value of var1 is $var1";
    }
    $demo="show";
    $demo();
    
    //global variables
   $var=20;
    

    function show2()
    {
        GLOBAL $var;
        echo "<br/> vahue of var is $var <br/>";
    }
    show2();


    //static variables
    
    function inc()
    {
        STATIC $var3=25;
        $var3++;
        echo $var3;
        echo "<br/>";
    }
    inc();
    inc();
    inc();

    ?>

    
</body>
</html>