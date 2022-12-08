<?php
include("../Connection.php");

//  php for Adding Entries 
if (isset($_POST["btn_SubmitAdd"])) {
    $FoodType_Add = $_POST["FoodType_Add"];
    $FoodName_Add = $_POST["FoodName_Add"];
    $FoodPhoto_Add = $_POST["FoodPhoto_Add"];
    $FoodPrice_Add = $_POST["FoodPrice_Add"];

    $qry_Add = "INSERT INTO food ('Type','Name','Price') VALUES ('$FoodType_Add','$FoodName_Add','$FoodPrice_Add')";
    echo "$qry_Add";
    // mysqli_query($con, $qry_Add);
?>
<script>
        // alert("Added Successfully");
</script>
<?php
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
                    <a href=""><img src="../Images/Logo.png" height="74px"></a>
                    <h2 class="pt-3"><a href="index.php" class="text-white text-decoration-none"> Foodshop</a></h2>
                </div>
            </div>

        <div class="container pt-4">
            <form method="POST">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mb-4">
                        <select name="FoodType_Add" class="form-select form-select-md">
                            <option selected>Select Food Category</option>
                            <option value="Veg">Vegetarian</option>
                            <option value="Non-Veg">Non-Vegetarian</option>
                        </select>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Food Name</label>
                        <input type="text" name="FoodName_Add" class=" form-control ">
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Upload Photo</label>
                        <input type="file" name="FoodPhoto_Add" class="form-control">
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mb-5">
                        <label class="form-label">Price</label>
                        <input type="number" name="FoodPrice_Add" placeholder="₹" class="form-control">
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <input type="submit" value="Submit" name="btn_SubmitAdd" class="col-md-4 btn btn-primary">
                </div>
            </form>
        </div>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>