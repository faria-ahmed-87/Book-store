<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turner</title>

    <link rel="stylesheet" href="style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>

<body>







    <?php
    include_once 'nav.php';
    ?>


    <section class="book">
        <div class="container" style="margin-top: 50px;">
            <div class="main-text">
                <h1><span>D</span>etails</h1>
            </div>

            <div class="row">

                <!-- 
                <div class="product-container">
                    <div class="image-slider">
                        <div class="image-main">
                            <img src="./images/parrot2.jpg" alt="Main Image" class="main-image">
                        </div>
                        <div class="thumbnails">
                            <img src="./images/parrot1.jpg" alt="Thumbnail 1" class="thumbnail">
                            <img src="./images/heron.jpeg" alt="Thumbnail 2" class="thumbnail">
                            <img src="./images/owl1.jpg" alt="Thumbnail 3" class="thumbnail">
                        </div>
                    </div>
                    <div class="product-details">
                        <h2>IMPERIAL EBONY BLACK PANJABI</h2>
                        <p class="price">
                            <span class="original-price">3,650৳</span>
                            <span class="discounted-price">2,190৳</span>
                        </p>
                        <button class="size-chart-btn">Size Chart</button>
                        <div class="size-selection">
                            <label for="size">Size</label>
                            <select id="size">
                                <option value="">Choose an option</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        <div class="quantity-cart">
                            <input type="number" value="1" min="1" class="quantity">
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                        <button class="buy-now">Buy Now</button>
                    </div>
                </div> -->

                <div class="product-container">
                    <div class="image-slider">
                        <button class="arrow left-arrow">&#10094;</button>
                        <div class="image-main">
                            <img src="./images/parrot2.jpg" alt="Main Image" class="main-image">
                        </div>
                        <button class="arrow right-arrow">&#10095;</button>
                        <div class="thumbnails">
                            <img src="./images/parrot1.jpg" alt="Thumbnail 1" class="thumbnail">
                            <img src="./images/heron.jpeg" alt="Thumbnail 2" class="thumbnail">
                            <img src="./images/owl1.jpg" alt="Thumbnail 3" class="thumbnail">
                        </div>
                    </div>
                    <div class="product-details">
                        <h2>IMPERIAL EBONY BLACK PANJABI</h2>
                        <p class="price">
                            <span class="original-price">3,650৳</span>
                            <span class="discounted-price">2,190৳</span>
                        </p>
                        <button class="size-chart-btn">Size Chart</button>
                        <div class="size-selection">
                            <label for="size">Size</label>
                            <select id="size">
                                <option value="">Choose an option</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        <div class="quantity-cart">
                            <input type="number" value="1" min="1" class="quantity">
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                        <button class="buy-now">Buy Now</button>
                    </div>
                </div>


            </div>

        </div>
    </section>





    <?php
    include_once 'footer.php';
    ?>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./app2.js"></script>
</body>

</html>