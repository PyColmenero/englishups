<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Hi, learn English phrasal verbs with this 200 phrasal verbs list with Spanish/English meaning and examples!.">

    <title>English Ups - Learn Phrasal Verbs</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../src/media/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../src/css/bootstrap.min.css?v=0"/>
    <link rel="stylesheet" href="../src/css/main.css?v=2"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=0"/>

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
        <div class="container pt-4 mt-5">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 mx-auto">

                    <div class="mb-3">
                        <h1 class="fs-2 mb-2">Learn up to 200 phrasal verbs</h1>
                        <p class="text-dark"> <a href="https://es.wikipedia.org/wiki/Verbo_preposicional_(ingl%C3%A9s)">Phrasal verbs</a> are very common in English, especially in more informal contexts. They are made up of a verb and a particle or, sometimes, two particles. The particle often changes the meaning of the verb.</p>
                    </div>

                    <div class="d-block d-md-flex mt-5">
                        <div class="mb-3 mb-md-0 pt-4">
                            <span>Group <span class="d-none d-md-inline">phrasal verbs</span> by:</span>
                            <a href="../phrasal-verbs" class="px-2 link link-dark text-decoration-underline">Groups</a>
                            <a href="../phrasal-verbs/group-by-verb" class="px-2 link link-dark text-decoration-underline">Verbs</a>
                            <a href="../phrasal-verbs/group-by-preposition" class="px-2 link link-dark text-decoration-underline">Prepositions</a>
                        </div>
                        <div id="search_" class="pt-4 ms-auto">
                            <input type="text" class="form-control" placeholder="Search..." id="search">
                        </div>
                    </div>


                    <div id="phrasal-verbs" class="mt-4">

                        <?php
                        include("pv-pre.html");
                        ?>

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
        <img src="../src/media/arrow.png" alt="arrow to scroll up" width="14">
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- <script src="./src/js/phrasal-verbs.js?v=1"></script> -->
    <script src="./src/js/spy.js?v=3"></script>

    <script>
        let filter = "1";
        let url1 = "../src/data/phrasal-verbs1.json";
        let url = "phrasal-verbs-preposition";
    </script>
    <script src="../src/js/phrasal-verbs.js?v=1"></script>

</body>

</html>