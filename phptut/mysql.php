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
    $dbhost="localhost:3306";
    $dbuser="root";
    $dbpass="Kalpesh";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
    if($conn)
    {
        echo "connected sucessfully"."<br/>";
    }
    //create databaes
 /*   $que="Create Database php";
    $res=mysqli_query($conn,$que);
    if($res)
    {
        echo "database created <br/>";
    }*/ 


    //select databse

    mysqli_select_db($conn,"php");


    //create table
  /*  $sql='CREATE TABLE employee( '.
    'emp_id INT NOT NULL AUTO_INCREMENT, '.
    'emp_name VARCHAR(20) NOT NULL, '.
    'emp_address VARCHAR(20) NOT NULL, '.
    'emp_salary INT NOT NULL, '.
    'primary key ( emp_id ))';

    $res=mysqli_query($conn,$sql);*/


    //retriving data

    $sql="select * from employee";
    $res2=mysqli_query($conn,$sql);
    $res=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
    {

        echo "EMP ID :{$row['emp_id']} <br> ".
 "EMP NAME : {$row['emp_name']} <br> ".
 "EMP SALARY : {$row['emp_salary']} <br> ".
 "--------------------------------<br>";
    } 
    echo "second<br/>";

    while($row = mysqli_fetch_array($res2, MYSQLI_NUM)) {
        echo "EMP ID :{$row[0]} <br> ".
        "EMP NAME : {$row[1]} <br> ".
        "EMP SALARY : {$row[2]} <br> ".
        "--------------------------------<br>";
        }




    mysqli_close($conn);
    ?>
</body>
</html>