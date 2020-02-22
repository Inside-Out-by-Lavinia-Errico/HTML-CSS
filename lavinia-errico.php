<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>About Lavinia Errico</title>

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
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <script type="text/javascript">

        $(document).ready(function () {
            
            var wrapTextAry = ['wrapTextAnimation1', 'wrapTextAnimation2']

            for (var j = 0; j < wrapTextAry.length; j++) {
                var selector = wrapTextAry[j];
                var paragraph = document.getElementById(selector).textContent;
                var newElement = document.getElementById(selector);
                newElement.innerHTML = '';
                
                var words = paragraph.split(" ");
                for (var i = 0; i < words.length; i++) {
                    
                    var pSpan, span, word, sec;
                    sec = 0.5;
                    pSpan = document.createElement('span');

                    // child span element
                    span = document.createElement('span');                
                    span.setAttribute('class', 'wow fadeInUp');
                    span.setAttribute('data-wow-duration', sec + (i / 100) + 's');
                    span.setAttribute('data-wow-delay', '0.1s');
                    word = document.createTextNode(words[i]);
                    span.appendChild(word);

                    // parrent span element
                    pSpan.appendChild(span);

                    newElement.appendChild(pSpan);        
                }
            }
        });

    </script>

    <style type="text/css">
        section.about-content p span {float: left;margin-right: 5px; overflow:hidden;}
    </style>
    
</head>
<body>

    <?php include 'php/announcement.php'; ?>

    <!-- About Section 1 - Hero Image -->
    <section class="section-hero sh-about">
    
        <!-- navigation and menubar -->
        <nav class="hero-image easef animated" data-nav-status="toggle">
            <div class="nav-wrap">
                <div class="nav-lft"></div>
                <div class="nav-mdl">
                    <div class="logmenu">
                        <a href="index.php"><img id="io_logo" src="images/icons/logo.png"></a>
                    </div>
                </div>
                <div class="nav-rgt">
                    <div class="nav-ham-menu" id="ham-menu" data-logo="logo">
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

        <div class="graphic" data-parallax="scroll" data-image-src="images/large/lavinia-errico-h.jpg"></div>
    </section>
    <!-- Section 1 - Video Display -->

    <!-- Section About Content -->
    <section class="about-content">
        <div class="wrapper">

            <h3 style="margin-bottom:25px;">A LITTLE BIT ABOUT ME</h3>
            <h2>
                <span>
                    <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Hi, I’m Lavinia Errico, founder of</span>
                </span>

                <span>
                    <span class="wow slideInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Equinox and the Inside Out</span>
                </span>

                <span>
                    <span class="wow slideInUp" data-wow-duration="1s" data-wow-delay="0.2s">Movement.</span>
                </span>
            </h2>

            <div class="abtcontent" style="overflow: hidden; margin-top:25px;">
                <div class="grid-6 gd6-wrap">
                    <p id="wrapTextAnimation1">Lavinia Errico, the visionary founder behind Equinox Fitness Clubs, is a nationally acclaimed workplace and wellness entrepreneur and a speaker of essential truths on the subjects of Values-Driven Entrepreneurship, Developing Next Generation Leadership, The Women Led Workplace, Spiritual Entrepreneurship, Keeping the Soul in Success, The Habits of Success, Building Your Brand, Culture Shifts, and Joy in the Hustle. A sought after board member, consultant and angel investor in diverse startup companies across a multitude of industries, Errico inspires and transforms individuals and organizations with her unique and often disruptive take on how to create a richer, more authentic, inspiring and joyful career and life journey.</p>
                </div>

                <div class="grid-6 gd6-wrap">
                    <p id="wrapTextAnimation2">Lavinia Errico, the visionary founder behind Equinox Fitness Clubs, is a nationally acclaimed workplace and wellness entrepreneur and a speaker of essential truths on the subjects of Values-Driven Entrepreneurship, Developing Next Generation Leadership, The Women Led Workplace, Spiritual Entrepreneurship, Keeping the Soul in Success, The Habits of Success, Building Your Brand, Culture Shifts, and Joy in the Hustle. A sought after board member, consultant and angel investor in diverse startup companies across a multitude of industries, Errico inspires and transforms individuals and organizations with her unique and often disruptive take on how to create a richer, more authentic, inspiring and joyful career and life journey.</p>
                </div>
            </div>

            <a href="book-lavinia.php">Book Lavinia</a>

        </div>
    </section>
    <!-- Section About Content -->

    <!-- Section About Image -->
    <section class="about-image" data-parallax="scroll" data-image-src="images/large/lavinia-errico.jpg">
        <div class="wrapper"></div>
    </section>
    <!-- Section About Image -->

    <!-- Section Instagram -->
    <section class="lavinia-insta">
        <div class="wrapper">
            <a href="https://www.instagram.com/laviniajoy/" target="_blank">FOLLOW @LAVINIAJOY ON INSTAGRAM</a>
        </div>

        <div class="wrapper">
            <div class="elfsight-app-575b741b-343b-48fb-be48-55f58b3cc327"></div>
        </div>
    </section>
    <!-- Section Instagram -->

    <?php include 'php/footer.php'; ?>
    
</body>
</html>