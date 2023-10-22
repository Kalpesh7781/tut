<!DOCTYPE html>
<?php 
  //cookies are generally sets in header
    //set contains key and value pair
    //we  can acess cookies using enviroment variables $_COOKIE["name"] or $HTTP_COOKIE_VARS["name"] 

    //set cookies using setcookie(name, value, expire, path, domain, security);
    //we cannt delete cookies so we define expiry time to delete cookies
    //we give expiry time as time()-3600

    setcookie("name","ram",time()+3600,"/","",0);
    setcookie("age","25",time()+3600,"/","",0);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  

    if (isset($_COOKIE["name"]))  //isset() use to check cookie is set or not
    {
   echo "name is ".$_COOKIE["name"]."<br/>";
   echo "Age is ".$_COOKIE  ["age"]."<br/>";
    }


    ?>
</body>
</html>