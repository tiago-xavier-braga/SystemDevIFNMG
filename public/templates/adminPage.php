<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base/header.css">
    <link rel="stylesheet" href="../css/listUser.css">
    <title>Document</title>
</head>
<body>
    <?php
        require_once './base/header.php';
    ?>
    <main>
        <?php
            require_once '../../class/rb-mysql.php';
    
            $conn = R::setup( 'mysql:host=localhost;dbname=SYSTEM_A', 'root', 'aluno' );

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
            </tr>

        <?php
            $userDB = R::findAll('user');

            foreach ($userDB as $value) {
                # code...
                echo "<tr><td>{$value->id}</td><td><a href='detailUser.php?id={$value->id}'>$value->name</a></td></tr>";
            }
        ?> 
        </table>
    </main>
</body>
</html>