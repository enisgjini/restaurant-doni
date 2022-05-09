<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('scripts/head-script.php'); ?>

    <style>

    </style>
</head>

<body>
    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('templates/bootstrap-navbar.php'); ?>


    <!-- Carousel of images Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
    <?php include('carousels/carousel-of-image-3.php'); ?>





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
                <img src="img/gallery-img/pamja-mbrenda-1.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-mbrenda">
                <img src="img/gallery-img/pamja-mbrenda-2.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-mbrenda">
                <img src="img/gallery-img/pamja-mbrenda-3.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-1.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-2.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-3.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="pamje-jashte">
                <img src="img/gallery-img/pamja-jasht-4.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-1.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-2.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-3.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-4.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-5.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>
            <div class="col-sm-4 images" data-class="ushqime">
                <img src="img/gallery-img/ushqimi-6.webp" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:15px">
            </div>



        </div>

    </section>

    <script src="js/function.js"></script>

















    <!-- Footer Included -->
    <!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
    <?php include('templates/bootstrap-footer.php'); ?>

    <!-- Body Script Included -->
    <!-- Path →  C:\xampp\htdocs\restaurant-doni\scripts\body-script.php -->
    <?php include('scripts/body-script.php'); ?>

</html>
</body>

</html>