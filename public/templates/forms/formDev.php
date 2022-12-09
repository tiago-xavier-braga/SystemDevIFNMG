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
                <input type="text" name="name" id="name" placeholder="Dev Name" maxlength="45">
                <label for="birth">Date of Birth:</label>
                <input type="date" name="birth" placeholder="Date of Birth">
                <input type="text" name="level" id="level" placeholder="Level">
                <input type="email" name="email" id="email" placeholder="Email" maxlength="250">
                <input type="text" name="password" id="password" placeholder="Password" maxlength="64">
                <label for="active">Active</label>
                <input type="checkbox" name="active" id="active">
                <label for="admin">Administrator</label>
                <input type="checkbox" name="admin" id="admin">
                <button type="submit">Send</button>
            </div>
        </form>
    </main>
</body>
</html>