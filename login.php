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
                <h1><span>Log</span>In</h1>
            </div>

            <div class="row" style="display: flex; justify-content:center;align-items:center">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="login-card">
                        <img src="./images/login.png" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="#">

                        <input type="text" class="form-control" placeholder="Enter Name Here.." required><br>
                        <input type="email" class="form-control" placeholder="Enter Email Here.." required><br>
                        <input type="password" class="form-control" placeholder="Enter Password Here.." required><br>
                        <p>
                            <input type="checkbox" required> I agree to the terms & conditions
                        </p>
                        <p>
                            <a href="signup.php">Don't have an account? Sign Up</a>
                        </p>
                        <input type="submit" value="Log In" class="submit" required>

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