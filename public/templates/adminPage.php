<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base/header.css">
    <link rel="stylesheet" href="../css/adminPage.css">
    <title>Document</title>
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
            <td>
                <a href='detailDev.php?id=%d'>Detail</a>
                <a href='deleteDev.php?id=%d'>Delete</a>
                <a href='editDev.php?id=%d'>Edit</a>
            </td>
        </tr>
DEV;

            foreach ($devDB as $value) {
                # code...
                printf($devHTML, $value->id, $value->name, $value->level, $value->id, $value->id, $value->id);
            }
        ?> 
        </table>
    </main>
</body>
</html>