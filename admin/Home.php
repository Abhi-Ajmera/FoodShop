<?php
include("../Connection.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShop</title>
    <link rel="shortcut icon" href="../Images/favicon-96x96.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="mb-4">
            <!-- header -->
            <div class="row sticky-top">
                <div class="col-12 bg-dark text-white d-flex justify-content-center p-3">
                    <a href="Home.php"><img src="../Images/Logo.png" height="74px"></a>
                    <h2 class="pt-3"><a href="Home.php" class="text-white text-decoration-none"> Foodshop</a></h2>
                </div>
            </div>

            <div class="row mb-2">
                <button class="btn col-md-6"><a href="Add.php" style="text-decoration: none;">
                    <div class="bg-success text-white d-flex justify-content-center">
                        <h4 class="pt-2">Add</h4>
                    </div></a>
                </button>
                <button  class="btn col-md-6"><a href="Manage.php" style="text-decoration: none;">
                    <div class="bg-danger text-white d-flex justify-content-center">
                        <h4 class="pt-2">Manage</h4>
                    </div></a>
                </button>
            </div>
        </div>  
        <div class="d-flex justify-content-center " style="height: 30vw;">
            <h4 class="d-flex align-items-center" style="font-size:6vw;">Welcome Back !!!</h4>
        </div>   

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>