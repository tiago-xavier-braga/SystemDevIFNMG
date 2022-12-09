<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <title>Register Dev</title>
</head>
<body>
    <?php
        require_once '../base/header.php';
    ?>
    <main>
        <h1>Register Dev Form</h1>
        <form action="../registers/registerDev.php" method="get">
            <div class="contentForm">
                <input type="text" name="name" id="name" placeholder="Dev Name">
                <label for="birth">Date of Birth:</label>
                <input type="date" name="birth" placeholder="Date of Birth">
                <input type="text" name="level" id="level">
                <input type="email" name="email" id="email">
                <input type="password" name="password" id="password">
                <input type="checkbox" name="active" id="active">
                <input type="checkbox" name="admin" id="admin">
                <button type="submit">Send</button>
            </div>
        </form>
    </main>
</body>
</html>