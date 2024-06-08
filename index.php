<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practice</title>
</head>
<body>
    <?php
    print "Welcome to Laravel Adventures!";
    ?>

    <?php
    echo "1. Forms"?>

    <form action = "form.php" method="get">
        Name: <input type="text" name = "name">
        Email: <input type="text" name = "email">
        <input type="submit">
    </form>
</body>
</html>