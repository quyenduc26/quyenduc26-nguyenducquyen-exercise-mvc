
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
<body>
    <h1>Here are all the fruits: </h1>
    <ul>
        <?php foreach($fruits as $fruit): 
        
        ?>
        <li><?php echo $fruit-> name?> cost <?php echo $fruit-> price?>$ </li>

        <?php endforeach;?>
    </ul>
</body>
</html>
