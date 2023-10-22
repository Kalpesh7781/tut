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

    //it is used to detect user browser and os so that app should work accordingly using function getenv("HTTP_USER_AGENT")
   $viewer3=getenv("HTTP_USER_AGENT");
    echo $viewer3."<br/>";
    
    $viewer = getenv( "HTTP_USER_AGENT" );
 $browser = "An unidentified browser";
 if( preg_match( "/MSIE/i", "$viewer" ) )
 {
 $browser = "Internet Explorer";
 }
 else if( preg_match( "/Netscape/i", "$viewer" ) )
 {
 $browser = "Netscape";
 }
 else if( preg_match( "/Mozilla/i", "$viewer" ) )
 {
 $browser = "Mozilla";
 }
 $platform = "An unidentified OS!";
 if( preg_match( "/Windows/i", "$viewer" ) )

 {
    $platform = "Windows!";
    }
    else if ( preg_match( "/Linux/i", "$viewer" ) )
    {
    $platform = "Linux!";
    }
    echo("You are using $browser on $platform");
   
    ?>
</body>
</html>