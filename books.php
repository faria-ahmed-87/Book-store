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
                <h1><span>B</span>ooks</h1>
            </div>

            <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="./products-details.php" class="image">
                                    <img class="pic-1" src="./images/about.png">
                                    <img class="pic-2" src="images/caderpahar.png">
                                </a>
                                <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women's Top</a></h3>
                                <div class="price">$75.99</div>
                                <p><Span style="color: #fd9c00;">QTY =</Span> 2</p>
                            </div>
                        </div>
                    </div>
              
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="./images/lordof.png">
                                <img class="pic-2" src="./images//blackbeauty.png">
                            </a>
                            <span class="product-sale-label">Sale</span>
                            <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <ul class="product-links">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Men's Blazer</a></h3>
                            <div class="price"><span>$86.33</span> $71.55</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1" src="./images/lordof.png">
                                <img class="pic-2" src="./images//blackbeauty.png">
                            </a>
                            <span class="product-sale-label">Sale</span>
                            <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <ul class="product-links">
                                <li><a href="#"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Men's Blazer</a></h3>
                            <div class="price"><span>$86.33</span> $71.55</div>
                        </div>
                    </div>
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