<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turner</title>

    <link rel="stylesheet" href="style2.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sideber">
        <div class="brand">
            <span class="lab la-affiliatetheme"></span>
            <h3>Page Turner</h3>
        </div>
        <div class="sudemenu">
            <div class="sideber-user">
                <div class="side-img" style="background-image: url(./images/crow.jpg);"></div>
                <div class="user">
                    <small>RAj</small>
                    <p>Software Developer</p>
                </div>
            </div>

            <ul>
                <li>
                    <a href="">
                        <span class="las la-home"></span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="" class="active">
                        <span class="lab la-slideshare"></span>
                        <span>Slider</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="las la-tags"></span>
                        <span>Books Category</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="las la-book"></span>
                        <span>Books</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="las la-sign-out-alt"></span>
                        <span>LogOut</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <label for="menu-toggle" class="menu-toggler">
                <span class="las la-bars"></span>
            </label>
            <div class="search">
                <span class="las la-search"></span>
                <input type="search" placeholder="Enter Keyword">
            </div>
            <div class="head-icon">
                <span class="las la-bell"></span>
                <span class="las la-bookmark"></span>
                <span class="las la-comment"></span>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-ad">
                    <div class="card-icon follow">
                        <span class="las la-users"></span>
                    </div>
                    <div class="card-info">
                        <h2>3,00</h2>
                        <small>Total Users</small>
                    </div>
                    <div class="card-images">
                        <div>
                            <img src="./images/butterfly1.jpeg" alt="">
                            <img src="./images/crow.jpg" alt="">
                            <img src="./images/eagel1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card-ad">
                    <div class="card-icon likes">
                        <span class="las la-users"></span>
                    </div>
                    <div class="card-info">
                        <h2>3,00</h2>
                        <small>Total Users</small>
                    </div>
                    <div class="card-images">
                        <div>
                            <img src="./images/butterfly1.jpeg" alt="">
                            <img src="./images/crow.jpg" alt="">
                            <img src="./images/eagel1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="card-ad">
                    <div class="card-icon comment">
                        <span class="las la-users"></span>
                    </div>
                    <div class="card-info">
                        <h2>3,00</h2>
                        <small>Total Users</small>
                    </div>
                    <div class="card-images">
                        <div>
                            <img src="./images/butterfly1.jpeg" alt="">
                            <img src="./images/crow.jpg" alt="">
                            <img src="./images/eagel1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="chart-grid">
                <div class="chart-follow">
                    <div class="chart-head">
                        <h3>Books</h3>
                        <span class="las la-book"></span>
                    </div>
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>
                <div class="chart-sales">
                    <div class="chart-head">
                        <h3>Sales</h3>
                        <span class="las la-ellipsis-h"></span>
                    </div>
                    <div id="donut-example" style="height: 250px;"></div>
                </div>
            </div>
        </main>
    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./chart.js"></script>
</body>

</html>