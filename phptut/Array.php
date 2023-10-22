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

    //Numeric array
   $numbers=array(1,4,5,7,3,2);
   foreach($numbers as $val)
   {
    echo "$val "." <br/>  "; 
   }

   $days[0]="sunday";
   $days[1]="monday";

   $days[2]="tuesday";
   $days[5]="saturday";

foreach($days as $val)
   {
    echo "$val "." <br/>  "; 
   }
echo count($days)."<br/>";


//Associative array
$salaries=array("ram"=>1200,"sham"=>15000,"radha"=>14558);
echo $salaries["ram"];


//multidiamenssional array
$marks=array("ram"=>array("phy"=>20,"math"=>10),
              "radha"=>array("phy"=>25,"math"=>18),
              "varun"=>array("phy"=>17,"math"=>21));

              echo "<br/>ram marks in math".$marks["ram"]["math"];

              foreach($marks as $values)
              {
                echo "<br/>"."maths mark ".$values["math"]." phy marks ".$values["phy"];
              }
    ?>
</body>
</html>