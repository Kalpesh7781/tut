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
    $date_array = getdate();
    foreach ( $date_array as $key => $val )
    {
     print "$key = $val<br />";
    }
    
    $formattedday=$date_array["mday"]."/".$date_array["mon"]."/".$date_array["year"];
    echo "todays date is".$formattedday;
    ?>
</body>
</html>