<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/base/header.css">
    <link rel="stylesheet" href="../../../css/form.css">
    <script src="https://kit.fontawesome.com/8ceb46e887.js" crossorigin="anonymous"></script>
    <title>Project Update</title>
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

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $projectEdit = R::load('project', $id);
            }
        $renderHTML = <<<RENDER
        <form action="../store/storeProject.php" method="get">
            <input type="number" name="id" value="$id" class="idInput">
            <div class="container">
                <div class="boxTitle divDefault">
                    <h1>Register <e class="boldWord">Project Form</e></h1>
                </div>
                <div class="boxInput divDefault">
                    <div class="inputConfig divDefault">
                        <p>Project</p>
                        <div class="inputLine" id="inputLineUser">
                            <input type="text" name="name" id="name" placeholder="Name" value="$projectEdit->name">
                            <p><i class="fa-solid fa-user"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Start Date</p>
                        <div class="inputLine">
                            <input type="date" name="startDate" value="$projectEdit->startDate">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Conclusion Planned Date</p>
                        <div class="inputLine">
                            <input type="date" name="conclusionPlanned" value="$projectEdit->conclusionPlanned">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Conclusion Date</p>
                        <div class="inputLine">
                            <input type="date" name="conclusion" value="$projectEdit->conclusion">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                </div>
                <div class="boxButton divDefault">
                    <input type="submit" value="Login" class="login"">
                </div>
            </div>
        </form>
RENDER;
    echo $renderHTML;

    if (isset($_GET['name']) && isset($_GET['age'])) {
        $projectEdit = R::dispense('project');
        $projectEdit->name = $_GET['name'];
        $projectEdit->age = $_GET['age'];

        R::store( $projectEdit );
    }
        ?>
    </main>
</body>

</html>