<?php
//set timezone for east coast
date_default_timezone_set('America/New_York');

//require supporting functions
require_once("add_entry.php");
require_once("gen_entry.php");


//check to see if there are any other actions they want
//if not, show the general dashboard

if (isset($_GET['action'])) {
	switch($_GET['action']) {
    
	case "add_entry":
	if (!isset($_POST['address'])) {
		$_POST['address'] = NULL;
	}
    if (!isset($_POST['answer'])) {
		$_POST['answer'] = NULL;
	}
    if (!isset($_POST['hash'])) {
		$_POST['hash'] = NULL;
	}
        
    $entry = add_entry($_POST['address'],$_POST['answer'],$_POST['hash']);
	$entryset = true;
	break;
	default:
	$action = "home";
	break;
	}
} else {
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TRONluho (LUHO) Token</title>
    <meta name="description" content="LUHO TRC-20 Token">
    <meta name="author" content="@tronluho">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" type="image/png?" href="https://luho.moe/tron/images/favicon.png">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="https://luho.moe/tron/">
                <img style="width: 60px; margin-top:50px;" src="images/favicon.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#quiz" title="quiz">Quiz</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#form" title="form">Form</a></li>
                    <li><a class="smoothscroll"  href="#guesses" title="guesses">Guesses</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Partners</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
    
                <p>TRONluho Project requires absolutely no investment of TRON (TRX). There is no risk in playing this game. This game only requires you to use <a href='https://tronsmartcontract.space/#/interact/TYcZETwK7MwLdnkueMxyFkikfpKepHckwL'>LUHO</a> (TRC-20) token.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://twitter.com/luhosenpai"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCieOSlmKgmo3at31o1craGg"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://t.me/luhotrade"><i class="fa fa-telegram"></i></a>
                    </li>
                    <li>
                        <a href="https://luho.moe/binance"><i class="fa fa-binance"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <!--<span class="header-menu-text"></span>-->
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

    <!-- home
    ================================================== -->
    <section id="quiz" class="s-home target-section" data-parallax="scroll" data-image-src="/background.png" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to TRONluho</h3>

                <h1>
                    QUIZ: 1 </h1>
                <h2 style="color: #ff3b3b;">
                    Who is my favorite person, other than Justin Sun? <br></h2>
                <h3 style="color: white;">You have until May 3, 2019, 12:00 AM EST to enter in your guess.</h3>
                <h3 id="countdown" style="color: #ff3b3b;"></h3>
                <script>
                // Set the date we're counting down to
                var countDownDate = new Date("May 3, 2019 00:00:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                  // Get todays date and time
                  var now = new Date().getTime();

                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;

                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                  // Output the result in an element with id="countdown"
                  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
                  + minutes + "m " + seconds + "s ";

                  // If the count down is over, write some text 
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                  }
                }, 1000);
                </script>
                <!--<marquee class="page-scroll" style="color: white; margin-top:20px;" behavior="scroll" direction="right"><h3 style="color: white;">DONATION ADDRESS: TVrDrzkNNp7oAX1fu82xheTCxnuRxmTLyB</h3></marquee>-->
                <h3 style="color: white;">CURRENT PRIZE POOL: <span style="color: yellow;">1000 TRX</span></h3>
                
                <div class="home-content__buttons">
                    <a href="#form" class="smoothscroll btn btn--stroke">
                        Submit Guess
                    </a>
                    <a href="#guesses" class="smoothscroll btn btn--stroke">
                        View Guesses
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://twitter.com/luhosenpai" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCieOSlmKgmo3at31o1craGg" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i><span>YouTube</span></a>
            </li>
            <li>
                <a href="https://t.me/luhotrade" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i><span>Telegram</span></a>
            </li>
            <li>
                <a href="https://luho.moe/binance" target="_blank"><i class="fa fa-btc" aria-hidden="true"></i><span>Binance</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">환영합니다!</h3>
                <h1 class="display-1 display-1--light">We are TRONluho</h1>
                Contract: <b>TYcZETwK7MwLdnkueMxyFkikfpKepHckwL</b><br>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                    <!-- <h1>About</h1>
                    <p></p>
                    <p></p>
                    <p></p>
                    
                    
                    </p>-->
                <p>
                TRONluho is a project designed to bring value to the <b>LUHO</b> TRC-20 token on the TRON blockchain. Every week there will be a new QUIZ question giveaway with the prize pool increasing every week. Each guess requires 100 LUHO. <i>There will only be 100,000 LUHO tokens that will ever be in existence</i>. LUHO used to enter a guess will be burned. LUHO holders can win TRX through QUIZ as long as there is TRX in <a href="https://tronscan.org/#/address/TVrDrzkNNp7oAX1fu82xheTCxnuRxmTLyB/">balance</a>. 
                <br><br>
                We are supported on TronWallet and TronLink.<br><br>
                We currently do not support TronScan.<br>
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">396</div>
                <h5>Twitter Followers</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">234</div>
                <h5>YouTube Subscribers</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1</div>
                <h5>Game Released</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">56</div>
                <h5>LUHO Hodlers</h5> 
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='form' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">GUESS FORM</h3>
                <h1 class="display-2">Enter your guess in the form below</h1>
            </div>
        </div> <!-- end section-header -->
        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                 <div class="testimonials">
                    <!-- /.panel -->
                     <div class="panel panel-success">
                        <!--<div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Enter Guess
                        </div>-->
                        <!-- /.panel-heading -->
                        <div class="guess-primary">
                           <form action="index.php?action=add_entry" method="POST" role="form">
								<div class="form-field">
                                    <h3 style="text-align: left; color: black;">TRX Address</h3>
                                    <input class="form-control full-width" type="text" name="address" placeholder="Address" aria-required="true">
								</div>
								<div class="form-field">
									<h3 style="text-align: left; color: black;">GUESS</h3>
                                    <input class="form-control full-width" type="text" name="answer" placeholder="Guess">
								</div>
                               <div class="form-field">
									<h3 style="text-align: left; color: black;">100 LUHO TX HASH</h3>
                                    <input class="form-control full-width" type="text" name="hash" placeholder="Tx Hash">
								</div>
							<button type="submit" class="btn--primary">Submit</button>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            
            
            
            <h3>In order for your submission to count you must:<br><br>
                    <br>
                    1. Send 100 LUHO tokens to <br><b><h3 style="color: #black;">TVrDrzkNNp7oAX1fu82xheTCxnuRxmTLyB</h3></b><br> These tokens will be burned.<br>
                    2. Enter in your TRX address, your guess, and the tx hash from the sent LUHO tokens in form.<br>
                    
                    You may view all entries at the bottom of this page. Full transparency.
                    </h3><br>
                    <a class="btn btn-primary smoothscroll" href="#guesses">See all Guesses</a>
                    <br>
            
            <h4 style="color: black;">Every week the prize pool will increase by 500 TRX and the QUIZ question changed.</h4><br>
                    <h4 style="color: black;">As long as there is TRX in <a href="https://tronscan.org/#/address/TVrDrzkNNp7oAX1fu82xheTCxnuRxmTLyB/">balance</a> divs will be paid out.</h4>
            
                    <h4 style="color: black;">If there is only one winner they will take the entire prize pool. If there are multiple winners the prize pool will be evenly distributed across all winners. If there are no winners the funds from the previous prize pool will be added to the next pool. </h4><br>
            
            
            
            
        </div> <!-- end about-desc -->
        <!--<div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Brand Identity</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Illustration</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-megaphone"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Marketing</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Web Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Packaging Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Web Development</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div>-->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='guesses' class="s-contact">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">QUIZ</h3>
                    <h1 class="display-2 display-2--light">Guesses</h1>
                </div>
            </div> <!-- end section-header -->
            <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                 <div class="testimonials">
                    <!-- /.panel -->
                    <?php 
					   echo gen_entry(0,0); 
					?>
                    <!-- /.panel -->
                </div>
            </div>
        </div> <!-- end about-desc -->
        </div>
        

        <!--<div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/lady-shutterbug.jpg" 
                                         srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> 

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="images/portfolio/woodcraft.jpg" 
                                         srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/the-beetle.jpg"
                                         srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg" 
                                         srcset="images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div>

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg" 
                                         srcset="images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> 
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="images/portfolio/palmeira.jpg"
                                         srcset="images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> 

                </div> 
            </div>
        </div>-->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Partners</h3>
                <h1 class="display-2">TRONluho has been honored to
                partner up with these teams</h1>
            </div>
        </div>
        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    <a href="https://www.tronwallet.me/" title="TronWallet" class="clients__slide"><img src="images/clients/twx.png" /></a>
                    <a href="https://trontopia.co?refid=TDZwjZcjif2ZTjgeTVNjS88DjfmAZeWdjU" title="TronTopia" class="clients__slide"><img src="images/clients/trontopia.png" /></a>
                    <a href="https://tronpays.com/?ref=TDZwjZcjif2ZTjgeTVNjS88DjfmAZeWdjU" title="TronPays" class="clients__slide"><img src="images/clients/tronpays.png" /></a>
                    <a href="https://chrome.google.com/webstore/detail/tronlink/ibnejdfjmmkpcnlpebklmnkoeoihofec?hl=en-US" title="TronLink" class="clients__slide"><img src="images/clients/tronlink.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/midearthcrypto.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/pokertron.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Luho has been using his knowledge and interest in cryptocurrencies to maturely carve a smart, involved and beneficial presence online; a presence that dapp users and dividend hunters who seek insights have been using to navigate the waters with more-than-acceptable success.</p>

                        <img src="images/avatars/brian.png" alt="Brian Lemmon" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Brian Lemmon</span> 
                            <span class="testimonials__pos"></span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Testimonial #2</p>

                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tagami San</span> 
                            <span class="testimonials__pos">TronTopia Community Manager</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Testimonial #3</p>

                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Gabe</span> 
                            <span class="testimonials__pos">Father</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Me</h3>
                <h1 class="display-2 display-2--light">Reach out for partnership or say hello!</h1>
            </div>
        </div>

        <!--<div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div>

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            contact@glintsite.com<br>
                            info@glintsite.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+63) 555 1212<br>
                            Mobile: (+63) 555 0100<br>
                            Fax: (+63) 555 0101
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>-->
    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">
            <div class="col-six tab-full left footer-desc">
                <!--<div class="footer-logo"></div>-->
                <h4>Token Information</h4>
                Token Name: TRONluho<br>
                Symbol: LUHO <br>
                Contract: TYcZETwK7MwLdnkueMxyFkikfpKepHckwL<br>
                Decimal Precision: 8 <br>
                Total Current Supply: 100,000 <br>
            </div>

            <div class="col-six tab-full right footer-subscribe">
                <h4>Disclaimer</h4>
                <p>If you would like to partner with TRONluho Project please send me a message on Telegram or Twitter. The TRONluho Project is solely managed by <a href="https://t.me/tronluho">@tronluho</a>.<br><br>Anyone who claims to affiliated with the TRONluho dev team is lying. <br></p>
                <!-- <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>-->
            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>©TRONluho 2019</span> 
                    <span>Stay cool.</span>	
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
    <?php
	$db = mysqli_connect("localhost", "****", "****", "entries");
    $result = mysqli_query($db, "SELECT * FROM answers ORDER BY id ASC;");
    if ($result == false) {
        echo "WHY YOU FAIL BETCH FFS";
        die();
    }
        
	$errors = mysqli_fetch_all($result);
	$datas = "";
	foreach ($errors as &$val) {
		$val[0] = basename($val[0]);
		$datas .= "{ y: '$val[0]', a: $val[1]},";
	}
	?>

</body>

</html>