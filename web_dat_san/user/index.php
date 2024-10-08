<?php
require "../config/config.php";
require ROOT . "/include/function.php";
spl_autoload_register("loadClass");
session_start();

$user = new User;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css//output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>TOTTENHAM FC</title>
</head>

<body>
    <?php require_once("../include/header.php") ?>
    <div class="main mt-5">
        <div class="banner flex justify-center items-center w-full">
            <img src="../img/banner.jpg" alt="logo" class="h-32">
        </div>
        <div>

            <?php
            $pitch = new Product;
            if(isset($_SESSION['cus_id'])){
                $pitch->getSessionTeam($_SESSION['cus_id']);
            }
            $pitch->filterPitch();
            
            ?>
        </div>

    </div>
    <?php require_once("../include/footer.php") ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</html>