<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content="Learn Double Letters in words.">

    <title>English Ups - Learn Double Letters in words</title>


    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="./src/media/logo.png"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="./src/css/main.css?v=2"/>
    <link rel="stylesheet" href="./src/css/navbar.css?v=1"/>

</head>

<body>


    <?php
    include("navbar.html");
    ?>


    <!-- Start Hero Area -->
    <section id="hero-area" class="hero-area">
        <div class="hero-inner">
            <div class="container">

            </div>
        </div>
    </section>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto text-dark">
                    <div class="d-block d-md-flex mt-5">
                        <div class="mb-3 mb-md-0 pt-4">
                            <h1>Double Letters</h1>
                        </div>
                        <div id="search_" class="pt-4 ms-auto">
                            <input type="text" class="form-control" placeholder="Search..." id="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">

            <div class="row mx-auto" id="content">
                <!-- Activa el JS -->

                <div class="col-12 col-md-10 col-lg-8 mx-auto text-dark">

                    <div class="row" id="words">

                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php
    include("footer.html");
    ?>

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <img src="./src/media/arrow.png" alt="arrow to scroll up" width="14">
    </a>
    <script>
        let url="double-letter";
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

    <script src="./src/js/listening-ex2.js?v=1"></script>
    <script src="./src/js/spy.js?v=3"></script>


</body>

</html>