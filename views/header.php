<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
    <?php if(!empty($_SESSION['name'])){  ?>
                <!-- <li class="active"><a href="#">Home</a></li> -->
                <li><a href="<?php echo BASE_URL; ?>index.php" <?php $_SESSION['name']; ?>> Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>views/profile.php" <?php $_SESSION['name']; ?>> Profile</a></li>
                <li><a href="<?php echo BASE_URL; ?>views/contentPage.php"><i class="fa fa-fw fa-envelope"></i> Content_Page</a></li>
                <li><a href="<?php echo BASE_URL; ?>views/category.php" <?php $_SESSION['name']; ?>><i class="fa fa-fw fa-envelope"></i>Article</a></li>
                <li style="margin-left: 60px;"><a href="<?php echo BASE_URL; ?>views/logout.php">Logout</a></li>
                <?php }?>
<!-- 
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li> -->
            </ul>
        </div>
    </nav>  

</body>

</html>