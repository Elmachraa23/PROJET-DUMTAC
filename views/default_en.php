<?php
    if (version_compare(phpversion(), '5.4.0', '<')) {
        if(session_id() == '') {
           session_start();
        }
    }
    else
    {
       if (session_status() == PHP_SESSION_NONE) {
           session_start();
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.min.css" integrity="sha512-M0U3q0gtzBgpMf++hqHvaLWyFPubXtEVzk/OO2UEE7Rtvo7wDLh8ClrpWIoUgfGebHxQrPNXmdfYPlrEIZU0Rg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--Link JS Move-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    
    <!--Link Twitter Bootstrap-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"/>-->
    
    <!--Link JS Swiper-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />


    <!--Link Ucons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css"/>
    
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
        crossorigin="anonymous" 
    />   

    <!--Link CSS-->
    <link rel="stylesheet" href="views/assets/css/style.css">
    <link rel="stylesheet" href="views/assets/css/styleDark.css">

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>

    <title>Web Site Dumtac</title>
</head>
<body>

 <!--Header Start-->
    <header>
        <div class="logo">
            <a href="?page=home/index"><img src="views/assets/img/LOGO DUMTAC FINAL-3.png"></a>
        </div>
        <ul class="menu">
            <li>
                <a href="?page=home/index">Home</a>
            </li>    
            <li>
                <a href="?page=agency/index">Agency
                    <i class="fa fa-caret-down"></i>
                    <div class="dropdown_menu">
                        <ul>
                            <li>
                                <a href="?page=agency/strategie_branding">Strategy & Branding</a>
                            </li>
    
                            <li>
                                <a href="?page=agency/content_factory">Content factory</a>
                            </li>
    
                            <li>
                                <a href="?page=agency/social_media">Social Media</a>
                            </li>
                        </ul>
                    </div>             
                </a>
            </li>
    
            <li>
                <a href="?page=studio/index">Studio</a>                 
               
            </li>
    
            <li>
                <a href="?page=home/contact">Contact</a>
            </li>            
        </ul>
        <div class="translate">
            <a class ="text_fr" href="?page=home/translate&lang=fr">
                FR 
            </a>
            <a class ="text_en" href="?page=home/translate&lang=en">
                
            </a>
        </div>       
        <div class="dark_light">
            <input type="checkbox" id="toggle_darkLight">
            <label for="toggle_darkLight" class="button_darkLight"></label>
        </div>  
        <div class="hamburger-menu">
            <div class="bar">
            </div>
        </div>      
    </header>
<!--Header End-->
    
    <div class="arrowBtn">
        <img src="views/assets/img/arrow.svg">
    </div>

<div class = "container">
    <?= $view; ?>
</div>

 <!--Footer Start-->
    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <div class="container">
            <div class="content_footer">
                <div class="profil">
                    <div class="logo">
                        <img src="views/assets/img/LOGO DUMTAC FINAL-3.png">
                    </div>
                    <div class="desc_area">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Natus eum, ducimus ut aliquid rem et!
                        </p>
                    </div>
                    <div class="social_media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/dumtac/about/"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/dumtac/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="service_area">
                    <ul class="service_header">
                        <li class="service_name">Services</li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Cloud</a></li>
                        <li><a href="#">DevOps & Support</a></li>
                    </ul>
                </div>
                <div class="service_area">
                    <ul class="service_header">
                        <li class="service_name">Industries</li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Public Sector</a></li>
                        <li><a href="#">Smart Office</a></li>
                        <li><a href="#">Retail</a></li>
                    </ul>
                </div>
                <div class="service_area">
                    <ul class="service_header">
                        <li class="service_name">Company</li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Join Us</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer_bottom">
                <div class="copy_right">
                    <i class="fa fa-copyright"></i>
                    <span>2022 | Mr. Developer</span>
                </div>
                <div class="tou">
                    <a href="#">Term of Use</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookie</a>
                </div>
            </div>            
        </div>
    </footer>
<!--Footer End-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.min.js" integrity="sha512-hNnjFWCqifslGhuZJVHjXdBund00oDV71mBacLyZYVwmuf+Lx+MGgoG04wehsvhp6FvLYfycrES+b1yh24yvhg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->
<script src="views/assets/js/main.js"></script>
</body>
</html>