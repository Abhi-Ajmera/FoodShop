<?php
include("../Connection.php");
if (isset($_POST["btn_Signin"])) {
    $Mobile = $_POST["txt_mobile"];
    $Password = $_POST["txt_password"];

    $qry = "SELECT * FROM admin WHERE Mobile = '$Mobile' AND Password= '$Password'";
    $tbl = mysqli_query($con, $qry);

    if ($result = mysqli_fetch_array($tbl)) {
        $_SESSION["Mobile"] = $result["Mobile"];
        header("Location:Home.php");
    } else { ?>
<script>
    alert("Wrong Mobile or Password");
</script>
<?php }
}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShop - Admin</title>
    <link rel="shortcut icon" href="../Images/favicon-96x96.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid p-0 sticky-top">
        <!-- header -->
        <div class="row">
            <div class="col-12 bg-dark text-white d-flex justify-content-center p-3">
                <a href="index.php"><img src="../Images/Logo.png" height="74px"></a>
                <h2 class="pt-3"><a href="index.php" class="text-white text-decoration-none">Foodshop</a></h2>
            </div>
        </div>

        <!-- login -->
        <div class="container-fluid mt-4">
            <div class="main-card m-3 card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row d-flex justify-content-center p-3">
                            <div class="flex-column col-md-4">
                                <div class="position-relative form-group">
                                    <label for="txt_mobile">Mobile</label>
                                    <input type="mobile" name="txt_mobile" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center p-3">
                            <div class="flex-column col-md-4">
                                <div class="position-relative form-group">
                                    <label for="txt_password">Password</label>
                                    <input type="password" name="txt_password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center p-3">
                            <input type="submit" name="btn_Signin" class="col-md-3 mt-2 btn btn-success" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
