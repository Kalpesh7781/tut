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
    function show()
    {
        echo "this is function <br/>";

    }
    $test="show";
    $test();
    show();

    echo "function return value example <br/>";

    function demo()
    {
        $val1=25;
        return $val1;
    }
    print demo()."<br/>";

    function add($a)
    {
        return $a+5;

    }
    function dif(&$b)  //val is pass by ref means address is given so change in function affect actual val also
    {
        return $b-=10;
    }

    $num=100;
    echo add($num)." <br/> ";
    echo "no is ".$num."<br/>";

    echo dif($num)."<br/>";

    echo "no is ".$num."<br/>";

    


    
    ?>
</body>
</html>