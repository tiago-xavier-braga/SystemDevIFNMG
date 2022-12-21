<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <link rel="stylesheet" href="../../css/base/footer.css">
    <link rel="stylesheet" href="../../css/templates/register.css">
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
        if (isset($_GET['name']) && isset($_GET['birth']) && isset($_GET['level'])) {
            $developer = R::dispense('developer');
            $developer->name = $_GET['name'];
            $developer->birth = $_GET['birth'];
            $developer->level = $_GET['level'];
        }
        $idDeveloper = R::store($developer);

        if(isset($_GET['email']) && isset($_GET['password'])){
            $credential = R::dispense('credential');
            $credential->email = $_GET['email'];
            $credential->password = $_GET['password'];
            if(isset($_GET['active'])){
                $credential->active = "true";
            } else {
                $credential->active = "false";
            }
            if(isset($_GET['admin'])){
                $credential->admin = "true";
            } else {
                $credential->admin = "false";
            }

            $credential->developer = $developer;
        }
        $idCredential = R::store($credential);
    ?>
        <h2>Developer registered</h2>
    </main>
    <?php
        require_once '../base/footer.php';
    ?>
</body>
</html>