<?php
$name="Khaniful Huda";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="sidebar col-lg-3 border bg-lighat">
                    <div class="d-flex flex-column m-3">
                        <img class="d-flex align-self-center" width="100" src="asset/images/logos.png" alt="">
                    </div>

                    <div class="d-flex flex-column m-5">
                        <div class="d-flex align-self-center">
                            <p class="h2 text-dark"><?php echo $name; ?></p>
                        </div>
                    </div>
                </div>

                <div class="content col-lg-9 vh-100 p-0">
                        <div class="d-flex flex-column">
                            <p class="h2 pt-4 pl-5">my ifst practice</p>

                            <section class="pl-5">
                                <p class="h2">Unit</p>
                                <?php include "inc/units.php"; ?>
                                <p class="lead"><?php echo celciusTofahrenheit(80); ?></p>
                            </section>

                            <section class="pl-5">
                            <p class="h2">String</p>
                                <?php include "inc/string.php"; ?>
                                <p class="lead"><?php echo askName("khanifulhuda"); ?></p>
                            </section>

                        </div>
                        
                        <div class="d-flex flex-column ">
                            <p class="h2"> my border</p>
                        </div>
                        <div class="d-flex flex-column position-absolute fixed-bottom">
                            <p class="font-weight-normal text-center">&copy;<?php echo $name; ?></p>
                        </div>
                </div>       
        </div>
    </div>




    <!-- optional js -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>