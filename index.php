<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORIS Help Desk</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="http://fonts.cdnfonts.com/css/sitara" rel="stylesheet">

</head>

<body>
    <?php

    $page = "home";
    require 'config/config.php';
    include("res/templates/header.php");
    include("res/templates/navigation.php");

    $_SESSION["role"] = "administrator";
    $_SESSION["userid"] = "admin@gmail.com";

    ?>

    <div class="body-container">
    <div class="card" style="width:80%;margin-left:100px;">
    <h1 style="text-align:center;"> Welcome to Soris Help Desk </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in tempus urna, eu faucibus risus. Ut pharetra non ex eu fermentum. 
    Vestibulum in luctus leo, eu vestibulum lorem. Quisque rhoncus </p>
    </div>
    
    


    </div>

    <?php include("res/templates/footer.php");  ?>
    <script src="js/script.js"></script>
</body>

</html>