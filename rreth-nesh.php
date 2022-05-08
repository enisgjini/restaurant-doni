<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="css/main.css">


</head>

<body>
    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('templates/header.php'); ?>


    <!-- Navbar Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\navbar.php -->
    <?php include('./templates/navbar.php'); ?>


    <!-- Carousel of images Included -->
    <!-- Path → C:\xampp\htdocs\restaurant-doni\templates\carousel-of-images.php -->
    <?php include('./templates/carousel-of-image-2.php'); ?>



    <!-- First Div -->
    <div class="container mt-5 mb-5">
        <h1 class="doni-text-second text-center"><i>Italian Restaurant</i></h1>
        <h1 class="doni-bg-text text-center text-body mt-5">Tregimi jonë</h1>
        <p class="doni-paragraph text-center mt-5 mb-5">Fusce at risus eget mi auctor pulvinar. Suspendisse maximus venenatis pretium. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam purus purus, lacinia a scelerisque in, luctus vel felis. Donec odio diam, dignissim a efficitur at, efficitur et est. Pellentesque semper est ut pulvinar ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla et leo accumsan, egestas velit ac, fringilla tortor. Sed varius justo sed luctus mattis.</p>
    </div>

    <!-- Second Div -->
    <div class="container-fluid mt-5 mb-5" style="background-image: url('img/video-player.jpg');">
        <h1 class="doni-text-second text-center text-light pt-5"><i>Zbulo</i></h1>
        <h1 class="doni-bg-text text-center pt-5  text-light "><strong> Video jonë</strong></h1>
        <a href="#" onclick="lightbox_open();">
            <div class="wrapper">
                <div class="circle pulse"></div>
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <polygon points="40,30 65,50 40,70"></polygon>
                    </svg>
                </div>
            </div>
        </a>

        <div id="light">
            <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
            <video id="VisaChipCardVideo" width="600" controls>
                <source src="img/video-1.mp4" type="video/mp4">
                <!--Browser does not support <video> tag -->
            </video>
        </div>
        <div id="fade" onClick="lightbox_close();"></div>
    </div>

    <!-- Third Div -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="doni-text-second pt-5 pb-2 text-center">Delicious</h1>
                    <h1 class="doni-bg-text pt-2 pb-5 text-center text-body">RECIPES</h1>
                    <p class="doni-paragraph text-center">
                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="img/mengjesi.jpg" class="img-responsive mt-5 mb-5" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:25px">
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="bg-dark border-3 border-top border-dark">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/mengjesi.jpg" class="img-responsive mt-5 mb-5" alt="" style="width: 100%;height: 350px;object-fit: cover;border-radius:25px">
                </div>
                <div class="col-sm-6">

                    <h1 class="doni-text-second pt-5 pb-2 text-center">Romantic</h1>
                    <h1 class="doni-bg-text pt-2 pb-5 text-center text-body">RECIPES</h1>
                    <p class="doni-paragraph text-center">
                        Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                    </p>
                </div>
            </div>
        </div>
    </div>
















    <!-- Footer Included -->
    <!-- Path →  C:\xampp\htdocs\restaurant-doni\templates\footer.php -->
    <?php include('./templates/footer.php'); ?>

</html>
</body>

</html>

<script>
    window.document.onkeydown = function(e) {
        if (!e) {
            e = event;
        }
        if (e.keyCode == 27) {
            lightbox_close();
        }
    }

    function lightbox_open() {
        var lightBoxVideo = document.getElementById("VisaChipCardVideo");
        window.scrollTo(0, 0);
        document.getElementById('light').style.display = 'block';
        document.getElementById('fade').style.display = 'block';
        lightBoxVideo.play();
    }

    function lightbox_close() {
        var lightBoxVideo = document.getElementById("VisaChipCardVideo");
        document.getElementById('light').style.display = 'none';
        document.getElementById('fade').style.display = 'none';
        lightBoxVideo.pause();
    }
</script>