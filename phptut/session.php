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
    //to acess data across all pages we use session
    //create temporary directory on server where name and values are stored
    //this data is acess onn all pages
    //session ends when browser is closed

    session_start();  //start the session
    $_SESSION["counter"]=5;
    if (isset($_SESSION["counter"]))
    {
        $_SESSION["counter"]+=5;
    }

    echo $_SESSION["counter"]."<br/>";
    
    unset($_SESSION["counter"]); //unseet the session

    if (!isset($_SESSION["counter"]))
    {
        echo "sesssion unset";
    }

    session_destroy(); //dsetroy the session
    ?>
</body>
</html>