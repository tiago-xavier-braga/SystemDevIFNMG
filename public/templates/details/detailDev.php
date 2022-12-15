<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <link rel="stylesheet" href="../../css/base/footer.css">
    <link rel="stylesheet" href="../../css/templates/details.css">
    <title>Document</title>
</head>
<body>
<?php
        require_once '../base/header.php';
    ?>
    <main>
        <div>
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
                $developerDB = R::load('developer', $_GET['id']);
                echo "<h1>Name: {$developerDB->name}</h1>";
                echo "<p>ID: {$developerDB->id}</p>";
                echo "<p>Date of Birth: {$developerDB->birth}</p>";
                echo "<p>Level: {$developerDB->level}</p>";
                echo "<p>Email: {$developerDB->email}</p>";
                echo "<p>Password: {$developerDB->password}</p>";
                if($developerDB->active == "1"){
                    echo "<p>Active</p>";
                }
                if($developerDB->admin == "1"){
                    echo "<p>Manager</p>";
                }
            }
        ?>            
        </div>
        
    </main>
    <?php
        require_once '../base/footer.php';
    ?>
</body>
</html>