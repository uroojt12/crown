<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Crown Vision Media">
<meta name="description" content="Let us help you show others Your Vision">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.herosolutions.com.pk/metoo/crown/index.php">
<meta property="og:title" content="Crown Vision Media">
<meta property="og:description" content="Let us help you show others Your Vision">
<meta property="og:image" content="https://www.herosolutions.com.pk/metoo/crown/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="https://www.herosolutions.com.pk/metoo/crown/index.php">
<meta property="twitter:title" content="Crown Vision Media">
<meta property="twitter:description" content="Let us help you show others Your Vision">
<meta property="twitter:image" content="https://www.herosolutions.com.pk/metoo/crown/images/thumbnail.jpg">


<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="css/main.css">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="css/responsive.css">
<!-- Font-awsome Css -->
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="css/font-icon.min.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css">
<!-- Datepicker Css -->
<link type="text/css" rel="stylesheet" href="css/datepicker.min.css">
<link type="text/css" rel="stylesheet" href="css/asDatepicker.css">
<link type="text/css" rel="stylesheet" href="css/jquery.rateyo.min.css">


<!-- JS Files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#owl-folio').owlCarousel({
            dots: false,
            nav: true,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            loop: true,
            margin: 20,
            center: true,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
        $('#owl-folioClient').owlCarousel({
            dots: true,
            nav: false,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            loop: true,
            margin: 20,
            // center: true,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
        $('#owl-locations').owlCarousel({
            loop: true,
            margin: 20,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    });
</script>
<!-- Datepicker Js -->
<script type="text/javascript" src="js/datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery-asDatepicker.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('.datepicker').datepicker({
            // multidate: true,
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            multidateSeparator: ',  ',
            templates: {
                leftArrow: '<i class="fi-arrow-left"></i>',
                rightArrow: '<i class="fi-arrow-right"></i>'
            }
        });
        $('.date_picker').asDatepicker({mode: 'multiple', calendars: '2' , displayMode:'dropdown'});
    });
</script>




<!-- Favicon -->
<link type="image/png" rel="icon" href="images/favicon.png">