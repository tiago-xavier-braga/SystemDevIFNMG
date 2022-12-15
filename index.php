<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/base/header.css">
    <link rel="stylesheet" href="./public/css/base/footer.css">
    <link rel="stylesheet" href="./public/css/index.css">
    <title>User Index</title>
</head>
<body>
    <?php
        require_once './public/templates/base/header.php';
    ?>
    <main>
        <div class="contentLink">
            <a href="./public/templates/adminPage.php">Admin List Page</a>
            <a href="./public/templates/forms/formProject.php">Form Project</a>
            <a href="./public/templates/forms/formDev.php">Form Dev</a>
        </div>
    </main>
    <?php
        require_once './public/templates/base/footer.php';
    ?>
</body>
</html>