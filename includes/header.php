<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if(isset($page) && is_string($page)){echo $page;}else{echo 'Fitness Apparel & Accessories | Revolt Cara';} ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content=<?php if(isset($pageTag) && is_string($pageTag)){echo $pageTag;}else{echo 'desired tag';} ?> />
    <meta name="description"
        content=<?php if(isset($pageDesc) && is_string($pageDesc)){echo $pageDesc;}else{echo 'desired description';} ?> />
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">

    
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="topbar-content">
                <ul class="topbar-items d-lg-flex d-none">
                    <li>
                        <a href="javascript:;">
                            <i class="fa-solid fa-clock"></i>
                            10.00 AM to 9.00 PM
                        </a>
                    </li>
                    <li>
                        <a href="tel:+971 58 543 8686">
                            <i class="fa-solid fa-phone"></i>
                            +971 58 543 8686
                        </a>
                    </li>
                </ul>
                <a href="index.php" class="navbar-brand">
                    <img class="img-fluid" src="images/logo.png" alt="">
                </a>
                <ul class="topbar-items end d-lg-flex d-none">
                    <li>
                        <a href="mailto:info@domain.com">
                            <i class="fa-solid fa-envelope"></i>
                            info@domain.com
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa-solid fa-location-dot"></i>
                            visit us
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler d-lg-none d-block" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
            </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="Inventory.php">Inventory</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="About-us.php">About Us</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="contact-us.php" target="blank">Contact Us</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="Seller.php">Sell a Car</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="javascript:;">360° View</a>
                            </li>
                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="News.php">News</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>