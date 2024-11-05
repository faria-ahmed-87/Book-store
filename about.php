<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turner</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>

<body>






    <!-- Navbar Start -->
    <?php
    include_once 'nav.php';
    ?>
    <!-- Navbar End -->


    <section class="book">
        <div class="container" style="margin-top: 50px;">
        <div class="main-text">
                <h1><span>About</span>Us</h1>
            </div>

            <div class="row" style="display: flex; justify-content:center;align-items:center">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img style="border-radius: 10px;" src="./images/about.png" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0 text-justify">
                    <h2>Page Turner</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident perferendis dolorem, numquam earum at nam beatae voluptate natus consectetur facere, saepe cupiditate ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam nam.</p>
                    <button id="about-btn">Read More...</button>
                </div>

            </div>

        </div>
    </section>





    <?php
    include_once 'footer.php';
    ?>
    <!-- Footer End -->










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>