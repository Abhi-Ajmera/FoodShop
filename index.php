<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShop</title>
    <link rel="shortcut icon" href="Images/favicon-96x96.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- marquee -->
    <div class="container-fluid p-0 bg-secondary sticky-top">
        <marquee behavior="scroll" direction="Right" width="100%" height="30px"><img src="images/4d45dd15.gif" alt="" height="34px"> 10% off</marquee>
    </div>
    <!-- navbar -->
    <div class="navbar justify-content-between navbar-dark bg-dark navbar-expand-lg sticky-top ps-4 pe-4">
        <ul class="navbar-nav ms-2">
            <li class="nav-item">
                <a class="nav-link" href="Team.html">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Menu.html">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.google.com/maps/place/Sunshine+Softwares+-+Best+Institute+for+Web+Designing+and+Development+Training+in+Jaipur/@26.8812842,75.7963895,17z/data=!3m1!4b1!4m5!3m4!1s0x396db5dd3e29749f:0xd9b6ae0869195158!8m2!3d26.8812842!4d75.7985782">Find
                    Us!</a>
            </li>
        </ul>

        <a class="navbar-brand px-lg-4 " href="index.php">
            <img src="Images/Logo.png" height="50px">
            Foodshop
        </a>


        <form class="navbar-nav d-flex">
            <button class="btn btn-outline-success btn-sm p-2 me-2" type="submit"><a class="text-decoration-none text-white" href="TableBook.html">Book a Table</a></button>
            <button class="btn btn-outline-success btn-sm p-2 " type="submit"><a class="text-decoration-none text-white" href="Order.html">Order Now!</a></button>
        </form>


    </div>

    <!-- carousel     -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/restaurant.jpg" class="d-block w-100" alt="Restaurant">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Restaurant</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/Thali.jpg" class="d-block w-100" alt="Thali"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Special Thali</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/dish.jpeg" class="d-block w-100" alt="Dish">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Best Seller</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- floating social media -->
    <aside>
        <div class="sm_float">
            <div class="sm_item">
                <a href="https://www.whatsapp.com"><i class="bi bi-whatsapp"></i></a>
            </div>
            <div class="sm_item">
                <a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a>
            </div>
            <div class="sm_item">
                <a href="https://www.facebook.com"><i class="bi bi-messenger"></i></a>
            </div>
            <div class="sm_item">
                <a href="https://www.google.com/maps/place/Sunshine+Softwares+-+Best+Institute+for+Web+Designing+and+Development+Training+in+Jaipur/@26.8812842,75.7963895,17z/data=!3m1!4b1!4m5!3m4!1s0x396db5dd3e29749f:0xd9b6ae0869195158!8m2!3d26.8812842!4d75.7985782"><i class="bi bi-geo-alt-fill"></i></a>
            </div>
            <div class="sm_item">
                <a href="https://www.youtube.com"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </aside>


    <!-- container -->
    <div class="container-fluid">
        <h1 class="text-center mt-5">Our Products</h1><br>

        <!-- Card -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 m-4">
            <div class="col mb-4">
                <div class="card text-bg-secondary h-100">
                    <img src="Images/pizza.jpg" class="card-img-top p-1 h-50" alt="...">
                    <div class="card-body">
                        <a href="Order.html">
                            <h5 class="card-title text-center">Pizza</h5>
                        </a>
                        <p class="card-text text-center">Special Range of pizza's in our restaurant.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card text-bg-secondary h-100">
                    <img src="Images/Fried-veg-momos.jpg" class="card-img-top p-1 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Momos</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card text-bg-secondary h-100">
                    <img src="Images/Dish.jpeg" class="card-img-top p-1 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Healthy Meals</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card text-bg-secondary h-100">
                    <img src="Images/Thali.jpg" class="card-img-top p-1 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="row mt-2 justify-content-evenly">
            <div class="col-md-5 mt-1">
                <h2 class="text-center pt-2 pb-3">FAQ</h2>

                <!-- accordion -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                accordion body.</div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more
                                representative of how this would look in a real-world application.</div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Accordion Item #4
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more
                                representative of how this would look in a real-world application.</div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Accordion Item #5
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more
                                representative of how this would look in a real-world application.</div>
                        </div>
                    </div>

                    <div class="accordion-item mt-2 pb-4">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Accordion Item #6
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more
                                representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- address -->
            <div class="col-md-5 mt-1">
                <h2 class="text-center pt-2 pb-4">Address</h2>
                <p>1st Floor, above Roop Misthan Bhandar, near bus stand, Saraswati Colony <br> Tonk Phatak, Jaipur,
                    Rajasthan 302015 <br> <i class="bi bi-telephone"></i> 9999-99999</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7397976705624!2d75.79897749999999!3d26.880006899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5dd3e29749f%3A0xd9b6ae0869195158!2sBest%20Institute%20for%20Web%20Designing%20and%20Development%20Training%20in%20Jaipur!5e0!3m2!1sen!2sin!4v1661696796641!5m2!1sen!2sin" style="width: 100%;" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- footer -->
        <div class="row pt-3" style="background-color:rgb(150, 149, 149);">
            <div class=" row justify-content-evenly">
                <div class="col-md-5 mt-2 text-center">
                    <a href="index.php" class="text-decoration-none link-dark">
                        <h4><img src="Images/Logo.png" height="36px"> Foodshop
                    </a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quia tempore autem culpa illum quidem. Voluptas autem similique voluptatum nisi ducimus at molestias possimus doloribus? Aspernatur omnis adipisci mollitia debitis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur dolor amet magnam id nihil minima quisquam incidunt! Aperiam esse enim.</p>
                </div>

                <div class="col-md-5 mt-2 text-center">
                    <h4 class="mb-3">Important Links</h4>
                    <p>
                        <a href="" class="link-dark text-decoration-none">Home</a><br>
                        <a href="" class="link-dark text-decoration-none">About Us</a><br>
                        <a href="" class="link-dark text-decoration-none">Our Team</a><br>
                        <a href="" class="link-dark text-decoration-none">Terms and Conditions</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="row pt-2 text-center" style="background-color:rgb(150, 149, 149);">
            <div class="col-md-12">
                <p><i class="bi bi-c-circle"></i> Copyright 1991-2019 FoodShop All Right Reserved</p>
            </div>

        </div>
        <!-- container-end -->
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>