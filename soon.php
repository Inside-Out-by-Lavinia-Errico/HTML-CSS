<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Work in Progress</title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#fdf9f4">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#fdf9f4">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#fdf9f4">

    <!-- Keywords -->
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Lavinia Errico" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Inside Out Movement by Lavinia Errico" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="">
    <meta property="og:url" content="http://www.laviniaerrico.com/" />
    <meta property="og:site_name" content="Lavinia Errico" />

    <!-- jquery google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Animate CSS -->
    <link rel="stylesheet" href="plugins/animate/animate.css">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="plugins/owl/owl.carousel.css">    
    <link rel="stylesheet" href="plugins/owl/owl.theme.css">      
    <script src="plugins/owl/owl.carousel.min.js"></script>

    <!-- Parallax -->
    <script src="plugins/parallax/parallax.js"></script>

    <!-- WOW JS -->
    <script src="plugins/wow/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- Css Files -->
    <link rel='stylesheet' type='text/css' href='css/theme.css'>
    <link rel='stylesheet' type='text/css' href='css/nav.css'>
    <link rel='stylesheet' type='text/css' href='css/responsive.css'>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/zts8wwo.css">

    <!-- Javascript -->
    <script src='js/main.js'></script>
    
</head>
<body>

    <?php include 'php/announcement.php'; ?>

    <!-- navigation and menubar -->
    <nav class="about-io" data-nav-status="toggle">
        <div class="nav-wrap">
            <div class="nav-lft"></div>
            <div class="nav-mdl">
                <div class="logmenu">
                    <a href="index.php"><img id="io_logo" src="images/icons/logo_black.png"></a>
                </div>
            </div>
            <div class="nav-rgt">
                <div class="nav-ham-menu" id="ham-menu" data-logo="logo_black">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="menubar" id="menubar">
            <div class="wrapper">
                <div class="sh-wrapper-inner">
                    <div class="content">
                        <?php include 'php/menubar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- navigation and menubar -->

    <style type="text/css">

        section.soon-content {    padding: 115px 0;
    height: auto;
    background-color: #fdf9f4;}
        section.soon-content h3 {text-align:center; color:#ee2e7b;}
        section.soon-content h2 {    margin: 45px 0px;text-align: center;
    line-height: 40pt;
    font-size: 36pt;
    padding-left: 23px;
    letter-spacing: 0pt;
    overflow: hidden;}
    section.soon-content h2 span {
    overflow: hidden;
    display: block;
    width: 100%;
    height: 55px;
}
        section.soon-content a {    text-align: center;
    margin: 0px auto;
    color: #ee2e7b;
    text-decoration: none;
    width: max-content;
    display: block;
    margin-top: 45px;
    padding-bottom: 15px;}

    section.soon-content a:after {
    background: none repeat scroll 0 0 transparent;
    bottom: -5px;
    content: "";
    display: block;
    height: 3px;
    left: 0%;
    position: relative;
    background: #ee2e7b;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 100%;
}

    </style>

    <!-- soon -->
    <section class="soon-content">
        <div class="wrapper">
            <h3>Coming Soon</h3>

            <h2>
                <span>
                    <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Work <em>in</em> Progress</span>
                </span>
            </h2>

            <a href="#" onclick="window.history.back()">Go Back</a>
            
        </div>
    </section>
    <!-- soon -->

    <?php include 'php/footer.php'; ?>
    
</body>
</html>