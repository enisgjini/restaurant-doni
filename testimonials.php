<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Testimonial Carousel with Star Ratings</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="container-fluid" style="background-color: #A8A8A8;">
        <h2 class="text-center mb-5 ">Testimonials</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="img-box"><img src="img/1_avatar.jpg" alt=""></div>
                    <p class="testimonial text-dark">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                    <p class="overview text-dark"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box"><img src="img/2_avatar.jpg" alt=""></div>
                    <p class="testimonial text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    <p class="overview text-dark"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box"><img src="img/3_avatar.jpg" alt=""></div>
                    <p class="testimonial text-dark">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
                    <p class="overview text-dark"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</body>

</html>