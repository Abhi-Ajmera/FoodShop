<?php
include("../Connection.php");

if(isset($_REQUEST["del"])){
    $qrydel = "DELETE FROM food WHERE FoodId =" . $_REQUEST["del"];
    mysqli_query($con, $qrydel);
}
?>

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
                <button class="btn col-md-6"><a href="Manage.php" style="text-decoration: none;">
                    <div class="bg-danger text-white d-flex justify-content-center">
                        <h4 class="pt-2">Manage</h4>
                    </div></a>
                </button>
            </div>
        </div>

        <div class="container  pt-4" id="Manage-Container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 text-center">
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr>
                                <td>Type</td>
                                <td>Name</td>
                                <td>Photo</td>
                                <td>Price</td>
                                <td>Status</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <?php
                        $qryManage = "SELECT * FROM food";
                        $tblManage=mysqli_query($con, $qryManage);
                        while ($resultManage = mysqli_fetch_array($tblManage)) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $resultManage["Type"] ?></td>
                                <td><?php echo $resultManage["Name"] ?></td>
                                <td><?php echo $resultManage["Photo"] ?></td>
                                <td><?php echo $resultManage["Price"] ?></td>
                                <td><a href="<?php $resultManage["Status"];?>"><?php if($resultManage["Status"]==1)echo "Make disable"; else echo "Make Enable"?></a></td>
                                <td><a href="Edit.php?eid=<?php echo $resultManage["FoodId"]; ?>">Edit</a></td>
                                <td><a href="Manage.php?del=<?php echo $resultManage["FoodId"]; ?>" onclick="Confirm()">Delete</a></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>