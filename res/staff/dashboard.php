<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORIS Help Desk</title>
    <link rel="stylesheet" href="../../css/style.css">

    <link href="http://fonts.cdnfonts.com/css/sitara" rel="stylesheet">
</head>
<body>

<?php

$page = "dashboard";
require '../../config/config.php';
include("../../res/templates/header.php");
include("../../res/templates/navigation.php");

$_SESSION["role"] = "administrator";
$_SESSION["userid"] = "IT20633790@gmail.com";


?>

 <div class="body-container">
 </div>

<?php include("../../res/templates/footer.php");  ?>
    <script src="../../js/script.js"></script>
    
</body>
</html>