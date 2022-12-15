<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base/header.css">
    <link rel="stylesheet" href="../css/base/footer.css">
    <link rel="stylesheet" href="../css/adminPage.css">
    <script src="https://kit.fontawesome.com/8ceb46e887.js" crossorigin="anonymous"></script>
    <title>Admin Page</title>
</head>
<body>
    <?php
        require_once './base/header.php';
    ?>
    <main>
        <?php
            require_once '../../class/rb-mysql.php';
    
            $conn = R::setup( 'mysql:host=localhost;dbname=SYSTEM_DEV', 'root', '' );

            if ($conn) {
                # code...
                echo '<script>console.log("Success connection database")</script>';
            } else {
                echo '<script>console.log("Failed connection database"</script>';
            }
        ?>
        <h1>Developers</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Level</th>
                <th>Option</th>
            </tr>

        <?php
            $devDB = R::findAll('developer');

        $devHTML = <<<DEV
        <tr>
            <td>%d</td>
            <td><p>%s</p></td>
            <td>%s</td>
            <td class="icon-action">
                <a href='details/detailDev.php?id=%d'><p><i class="fa-solid fa-circle-info"></i></p></a>
                <a href='delete/deleteDev.php?id=%d'><p><i class="fa-solid fa-trash"></i></p></a>
                <a href='update/edit/updateDev.php?id=%d'><p><i class="fa-solid fa-pen-to-square"></i></p></a>
            </td>
        </tr>
DEV;

            foreach ($devDB as $value) {
                # code...
                printf($devHTML, $value->id, $value->name, $value->level, $value->id, $value->id, $value->id);
            }
        ?> 
        </table>
        <h1>Projects</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Conclusion Planned</th>
                <th>Option</th>
            </tr>

        <?php
            $projectDB = R::findAll('project');

        $projectHTML = <<<PROJECT
        <tr>
            <td>%d</td>
            <td><p>%s</p></td>
            <td>%s</td>
            <td class="icon-action">
                <a href='details/detailProject.php?id=%d'><p><i class="fa-solid fa-circle-info"></i></p></a>
                <a href='delete/deleteProject.php?id=%d'><p><i class="fa-solid fa-trash"></i></p></a>
                <a href='update/edit/updateProject.php?id=%d'><p><i class="fa-solid fa-pen-to-square"></i></p></a>
            </td>
        </tr>
PROJECT;

            foreach ($projectDB as $value) {
                # code...
                printf($projectHTML, $value->id, $value->name, $value->conclusionPlanned, $value->id, $value->id, $value->id);
            }
        ?> 
        </table>
    </main>
    <?php
        require_once './base/footer.php';
    ?>
</body>
</html>