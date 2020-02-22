<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Events - Lavinia Errico</title>

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

    <style type="text/css">
        section.about-content p span {float: left;margin-right: 5px; overflow:hidden;}
        .owl-carousel .owl-item {height: calc(100vh - 50px);}
        .owl-carousel .owl-item .item {width:100%; height:100%;background-size: cover;background-repeat: no-repeat;background-position: top center;}
        .owl-carousel .event1 {background-image: url(images/large/lavinia-errico-h.jpg);}
        .owl-carousel .event2 {background-image: url(images/large/lavinia-errico-h.jpg);}
        .owl-carousel .event3 {background-image: url(images/large/lavinia-errico-h.jpg);}

        .owl-theme .owl-controls {margin-top: -45px;position: relative;}
        .owl-item:after {content: "";position: absolute;left: 0;top: 0;width: 100%;height: 100%;background: rgba(0,0,0,0.25);}

    </style>
    
</head>
<body>

    <?php include 'php/announcement.php'; ?>

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

    <!-- About Section 1 - Hero Image - Slider -->
    <div class="graphic slider owl-carousel-graphic owl-theme" style="margin-top: -165px;">
        <div class="item event1">
            <div class="content">
                <div class="detail">
                    <h3>LOS ANGELES, CA</h3>
                    <h2>USC OWN IT</h2>
                    <h4>Women's Leadership Summit</h4>
                </div>
            </div>
        </div>

        <div class="item event2">
            <div class="content">
                <div class="detail">
                    <h3>LOS ANGELES, CA</h3>
                    <h2>USC OWN IT</h2>
                    <h4>Women's Leadership Summit</h4>
                </div>
            </div>
        </div>

        <div class="item event3">
            <div class="content">
                <div class="detail">
                    <h3>LOS ANGELES, CA</h3>
                    <h2>USC OWN IT</h2>
                    <h4>Women's Leadership Summit</h4>
                </div>
            </div>
        </div>

    </div>
    <!-- About Section 1 - Hero Image - Slider -->

    <!-- Featured Events -->
    <section class="fe-events">
        <div class="wrapper">
            <div class="head-text">
                <h1>FEATURED <span>Events</span></h1>
            </div>

            <div class="page-tabs">
                <ul>
                    <li class="active" id="upcoming">Upcoming</li>
                    <li id="past">Past</li>
                </ul>
            </div>

            <div class="allEvents">

                <div class="fe-past" id="fePast" style="display:none;">
                    <div class="feature-s">

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.1s" data-wow-delay="0.2s" style="background-image:url(images/events/congressional_club.png)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Jan. 8</h2>
                                <h3>Wasington, D.C.</h3>
                            </div>

                            <div class="bottom">
                                <p>#Women Leadership</p>
                                <h2>Congressional Club</h2>
                            </div>
                        </div>

                        <div class="fetre-box fb-mid wow slideInUp" data-wow-duration="0.2s" data-wow-delay="0.2s" style="background-image:url(images/events/beyond_board.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Dec. 3</h2>
                                <h3>Los Angeles, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#entrepreneurship</p>
                                <p>#leadership</p>
                                <h2>Beyond Board</h2>
                            </div>
                        </div>

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s" style="background-image:url(images/events/Allbright.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Nov. 11</h2>
                                <h3>Los Angeles, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#women leadership</p>
                                <h2>The Allbright</h2>
                            </div>
                        </div>

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.2s" data-wow-delay="0.2s" style="background-image:url(images/events/FounderMade.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Oct. 16</h2>
                                <h3>Los Angeles, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#entrepreneurship</p>
                                <p>#wellness</p>
                                <h2>FounderMade 2019</h2>
                            </div>
                        </div>

                        <div class="fetre-box fb-mid wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s" style="background-image:url(images/thumnails/Female_Quotient.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Oct. 2</h2>
                                <h3>Newport, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#business</p>
                                <p>#wealth management</p>
                                <h2>BNY Mellon Summit</h2>
                            </div>
                        </div>

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.4s" data-wow-delay="0.2s" style="background-image:url(images/events/Worldz.png)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Sept. 11</h2>
                                <h3>Long Beach, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#entrepreneurship</p>
                                <p>#leadership</p>
                                <h2>Worldz 2019 Masters</h2>
                            </div>
                        </div>

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.2s" data-wow-delay="0.2s" style="background-image:url(images/events/MPTF.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>July 28.</h2>
                                <h3>Los Angeles, CA</h3>
                            </div>

                            <div class="bottom">
                                <p>#business</p>
                                <p>#women leadership</p>
                                <h2>MPTF: Deal With It</h2>
                            </div>
                        </div>


                        <div class="fetre-box fb-mid wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s" style="background-image:url(images/events/1Hotel.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>July 12.</h2>
                                <h3>New York, NY</h3>
                            </div>

                            <div class="bottom">
                                <p>#business</p>
                                <p>#wellness</p>
                                <h2>1 Hotel</h2>
                            </div>
                        </div>

                        <div class="fetre-box wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s" style="background-image:url(images/events/Assemblage.jpg)">
                            <div class="hover easef"></div>
                            <div class="top">
                                <h2>Nov 15.</h2>
                                <h3>New York, NY</h3>
                            </div>

                            <div class="bottom">
                                <p>#entrepreneurship</p>
                                <p>#spirituality</p>
                                <h2>The Assemblage</h2>
                            </div>
                        </div>

                    </div>

                    <a href="soon.php">VIEW ALL</a>               
                </div>
                
                <div class="fe-coming" id="feComing">
                    <ul>
                        <li>
                            <div class="calendar wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                                <div class="box">
                                    <div class="title">FEB</div>
                                    <div class="footer">7</div>
                                    <div class="day">FRI</div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="image wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="background-image:url(images/events/EmpowHer.png);"></div>
                                <span>#Networking Event</span>
                                <span>#Women Leadership</span>
                                <span>#Entrepreneurship</span>
                            </div>

                            <div class="content">
                                
                                <h3><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Los Angeles, CA</span></span></h3>

                                <h2><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.4s">Empow<em>Her</em></span></span></h2>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Hudson Theatres</span></span></p>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">120 E 8th Street Ste. #607, Los Angeles, CA</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">11:00 am - 2:00 pm</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">Join us for a very special networking event where Lavinia Errico, will share her insights on what it takes to be a thriving and successful businesswoman.</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.8s">Meet and connect with like-minded women over coffee, mimosas, and special treats from our sponsors all in the spirit of connection and the movement of empowerment.</span></span></p>

                                <a href="soon.php">More Info</a>
                            </div>
                        </li>

                        <li>
                            <div class="calendar wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                                <div class="box">
                                    <div class="title">FEB</div>
                                    <div class="footer">8</div>
                                    <div class="day">SAT</div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="image wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="background-image:url(images/events/USC.jpg);"></div>
                                <span>#SUMMIT</span>
                                <span>#WOMEN LEADERSHIP</span>
                            </div>

                            <div class="content">

                                <h2><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.4s">USC <em>OWN IT</em></span></span></h2>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">University of Southern California</span></span></p>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">Bovard Auditorium</span></span></p>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">3551 Trousdale Pkwy, Los Angeles, CA</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">11:00 am - 2:00 pm</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">Our annual summit bridges the gap between female leaders of the 21st century and the rising women who’d like to join them.</span></span></p>

                                <a href="soon.php">More Info</a>
                            </div>
                        </li>

                        <li>
                            <div class="calendar wow slideInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                                <div class="box">
                                    <div class="title">FEB</div>
                                    <div class="footer">8</div>
                                    <div class="day">SAT</div>
                                </div>

                                <div class="box">
                                    <div class="title">FEB</div>
                                    <div class="footer">9</div>
                                    <div class="day">SUN</div>
                                </div>
                            </div>

                            <div class="media">
                                <div class="image wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="background-image:url(images/events/Sukshma.jpg);"></div>
                                <span>#WELLNESS</span>
                                <span>#SPIRITUALPRACTICE</span>
                            </div>

                            <div class="content">

                                <h2><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.4s">Sukshma <em>Vyayama</em></span></span></h2>

                                <p class="iu"><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">NAAM Yoga LA</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">7:00 am - 8:50 am</span></span></p>

                                <p><span><span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.7s">This intensive is designed to instill commitment and discipline in the healing breath and micro movement practice of Sukshma Vyayama, an ancient technique from the Himalayas. All fitness levels are welcome!</span></span></p>

                                <a href="soon.php">More Info</a>

                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- Featured Events -->

    <!-- book section -->
    <section class="booklavinia">
        <div class="wrapper">
            <h2>Interested in having <em>Lavinia</em> at your next event?</h2>
            <a href="book-lavinia.php" class="bookbtn">Book Lavinia</a>
        </div>
    </section>
    <!-- book section -->
    <script type="text/javascript">

        $('.owl-carousel-graphic').owlCarousel({
            autoPlay : true,
            stopOnHover : false,
            
            navigation : false,
            pagination : true,

            responsive: true,
            responsiveRefreshRate : 200,
            responsiveBaseWidth: window,

            singleItem:true
        });

        $('#upcoming').click(function () {
            $(this).addClass('active');
            $('#past').removeClass('active');

            $('#fePast').hide();
            $('#feComing').show();
        });

        $('#past').click(function () {
            $(this).addClass('active');
            $('#upcoming').removeClass('active');
            
            $('#feComing').hide();
            $('#fePast').show();
        });
    
    </script>

    <?php include 'php/footer.php'; ?>
    
</body>
</html>