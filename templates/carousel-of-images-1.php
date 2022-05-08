<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">


    <style>
        carousel-inner,
        .carousel,
        .item,
        .container,
        .fill {
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }

        .carousel-inner>.item {
            top: 0;
        }

        /* .carousel-inner > .item.next{
  transition: height 1s ease;
}
.carousel-inner > .item.active.prev{
  transition: height 1s ease;
}
.carousel-inner > .item.active.next{
  transition: height 1s ease;
} */
        .slide-wrapper {
            display: inline;
        }

        .slide-wrapper .container {
            padding: 0px;
        }

        /*------------------------------ vertical bootstrap slider----------------------------*/
        .carousel-inner>.item {
            -webkit-transition-property: opacity;
            transition-property: opacity;
        }

        .carousel-inner>.item,
        .carousel-inner>.active.left,
        .carousel-inner>.active.right {
            opacity: 0;
        }

        .carousel-inner>.active,
        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            opacity: 1;
        }

        .carousel-inner>.next,
        .carousel-inner>.prev,
        .carousel-inner>.active.left,
        .carousel-inner>.active.right {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        /* .carousel-inner > .item.next {
  height: 100%;
  top:0;
}
.carousel-inner > .item.active.right {
  transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  top: 0;
  height:0%;
  
}
.carousel-inner > .item.prev{
    height:100%;
  top:0;
}
.carousel-inner > .item.active.left {
  transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
    height:0%;

}
.carousel-inner > .item.next.left {
  height:0%
}
.carousel-inner > .item.prev.right{
  height: 100%
}
.carousel-inner > .item.active {
  transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  top: 0;
  height:100%;
} */

        /*------------------------------- vertical carousel indicators ------------------------------*/
        .carousel-indicators {
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            height: 20px;
            right: 20px;
            left: auto;
            width: auto;
        }

        .carousel-indicators li {
            display: block;
            margin-bottom: 8px;
            border: 1px solid #fff;
        }

        .carousel-indicators li.active {
            margin-bottom: 8px;
            background: #fff;
        }
    </style>
</head>

<body>
    <!-- Carousel -->
    <!-- <div class="top-content">
        <div id="carousel-example" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-example" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-example" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-example" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h1>Carousel Fullscreen Template</h1>
                        <div class="carousel-caption-description">
                            <p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
                        </div>
                    </div>
                    <img src="https://scontent.fprn13-1.fna.fbcdn.net/v/t39.30808-6/244265649_6223969494342015_2916767480693692262_n.jpg?_nc_cat=102&ccb=1-6&_nc_sid=8bfeb9&_nc_ohc=ofh9ArdWn-YAX9ySJPp&tn=RsCJ1N4nfitcI2u4&_nc_ht=scontent.fprn13-1.fna&oh=00_AT82BXi2rIsLCABMs7uKfYwpKrRJGspbEfB1QhawlKDeLQ&oe=627CBD83" class="d-block w-100" alt="slide-img-1">
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="slide-img-2">
                    <div class="carousel-caption">
                        <h1>Carousel Fullscreen Template</h1>
                        <div class="carousel-caption-description">
                            <p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="slide-img-3">
                    <div class="carousel-caption">
                        <h1>Carousel Fullscreen Template</h1>
                        <div class="carousel-caption-description">
                            <p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> -->
    <!-- End carousel -->


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex flex-column align-items-center justify-content-center min-vh-100" style="background-image:url('./img/slide-1.jpg') ;background-repeat:no-repeat;background-size: cover;">
                    <h1 class="text-white text-center doni-text-second ">
                        Welcome to
                    </h1>
                    <br>
                    <h1 class="text-white text-center doni-card-text display-4">
                        Restaurant DONI
                    </h1>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="d-flex flex-column align-items-center justify-content-center min-vh-100" style="background-image:url('./img/slide-2.jpg') ;background-repeat:no-repeat;background-size: cover;">
                    <!-- <h1 class="text-white text-center doni-text-second">
                        Welcome to
                    </h1>
                    <br>
                    <h1 class="text-white text-center doni-card-text">
                        Restaurant DONI
                    </h1> -->
                </div>
            </div>
            <div class="carousel-item ">
                <div class="d-flex flex-column align-items-center justify-content-center min-vh-100" style="background-image:url('./img/slide-3.jpg') ;background-repeat:no-repeat;background-size: cover;">
                    <!-- <h1 class="text-white text-center doni-text-second">
                        Welcome to
                    </h1>
                    <br>
                    <h1 class="text-white text-center doni-card-text">
                        Restaurant DONI
                    </h1> -->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- /.container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>