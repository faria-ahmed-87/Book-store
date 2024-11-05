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
                <h1><span>Contact</span>Us</h1>
            </div>

            <div class="row" style="display: flex; justify-content:center;align-items:center">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29468.97020781703!2d89.29509377568867!3d22.59326383649945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a01d42e13245d21%3A0x663812c70649e60f!2sPaikgachha%2C%20Bangladesh!5e0!3m2!1sen!2sca!4v1722179867662!5m2!1sen!2sca" width="650" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="#">

                        <input type="text" class="form-control" placeholder="Enter Name Here.." required><br>
                        <input type="email" class="form-control" placeholder="Enter Email Here..." required><br>
                        <textarea class="form-control" rows="5" name="text" placeholder="Enter Your Sms.."></textarea>
                        <input type="submit" value="Book Now" class="submit" required>

                    </form>
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