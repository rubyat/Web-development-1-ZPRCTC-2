<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Name: <?php echo $name;?></h1>
    <h1>Age: <?php echo $age;?></h1>
    <h1>Profession: <?php echo $profession;?></h1>

    <ul>
        <?php foreach($cars as $car){?>
            <li><?php echo $car;?></li>
        <?php }?>
    </ul>
    
</body>
</html>