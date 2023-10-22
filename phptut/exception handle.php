<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <?php 
    try
    {$error="this is error"."<br/>";
    throw new exception($error);
    echo "never executed";
    }
    catch(exception $e)
    {
        echo "caugth exception"."  ".$e->getmessage()."<br/>";
    }
    echo "remaining code";

    
    ?>
    </div>
</body>
</html>