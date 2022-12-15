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
        require_once '../../base/header.php';
    ?>
    <main>
        <?php
            require_once '../../../../class/rb-mysql.php';
    
        $conn = R::setup( 'mysql:host=localhost;dbname=SYSTEM_DEV', 'root', '' );

        if ($conn) {
            # code...
            echo '<script>console.log("Success connection database")</script>';
        } else {
            echo '<script>console.log("Failed connection database"</script>';
        }
        if (isset($_GET['name']) && isset($_GET['startDate']) && isset($_GET['conclusionPlanned']) && isset($_GET['conclusion'])) {
            $project = R::load('project', $_GET['id']);
            $project->name = $_GET['name'];
            $project->startDate = $_GET['startDate'];
            $project->conclusionPlanned = $_GET['conclusionPlanned'];
            $project->conclusion = $_GET['conclusion'];
        }

        $idArray = R::store($project);

        echo "<p>ID: $idArray</p>";

        echo "<a href='listUser.php?id={$idArray}'>List Users</a>";
    ?>
        <h2>User register</h2>
    </main>
    <footer>
        <p>Tiago Braga TXB</p>
    </footer>
</body>
</html>