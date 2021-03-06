<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Book Lavinia</title>

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

    <!-- Section About Content -->
    <section class="about-content">
        <div class="wrapper">
            <h2>
                <span>
                    <span class="wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.2s">We’d <em>love</em> to know more. Please</span>
                </span>
                <span>
                    <span class="wow slideInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">fill up the form below:</span>
                </span>
            </h2>

            <div class="form-content">
                <form id="booklavinia" style="margin-bottom: 40px;overflow: hidden;">
                    <div class="se-group">
                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="FIRST NAME*" data-name="firstname" data-type="len" data-max="3" id="firstname" autocomplete="off">
                        </div>

                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="LAST NAME*" data-name="lastname" data-type="len" data-max="3" id="lastname" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="EMAIL*" data-name="email" data-type="email" id="email" autocomplete="off">
                        </div>

                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="PHONE" id="phone" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group" style="overflow:initial">
                        <div class="diformdivide">   
                            <p>Service</p>
                            <div class="custom-select">
                                <select class="easef" data-name="service" data-type="select" id="service">
                                    <option value="-1">Select One</option>
                                    <option value="Workshops">Workshops</option>
                                    <option value="Speaking">Speaking</option>
                                    <option value="Retreats">Retreats</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="diformdivide">   
                            <p>Referred By</p>                     
                            <div class="custom-select">
                                <select class="easef" data-name="referred" data-type="select" id="referred">
                                    <option value="-1">Select One</option>
                                    <option value="Workshops">Workshops</option>
                                    <option value="Speaking">Speaking</option>
                                    <option value="Retreats">Retreats</option>
                                    <option value="Other">Check</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformdivide">   
                            <p>Business Information</p>                         
                            <input type="text" class="easef" placeholder="COMPANY NAME" id="company" autocomplete="off">
                        </div>

                        <div class="diformdivide">
                            <p style="color:#fdf9f4;">null</p>                        
                            <input type="text" class="easef" placeholder="WEBSITE URL" id="websiteurl" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformdivide">   
                            <p>EVENT INFORMATION (IF APPLICABLE)</p>                         
                            <input type="text" class="easef" placeholder="EVENT NAME OR TYPE" id="event_name" autocomplete="off">
                        </div>

                        <div class="diformdivide">
                            <p style="color:#fdf9f4;">null</p>                        
                            <input type="text" class="easef" placeholder="EVENT DATE" id="eventdate" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="EVENT CITY" id="event_city" autocomplete="off">
                        </div>

                        <div class="diformdivide">                   
                            <input type="text" class="easef" placeholder="BUDGET RANGE" id="budget_range" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformdivide">                        
                            <input type="text" class="easef" placeholder="APPROX. # OF ATTENDEES" id="attendees" autocomplete="off">
                        </div>

                        <div class="diformdivide">                   
                            <input type="text" class="easef" placeholder="AUDIENCE DESCRIPTION" id="audience" autocomplete="off">
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformfull">
                            <textarea class="easef" placeholder="OTHER DETAILS (THEMES, TOPICS OF INTEREST, ETC.)" data-name="otherdtl" data-type="len" data-max="8" id="otherdtl" autocomplete="off"></textarea>
                        </div>
                    </div>

                    <div class="se-group">
                        <div class="diformfull">
                            <input type="hidden" id="formtype" value="bl">
                            <span class="submit" id="formsubmit">SUBMIT</span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Section About Content -->

    <?php include 'php/footer.php'; ?>
    
</body>
</html>