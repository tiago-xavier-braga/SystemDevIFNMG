<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <title>System_A</title>
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
        if (isset($_GET['name']) && isset($_GET['birth']) && isset($_GET['level']) && isset($_GET['email']) && isset($_GET['password'])) {
            $developer = R::dispense('developer');
            $developer->name = $_GET['name'];
            $developer->birth = $_GET['birth'];
            $developer->level = $_GET['level'];
            $developer->email = $_GET['email'];
            $developer->password = $_GET['password'];
            if(isset($_GET['active'])){
                $developer->active = true;
            } else {
                $developer->active = false;
            }
            if(isset($_GET['admin'])){
                $developer->admin = true;
            } else {
                $developer->admin = false;
            }
        }


        $idArray = R::store($developer);

        echo "<p>ID: $idArray</p>";
    ?>
        <h2>Developer register</h2>
    </main>
    <footer>
        <p>Tiago Braga TXB</p>
    </footer>
</body>
</html>