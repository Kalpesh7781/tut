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
    //will stop generating pattern after time
    srand( time()*10);
    //will generate random num
    $num=rand(1,6);
    echo $num;
    
    ?>
</body>
</html>