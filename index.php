<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<title>WebSeries</title>
<?php include "session.php"; ?>
<?php require_once "bootstrap.php"; ?>

<style type="text/css">
    .nav-bar {
        background-color: transparent;
    }

    .w-container {
        margin-left: auto;
        margin-right: auto;
        max-width: 940px;
    }

    #nav {
        background-color: transparent;
    }

    .logo {
        padding-top: 8px;

    }

    .w-nav {
        position: relative;
        background: #dddddd;
        z-index: 1000;
    }

    .w-nav-brand {
        position: relative;
        float: none;
        text-decoration: none;
        color: white;
    }

    .w-nav-overlay {
        position: absolute;
        overflow: hidden;
        display: none;
        top: 100%;
        left: 0;
        right: 0;
        width: 100%;
    }

    .hed {
        background-image: url(img/back.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;

        background-position: 0px 0px, 50% 50%;

    }

    .hero-container {
        margin-top: 29vh;
        text-align: center;
    }

    .w-container {
        margin-left: auto;
        margin-right: auto;
        max-width: 940px;
    }

    .hero-subtitle {
        color: hsla(0, 0%, 100%, .7);
        font-size: 16px;
        line-height: 22px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .hero-heading {
        margin-top: 0px;
        color: #fff;
        font-size: 80px;
        line-height: 85px;
        font-weight: 400;
        text-transform: uppercase;
    }

    button.big {
        margin-right: 9px;
        margin-left: 9px;
        padding: 11px 26px;
        border-color: white !important;
        transition: border 200ms ease, color 200ms ease;
        color: white !important;
        font-size: 16px;
    }

    .button {
        padding: 11px 19px;
        border: 1px solid white;
        background-color: transparent;
        color: white;
        font-size: 14px;
    }

    @media screen and (max-width: 991px) {

        .w-container {
            max-width: 728px !important;
        }

        .w-nav[data-collapse="medium"] .w-nav-menu {
            display: none;
        }

        .nav-menu {
            padding-top: 18px !important;
            padding-bottom: 18px !important;
            border-top: 1px solid #000 !important;
            background-color: rgba(0, 0, 0, .85) !important;
        }

        .menu-button:hover {
            color: #fff !important;
        }

        .menu-button {
            padding: 20px 0px 20px 20px !important;
            color: hsla(0, 0%, 100%, .62) !important;
            font-size: 25px !important;
            line-height: 22px !important;
        }

        .w-container {
            max-width: 728px !important;
        }

        .logo {
            padding-top: 8px !important;
            width: 10% !important;
        }
    }

    @media (max-width: 767px) {
        .menu-button {
            margin-right: 7px !important;
        }

        .hero-heading {
            font-size: 61px !important;
        }

        .logo {
            padding-top: 8px !important;
            width: 10% !important;
        }
    }

    @media screen and (max-width: 479px) {
        .w-container {
            max-width: none !important;
        }

        .hero-container {
            padding-right: 13px !important;
            padding-left: 13px !important;
        }

        .hero-heading {
            font-size: 39px !important;
            line-height: 52px !important;
        }

        .button.big {
            width: 100%;
            margin-right: 0px;
            margin-bottom: 12px;
            margin-left: 0px;
        }

        .logo {
            padding-top: 8px !important;
            width: 10% !important;

        }
    }

    body {
        background-color: black;
    }

    /* body{
	background-image: url("back.jpg");
	background-size: auto;
	background-repeat: no-repeat;
	/* color: white; */

    .navbar-inverse {
        border-radius: 0px;
        border: 0px;
        height: 65px;
    }

    .thumbnail img {
        border-radius: 200px;
        width: 250px;
        height: 250px;
    }

    .thumbnail {
        background-color: #151412;
        border: 0px;
    }

    h3,
    h5 {
        color: #f0ad4e;
    }

    h2,
    h4 {
        color: white;
    }

    a {
        color: #2c2929;
        text-decoration: none;
    }
</style>
</head>

<body>
    <div class="hed">
        <?php
        include "navbar.php";
        ?>
        <div class="hero-container w-container">

            <h1 class="hero-heading" style=" width: 105%;background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">WELCOME_TO_WEBSERIES</h1>
            <!-- <a class="big button w-button" href="tour.php">Watch us live</a> -->
        </div>
    </div>
    <div class="container" style="background-color: black;">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6">
                <img src="img/main.jpg" alt="Chicago" style=" margin-top: 0px; margin-left: 0px; width: 100%; height: 350px; ">
            </div>
            <div class="col-md-6">
                <h1 style="font-size: 45px; color: white;">Great Entertainment</h1><br />
                <p style="font-size: 23px; color: #c0bfbf;">With your Prime membership, you have access to exclusive Amazon Originals, blockbuster Bollywood movies, regional movies and more.</p><br />
                <form method="get" action="login.php">
                    <button class="btn btn-lg" style="background-color:gray; border-radius:10px; margin-top:2px; height: 55px; width: 200px;">&nbsp;&nbsp;Get started&nbsp;&nbsp;</button>
                </form>
            </div>
        </div>
        <!--for row-->
        <div class="row" style="margin-top: 40px;   ">
            <div class="col-md-6">
                <h1 style="font-size: 45px; color: white;">One membership, many benefits</h1><br />
                <p style="font-size: 23px; color: #c0bfbf;">Your Prime membership now also includes ad-free music along with unlimited free, fast delivery on eligible items, exclusive access to deals & more.</p><br />
                <form method="get" action="login.php">
                    <button class="btn btn-lg" style="background-color:gray; border-radius:10px; margin-top:2px; height: 55px; width: 200px;">&nbsp;&nbsp;Get started&nbsp;&nbsp;</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="img/whatchany.jpg" alt="Chicago" style="margin-top: 0px; margin-left: 0px; width: 100%; height: 300px; ">
            </div>
        </div><!-- for row -->

    </div>


    </div><!-- End of row -->
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>