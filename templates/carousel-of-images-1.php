<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /*
Removes white gap between slides
*/
        .carousel {
            background: #444;
        }

        /*
Forces image to be 100% width and not max width of 100%
*/
        .carousel-item .img-fluid {
            width: 100%;
            height: auto;
        }

        /* 
anchors are inline so you need ot make them block to go full width
*/
        .carousel-item a {
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Top content -->
    <div class="top-content">
        <!-- Carousel -->
        <!-- <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h1>Carousel Fullscreen Template</h1>
                        <div class="carousel-caption-description">
                            <p>This is a free Fullscreen Carousel template made with the Bootstrap 4 framework.</p>
                        </div>
                    </div>
                    <img src="img/1.jpg" class="d-block w-100" alt="slide-img-1">

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
        </div> -->
    </div>
    <!-- End carousel -->


    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" data-interval="6000">
            <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="https://dummyimage.com/1000x400/444/" class=" d-block img-fluid w-100 " alt=" ...">
            </div>
            <div class="carousel-item">
                <img src="https://dummyimage.com/1000x400/444/" class=" d-block img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://dummyimage.com/1000x400/444/" class=" d-block img-fluid w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- /.container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>