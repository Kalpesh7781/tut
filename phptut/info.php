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
    <h2>uploaded file info</h2>
<ul>
    <li>sent file: <?php echo $_FILES['file']['name']; ?></li>
    <li>file size: <?php echo $_FILES['file']['size'];?> </li>
    <li>file type: <?php echo $_FILES['file']['type'];?></li> 
</ul>
    </div>
</body>
</html>