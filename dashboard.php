<?php
session_start();
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">WELCOME, <?php echo $_SESSION['name']; ?></h1>
    <a href="controller/logout.php" class="btn btn-danger btn-sm">Log-Out</a>



    <?php
    if (empty($_SESSION['name'])) {
        header('Location: login.php');
        exit;
    }
    ?>

    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>