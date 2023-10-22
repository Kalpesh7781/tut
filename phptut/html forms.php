<!DOCTYPE html><?php
if($_GET["name"] || $_GET["age"]) 
{
echo "name is ".$_GET["name"]."<br/>";
echo "age is ".$_GET["age"]."<br/>";
echo "name is".$this->request->getVar('name');
exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <form action="<?php $_PHP_SELF ?>" method="get">

        <input type="name" name="name" placeholder="enter name">
        <input type="nnumber" name="age" placeholder="enter age">
        <input type="submit">
</form>


    </div>
</body>
</html>