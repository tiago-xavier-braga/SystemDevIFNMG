<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base/header.css">
    <title>Register</title>
</head>
<body>
    <?php
        require_once './base/header.php';
    ?>
    <main>
        <h1>Register User Form</h1>
        <form action="./registerUser.php" method="get">
            <div class="contentForm">
                <input type="text" name="name" id="name" placeholder="User Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <button type="submit">Send</button>
            </div>
        </form>
    </main>
</body>
</html>