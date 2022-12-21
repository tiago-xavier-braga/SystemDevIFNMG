<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/base/header.css">
    <link rel="stylesheet" href="../../css/base/footer.css">
    <link rel="stylesheet" href="../../css/templates/form.css">
    <script src="https://kit.fontawesome.com/8ceb46e887.js" crossorigin="anonymous"></script>
    <title>Register Project</title>
</head>
<body>
    <?php
        require_once '../base/header.php';
    ?>
    <main>
        <form action="../registers/registerProject.php" method="get">
            <div class="container">
                <div class="boxTitle divDefault">
                    <h1>Register <e class="boldWord">Project Form</e></h1>
                </div>
                <div class="boxInput divDefault">
                    <div class="inputConfig divDefault">
                        <p>Project</p>
                        <div class="inputLine" id="inputLineUser">
                            <input type="text" name="name" id="name" placeholder="Name">
                            <p><i class="fa-solid fa-user"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Start Date</p>
                        <div class="inputLine">
                            <input type="date" name="startDate">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Conclusion Planned Date</p>
                        <div class="inputLine">
                            <input type="date" name="conclusionPlanned">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                    <div class="inputConfig divDefault">
                        <p>Conclusion Date</p>
                        <div class="inputLine">
                            <input type="date" name="conclusion">
                            <p><i class="fa-solid fa-calendar-days"></i></p>
                        </div>
                    </div>
                </div>
                <div class="boxButton divDefault">
                    <input type="submit" value="Login" class="login"">
                </div>
            </div>
        </form>
    </main>
    <?php
        require_once '../base/footer.php';
    ?>
</body>
</html>