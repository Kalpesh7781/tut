<!DOCTYPE html>
<?php 

//$_REQUEST array can storre GET POST AND COOKIES ASSOSIATIVE ARRAY 
if($_POST["location"])
{
$locationredrt=$_REQUEST["location"];
header("location:$locationredrt");
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
    <div class="container">
        <form action="<?php $_PHP_SELF ?>" method="post">
        <select name="location">
            <option value="http://www.google.com">google</option>
            <option value="http://www.facebook.com">facebook</option>

</select>
<input type="submit">
    </form>
    </div>
    
</body>
</html>