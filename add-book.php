<?php
// session_start();

include_once 'config.php';



if (isset($_POST['submit'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount_price'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $path = "uploads/" . $img_name;
    move_uploaded_file($img_loc, $path);

    // Updated SQL query
    $sql = "INSERT INTO `books`(`category_id`, `name`, `price`,`discount_price`, `image`) VALUES ('$category_id', '$name', '$price','$discount', '$path')";
    $result = mysqli_query($conn, $sql);

    // if ($result) {
    //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> books Added Successfully.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>';
    //     header("Location: bookes.php");
    // } else {
    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Error!</strong> books Not Added.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>';
    // }

    if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Book Added Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        echo "<script>
            setTimeout(() => {
                const badge = document.getElementById('notification-badge');
                if (badge) {
                    badge.style.display = 'flex'; // Show the badge
                    badge.textContent = parseInt(badge.textContent || 0) + 1; // Increment count
                }
            }, 500);
        </script>";
    }
    
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turner</title>

    <link rel="stylesheet" href="css/style2.css">

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
        <?php include_once 'side-menu.php'; ?>
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
            <div class="form-content">
                <div class="form-header">
                    <h2>Add Slider</h2>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Category</label>
                        <select name="category_id" id="category_id">
                            <option value="">Select Category</option>
                            <?php
                            $sql = "SELECT * FROM `categories`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="price">Discount Price</label>
                        <input type="text" name="discount_price" id="price" placeholder="Enter Dis price">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" accept="image/*" id="image">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn-primary">Add</button>
                    </div>
                </form>
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