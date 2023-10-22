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
/*permissions
  r => read only
  r+ => read and write at begin of file
  w => erase first content and start writing at firtst
  w+ => read and write but erase existing content
  a => write content at end of file 
  a+ => read and write content at end of file 


*/


  /*0  $filenm="hi.txt";
    $file=fopen($filenm,"r");
    $filesize=filesize($filenm);
    $data=fread($file,filesize($filenm));
    echo "<pre>$data</pre>";
    fclose($file);
*/
    echo "<br/> this is second <br/>";

    $filenm2="hi.txt";
    $file2=fopen($filenm2,"a+");
    $filesize=filesize($filenm2);  $data=fread($file2,filesize($filenm2));
    fwrite($file2,"\n this is newly added ");
  
    echo "<pre>$data</pre>";
    fclose($file2);
    
    ?>
</body>
</html>