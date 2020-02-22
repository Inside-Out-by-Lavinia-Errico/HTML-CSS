<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Speaking - Lavinia Errico</title>

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
        section.section-hero .marquee-text {position: relative;width: 100%;height: auto;left: unset;top: unset;margin-top: 47vh;}
        section.section-hero .marquee-text h3 {text-align: center;color: #fff;text-transform: uppercase;margin-top: -75px;}
        section.section-hero .marquee-text .marqueee {margin-top:0px;}
        .accordion-content .accordion p {font-size: 22pt;letter-spacing: 0.25px;font-weight: 200;}
        .gd6-wrap {width: 430px !important;}

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

        <div class="graphic" data-parallax="scroll" data-image-src="images/large/LE_Web.jpg">
            <div class="marquee-text">
                <h3>I Enjoy Talking ABout...</h3>
                <marquee class="marqueee" scrolldelay="16" scrollamount="16">
                    <h1>ENTREPRENEURSHIP <span>WELLNESS</span> PERSONAL GROWTH <span>FEMALE LEADERSHIP</span></h1>
                </marquee>
            </div>
        </div>
    </section>
    <!-- Section 1 - Video Display -->

    <!-- Section About Content -->
    <section class="about-content">
        <div class="wrapper">

            <h2>
                <span>
                    <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">What makes <em>Lavinia Errico</em></span>
                </span>

                <span>
                    <span class="wow slideInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">a different kind of speaker?</span>
                </span>
            </h2>

            <div class="abtcontent" style="overflow: hidden; margin-top:25px;">
                <div class="grid-6 gd6-wrap">
                    <p id="wrapTextAnimation1">Unline other speakers, Lavinia has done it all. She has successfully created and critically examined the American Dream. A self-made business leader and entrepreneur, in her 20s and 30s Lavinia conceived of and built a leading Fitness Company and Culture that changed the way Americans think about health and wellness. She became the quintessential "It Girl," and at the peak of her success she sold Equinox for millions and was instantaneously wealthy beyond her needs and dreams. Ironically, at the apex of the proverbial American Dream, Lavinia realized that somewhere along the way she had lost the things that were most important to her essential self and identity. Despite multiple offers to immediately jump back into business and create even greater wealth and material success, Lavinia had the courage to</p>
                </div>

                <div class="grid-6 gd6-wrap">
                    <p id="wrapTextAnimation2">embark on a completely different path - a journey to rebuild her identity from the inside out and to find a better way to live a more authentic, values-grounded life. She sought and found answers to the vital questions: How do you stay present to your soul in a competitive work environment? How do you remain aligned with your true self and avoid becoming completely absorbed by money, greet and social accolades? How do you choose throughfully and powerfully in your life and career, and not from fear of failure? How do you reach for the stars in business while remaining grounded in your humanity? When is enough money truly enough? Lavinia has these answers because she's lived this journey, and she is absolutely brilliant at sharing her experiences and insights with others.</p>
                </div>
            </div>

            <a href="book-lavinia.php">Book Lavinia</a>

        </div>
    </section>
    <!-- Section About Content -->

    <!-- Section Brands -->
    <section class="brands">
        <h3>BRANDS I’VE WORKED WITH</h3>
        <div class="brand-marquee">
            <div id="owl-example" class="owl-carousel">
                <div><img src="images/brands/1Hotels.png"></div>
                <div><img src="images/brands/Allbright.png"></div>
                <div><img src="images/brands/BMW.png"></div>
                <div><img src="images/brands/BNY.png"></div>
                <div><img src="images/brands/Fabletics.png"></div>
                <div><img src="images/brands/Foundermade.png"></div>
                <div><img src="images/brands/Girlboss.png"></div>
                <div><img src="images/brands/GS.png"></div>
                <div><img src="images/brands/LA Confidential.png"></div>
                <div><img src="images/brands/Lululemon.png"></div>
                <div><img src="images/brands/MPTF.png"></div>
                <div><img src="images/brands/Nike.png"></div>
                <div><img src="images/brands/Roar.png"></div>
                <div><img src="images/brands/Soho House.png"></div>
                <div><img src="images/brands/Sonage.png"></div>
                <div><img src="images/brands/USC.png"></div>
                <div><img src="images/brands/Worldz.png"></div>
                <div><img src="images/brands/XX.png"></div>
            </div>
        </div>
    </section>
    <!-- Section Brands -->

    <!-- Section Testimonail -->
    <section class="testimonial">
        <div class="wrapper">

            <h3>KIND WORDS</h3>

            <div id="owl-example-testi" class="owl-carousel">
                <div>
                    <h2>“Lavinia Errico is one of the most inspiring motivational speakers I’ve had the privilege of experiencing. She is like a healthy drug— you leave wanting more. She is a mentor, a teacher, a true leader and pioneer in the health and wealth arena. Her boldness, directness and courage will force you out of your comfort zone and encourage you to look inward to create profound life changes.” <br> <strong>— ELYSE WALKER, FASHION ENTREPRENEUR</strong>
                    </h2>
                </div>

                <div>
                    <h2>“The true art of motivating others involves not only taking everyone to a level of energy that makes them feel uplifted and excited, but also creating the immediate reaction of ACTION. That’s what Lavinia has done for our private women in business group. We left wanting more, and within days of leaving her presence, many embraced the advice and vision of loving yourself INSIDE and OUT. The genuine nature of her message, the true life experience, the credibility and delivery of hard work meets desire, are all talents that only Lavinia can deliver.” <br> <strong>— ANNE ACKERMAN, FOUNDER OF R.O.A.R. {SOCIETY}</strong>
                    </h2>
                </div>

                <div>
                    <h2>“Lavinia’s insight and knowledge are invaluable. She helped me transform my life and get to the essence of my truth, enabling me to be my best self both personally and professionally. She’s a special teacher and mentor to me.” <br> <strong>— MICHELLE EDGAR, VP BRANDING, EPIC RECORDS</strong>
                    </h2>
                </div>

                <div>
                    <h2>“Lavinia has been an enormous help to me in my professional career. She has always emphasized the HUSTLE and encouraged me to be open and ready when new challenges and learning experiences present themselves on the job and in life. She inspires me to dig deep and always show up with the best version of myself, and to find the joy in everything I do, even those “mundane” tasks. She has taught me the power of Grit and Grace, and shown me that, in addition to creativity and passion, you have to believe in yourself 100% and work your ass off. That’s the mantra that I needed to succeed. As a younger professional in a competitive workplace, I feel incredibly lucky to have a mentor like Lavinia. Her experience, wisdom, honesty and realness are priceless.” <br> <strong>— SOPHIE GALATE, MUSIC MANAGER/SINGER/SONGWRITER</strong>
                    </h2>
                </div>            
            </div>
        </div>
    </section>
    <!-- Section Testimonail -->

    <!-- Section About Image -->
    <section class="about-image" data-parallax="scroll" data-image-src="images/large/lavinia-errico.jpg">
        <div class="wrapper"></div>
    </section>
    <!-- Section About Image -->

    <!-- Signature Talks -->
    <section class="sigtalks">
        <div class="wrapper">
            <div class="head-text">
                <h1>Signature <span>Talks</span></h1>
            </div>

            <div class="accordion-content">
                <div class="accordion easef"><p>Confessions of a Spiritual Entrepreneur</p><span class="easef"></span></div>
                <div class="panel">
                    <p>We all dream of "having it all." But in today's world, what does having it all really look like? Spiritual Entrepreneur Lavinia Errico will take you on a journey to discover your own path to success at work and authentic happiness and fulfillment in life.</p>
                </div>

                <div class="accordion easef"><p>The Joy in the Journey: Finding Your Lane</p><span class="easef"></span></div>
                <div class="panel">
                    <p>We all dream of "having it all." But in today's world, what does having it all really look like? Spiritual Entrepreneur Lavinia Errico will take you on a journey to discover your own path to success at work and authentic happiness and fulfillment in life.</p>
                </div>

                <div class="accordion easef"><p>Bad Habits Life Hack: Breaking Free from Damaging Habits and Embracing Success</p><span class="easef"></span></div>
                <div class="panel">
                    <p>We all dream of "having it all." But in today's world, what does having it all really look like? Spiritual Entrepreneur Lavinia Errico will take you on a journey to discover your own path to success at work and authentic happiness and fulfillment in life.</p>
                </div>

                <div class="accordion easef"><p>It's Not Your Money or Your Life - It's Your Money and Your Life</p><span class="easef"></span></div>
                <div class="panel">
                    <p>We all dream of "having it all." But in today's world, what does having it all really look like? Spiritual Entrepreneur Lavinia Errico will take you on a journey to discover your own path to success at work and authentic happiness and fulfillment in life.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- Signature Talks -->

    <!-- Speech Topics -->
    <section class="spchtopics">
        <div class="wrapper">
            <h3>Other Speech Topics</h3>

            <div class="abtcontent" style="overflow: hidden; margin-top:25px;">
                <div class="grid-6 gd6-wrap">
                    <ul class="ostul">
                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Values and Entrepreneurship</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Next Generation Leadership</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Culture Shift: The Women Led Workplace</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Spirituality In and Out of the Office</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Finding Your Lane: A Love Story</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Habits of Success in the Workplace</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Joy in the Hustle</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Keeping the Soul in Success</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Creativity, Clarity and Grit: The Sacred Triangle of Success</span>
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="grid-6 gd6-wrap">
                    <ul class="ostul">
                    <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Values and Entrepreneurship</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Next Generation Leadership</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Culture Shift: The Women Led Workplace</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Spirituality In and Out of the Office</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Finding Your Lane: A Love Story</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Habits of Success in the Workplace</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Joy in the Hustle</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Keeping the Soul in Success</span>
                            </span>
                        </li>

                        <li>
                            <span>
                                <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">Creativity, Clarity and Grit: The Sacred Triangle of Success</span>
                            </span>
                        </li>
                    </ul>
                </div>

            </div>

            <a href="events.php" target="_blank">view past events</a>
        </div>
    </section>
    <!-- Speech Topics -->

    <style type="text/css">

        section.sigtalks {
    height: auto;
    background-color: #fdf9f4; padding-top:55px;}

section.sigtalks .head-text h1 {color: #ee2e7b;font-size: 65pt;line-height: 100px;text-align: center;}
section.sigtalks .head-text h1 span {-webkit-text-stroke: 2px #ee2e7b;-webkit-text-fill-color: #fdf9f4;font-size: 65pt;}     
section.sigtalks .head-text p {width: 700px;margin: 20px auto;text-align: center;color: #ee2e7b;line-height: 24px;}


    section.spchtopics {padding: 45px 0;
    height: auto;
    background-color: #fdf9f4;}
    section.spchtopics h3 {text-transform: uppercase;
    text-align: center;
    color: #f06122; padding-bottom:45px;}

    ul.ostul > li {    font-size: 12pt;
    line-height: 24pt;}

    ul.ostul > li span {    overflow: hidden;
    display: block;
    width: 100%;}

    section.spchtopics a {text-align: center;
margin: 0px auto;
color: #ee2e7b;
text-decoration: none;
width: max-content;
display: block;
margin-top: 45px;
padding-bottom: 15px;}

section.spchtopics a:after {background: none repeat scroll 0 0 transparent;
bottom: -5px;
content: "";
display: block;
height: 3px;
left: 0%;
position: relative;
background: #ee2e7b;
transition: width 0.3s ease 0s, left 0.3s ease 0s;
width: 100%;}

section.spchtopics a:hover:after { width: 0; 
left: 50% }

    </style>

    <?php include 'php/footer.php'; ?>
    
</body>
</html>