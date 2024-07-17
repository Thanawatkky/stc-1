<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STC ONLINE</title>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css">
</head>
<body>
        <?php
            include('navbar.php');
        ?>

        <div class="container">
            <?php
                if (isset($_REQUEST['p'])) {
                    include($_REQUEST['p'].'.php');
                }else {
            ?>
        </div>

        <div>
            <?php 
                include('dashboard.php');
                }
            ?>
        </div>

    <script src="..\bootstrap/js/bootstrap.min.js"></script>
    <script src="..\bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="..\bootstrap/js/jquery-3.5.1.min.js"></script>
</body>
</html>