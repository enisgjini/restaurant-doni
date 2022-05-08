<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="css/main.css">

    <style>
        .main {
            padding: 50px 0;
        }

        .main h1 {
            font-size: 42px;
            color: #333;
            font-weight: 700;
        }




        .main ul li {
            padding: 5px 5px;
            margin-right: 5px;
            cursor: pointer;
            transition: all .5s ease;
            color: black;
            border-radius: 10px;
        }

        .main ul li.active,
        .main ul li:hover {
            background-color: black;
            color: white;
            border-radius: 10px;
            transition: 0.5s;
        }

        .main ul li:last-of-type {
            margin-right: 0;
        }

        .main .container-fluid {
            overflow: hidden;
            padding: 0;
        }

        .main .container-fluid .col-sm-4 {
            padding: 0;
            float: left;
            transition: all 5s ease-in-out
        }

        .main .container-fluid img {
            width: 100%;
            padding: 10px;
        }

        @media (max-width: 767px) {
            .main .container-fluid img {
                margin-bottom: 15px
            }
        }
    </style>
</head>

<body>
    <?php include('templates/splash-screen.php') ?>
    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('templates/header.php'); ?>


    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('templates/navbar.php'); ?>


    <!-- Carousel of images Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
    <?php include('templates/carousel-of-image-3.php'); ?>


    <section class="main text-center mt-5">
        <div class="container ">
            <ul class="nav nav-pills nav-fill d-flex flex-column flex-sm-row ">
                <li class="nav-item active mb-2 doni-paragraph" data-class="all">Të gjitha fotot</li>
                <li class="nav-item mb-2 doni-paragraph" data-class="pamje-mbrenda">Pamja nga mbrenda</li>
                <li class="nav-item mb-2 doni-paragraph" data-class="pamje-jashte">Pamja nga jashtë</li>
                <li class="nav-item mb-2 doni-paragraph" data-class="ushqime">Ushqime</li>
            </ul>

        </div>

        <div class="container-fluid mt-5">
            <div class="col-sm-4 images" data-class="pamje-mbrenda">
                <img src="img/gallery-img/pamja-mbrenda-1.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-mbrenda">
                <img src="img/gallery-img/pamja-mbrenda-2.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-mbrenda">
                <img src="img/gallery-img/pamja-mbrenda-3.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-1.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-2.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-3.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-4.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-1.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-2.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-3.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-4.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-5.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-6.jpg" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>



        </div>

    </section>

    <script src="js/function.js"></script>

















    <!-- Footer Included -->
    <!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
    <?php include('./templates/footer.php'); ?>

</html>
</body>

</html>