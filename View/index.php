<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php print_r($base_url);?>

    Hello world!
    "<?= $base_url?>Home"
    <a href="<?= $base_url?>Controller/Home.php">goto</a>
</body>
</html>