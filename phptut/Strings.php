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
    $var="this is  string";
    $var2=20;
    $str1="this will print value $var2";
    $str2=' this will not print value $var2';
    echo "<br/> $str1";
    echo "<br/> $str2";
    echo "<br/> $var";
    $len=strlen($var);
    echo "<br/> length of string  $len";
    $pos=strpos($var,"is");
    echo "<br/> position of is $pos";

    
    ?>
    
</body>
</html>