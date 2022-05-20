<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="description" content="Hi, learn English in the easiest way. Cambridge examns preparation.">

    <title>English Ups - Cambridge Examns mark calculator</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="./src/media/logo.png"/>

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
        <div class="bg-warning1 pt-2 mt-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <h1 class="fs-2">Cambridge Examn - Mark calculator</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-9 mx-auto bg-white p-0 py-2">
                    <div class="d-flex justify-content-evenly mt-5">
                        <div class="speaking ">
                            <h3 class="mb-4 fs-4">Listening</h3>
                            <p class="mb-4">
                                <input class="input1" type="number">
                                <span class="sep">/</span>
                                <span class="input1max">8</span>
                            </p>
                            <p class="mb-4">
                                <input class="input1" type="number">
                                <span class="sep">/</span>
                                <span class="input1max">10</span>
                            </p>
                            <p class="mb-4">
                                <input class="input1" type="number">
                                <span class="sep">/</span>
                                <span class="input1max">5</span>
                            </p>
                            <p class="mb-4">
                                <input class="input1" type="number">
                                <span class="sep">/</span>
                                <span class="input1max">7</span>
                            </p>
                            <p class="text-success">Result: <span class="result1">0/10</span> </p>
                        </div>
                        <div class="listening ">
                            <h3 class="mb-4  fs-4">Reading</h3>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">8</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">8</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">8</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">6</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">6</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">6</span>
                            </p>
                            <p class="mb-4"><input class="input2" type="number"> <span class="sep">/</span> <span class="input2max">10</span>
                            </p>
                            <p class="text-success">Result: <span class="result2">0/10</span> </p>
                        </div>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="./src/js/calculator.js?v=1"></script>
    <script src="./src/js/spy.js?v=3"></script>


</body>

</html>