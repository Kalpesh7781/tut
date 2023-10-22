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
    $hi=10;
    if ($hi==5)
     {echo "value is 5 <br/>";}
     else if($hi ==10)
     {
        echo "value is 10 <br/>"; 
     }
     else
     {
        echo "value is $hi<br/>"; 
     }
    echo "hello world </br>";
    #this will not show
    //also this one
    echo <<<hi

    "this is kalpesh\\n
    
    i am full \\n
    or wht can i say"
    hi;


    $day ="Tue";
    switch($day)
    {
      case "Mon":
        echo "<br/>monday";
        break;
      case "Tue";
        echo "<br/>TuesdAY";
        break;
      default:
       echo "other day";
    



    }
    ?>
</body>
</html>