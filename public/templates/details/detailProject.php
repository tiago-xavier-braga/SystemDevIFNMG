<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <title>Document</title>
</head>
<body>
<?php
        require_once '../base/header.php';
    ?>
    <main>
        <?php
            require_once '../../../class/rb-mysql.php';
    
            $conn = R::setup( 'mysql:host=localhost;dbname=SYSTEM_DEV', 'root', '' );

            if ($conn) {
                # code...
                echo '<script>console.log("Success connection database")</script>';
            } else {
                echo '<script>console.log("Failed connection database"</script>';
            }

            if (isset($_GET['id'])) {
                $productDB = R::load('product', $_GET['id']);

                echo "<p>{$productDB->id}</p>";
                echo "<p>{$productDB->name}</p>";
                echo "<p>{$productDB->startDate}</p>";
                echo "<p>{$productDB->conclusionPlanned}</p>";
                echo "<p>{$productDB->conclusion}</p>";
            }
        ?>
        
    </main>
</body>
</html>