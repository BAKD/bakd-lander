<!DOCTYPE html>
<html>

<head>
    <title>BAKD.io | Building your dream project just got a little bit easier.</title>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="YuMjpAzvmh0y3q-vZEL6YMUl9QZZWm3tHLRkswUpsR4" />
    <meta name="description" content="BAKD.io is a revolutionary new way to fund your next cryptocurrency project. BAKD not only helps entrepreneurs crowdsource the funding needed to build their dream project, but it's also a place where entrepreneurs can connect with mentors.">
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="crypto, cryptocurrency, bitcoin, ethereum, ico, token, token sale, bakd, bakdme, bakdio, blockchain, localbitcoins, kraken, bitmex, coinbase, whitepaper, crowdfunding, crowdsource, advisors, funding, investors, invest, social, networking, social network"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,700" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic" rel="stylesheet">
    <link href="/css/vendors.min.css" rel="stylesheet" />
    <link href="/css/bakd.min.css" rel="stylesheet" />
    <script src="/node_modules/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="/node_modules/underscore/underscore-min.js" type="text/javascript"></script>
    <script>
        //*************************
        // Copyright 2018 BAKD.me
        //      tom@bakd.io
        //       ¯\_(ツ)_/¯
        //*************************
    </script>
</head>

<body class="animated fadeIn">
    <div class="preloader-overlay" id="welcome_preloader">
        <div class="preloader-inner top"></div>
        <div class="preloader-inner bottom"></div>
        <div class="preloader-wrapper">
            <div class="spinner" id="preloader">
                <div class="rect1 white"></div>
                <div class="rect2 white"></div>
                <div class="rect3 white"></div>
                <div class="rect4 white"></div>
                <div class="rect5 white"></div>
            </div>
        </div>
    </div>
    <header class="header jumbotron-wrapper bakd-header">
        <div id="particles-js"></div>
        <nav class="navbar navbar-dark navbar-expand-md navbar-expand-sm navbar-expand-xs animated fadeInDown">
            <div class="container">
                <a href="https://bakd.io" class="navbar-brand" alt="BAKD.io - Building your dream project just got a little bit easier." title="BAKD.io - Building your dream project just got a little bit easier.">
                    <img src="images/logo-white.png" alt="BAKD.io - Building your dream project just got a little bit easier." title="BAKD.io - Building your dream project just got a little bit easier." height="102" width="322" class="bakd-logo nav-logo d-inline-block align-top"
                    />
                </a>
                <div class="collapse inline form-inline navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-inline mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Onepager
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                                <a class="dropdown-item" href="{{ $onepager['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Roadmap
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" data-toggle="tooltip" data-placement="right" title="NEW!" href="{{ $roadmap['graphic'] }}" target="_blank">Version 0.0.2a <span class="type">(Graphic)</span></a>
                                <a class="dropdown-item" href="{{ $roadmap['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                            </div>
                        </li>
                        <li class="nav-item features dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                                <a class="dropdown-item" href="{{ $features['text'] }}">Version 0.0.1a <span class="type">(Text)</span></a>
                            </div>
                        </li>
                        <li class="nav-item whitepaper dropdown">
                            <a class="nav-link disabled dropdown-toggle" title="Coming Soon" data-toggle="tooltip" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Whitepaper
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                                <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Text)</span></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Jobs
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">C/C++ Developers</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Frontend Web Developers</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Backend Web Developers</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Social Media Manager</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Marketing Manager</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Executive Management</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Project Manager</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Alpha/Beta Testers</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Business Advisor</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Legal Advisor</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Blockchain Advisor</a>
                                <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Investment/Financial Advisor</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="https://bakd.me" data-toggle"tooltip" data-title="View The BAKD.me Alpha Development Progress!" class="btn btn-primary my-2 my-sm-0" ><i class="fa fa-edit"></i> VIEW ALPHA PROGRESS!</a>
                    </div>
                </div>
                <div class="mobile-nav-btn-wrapper">
                    <a role="button" href="#" id="mobile_menu_btn"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </nav>
        <div class="container-fluid info animated fadeIn mCustomScrollbar" style="margin-bottom: 140px; padding-bottom: 600px;">
            <h1 class="animated fadeIn">Building Your <span class="orange">Dream</span> Project<br />Just Got A Little Bit <span class="orange">Easier</span></h1>
            <h2 class="animated fadeIn">Better Yet, Investing Just Got A Little Bit <em>Safer</em></h2>

            <div class="info-slider text-center">
                <p class="explainer">
                    <strong>BAKD</strong> is a censorship-free, revolutionary new way to fund your next cryptocurrency project. <strong>BAKD</strong> not only helps entrepreneurs crowdsource the funding needed to build their dream project, but it's also
                    a place where entrepreneurs can connect with mentors for advice when times get rough.
                </p>
                <p class="explainer">
                    <strong>BAKD</strong> Project Owners may choose to become either vetted, or non-vetted. Project funds are disbursed either in weekly or monthly stipends. Everyday employee expenses can be reported, tracked and processed -- all within
                    the
                    <strong>BAKD</strong> Platform. If unexpected costs arise, the BAK'ers or Project Owners may call a vote to ammend the disbursement agreement.
                </p>
                <p class="explainer">
                    <strong>BAKD</strong> Project Campaigns are essentially <em>DAICO's</em>. BAK'ers must invest using the <strong>BAKD</strong> Token. If the project begins to miss pre-defined major milestones, a vote to rescind the remaining project
                    funds may be called by the project BAK'ers.
                </p>
                <p class="explainer">
                    Whether you need funds, team members, or just plain advice, <strong>BAKD</strong> has you covered. All the tools entrepreneurs need to succeed available under one roof. Handle your finances, social media, team building, contests, company
                    announcements, accounting, and more with the <strong>BAKD</strong> Platform & Social Network!
                </p>
            </div>

            <div class="d-flex text-center subscribe-section">
                <form class="form-inline mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}" role="form" name="subscriber_form" id="subscriber_form">
                    <input type="email" name="email_address" class="form-control" placeholder="Email Address" required />
                    <button type="submit" name="subscribe_button" class="btn btn-primary btn-round btn-lg" data-toggle="tooltip" data-title="Get exclusive updates and access to the BAKD Alpha!" data-placement="top">
                        <i class="fa fa-envelope"></i>
                    </button>
                </form>
            </div>

            <div class="social-media-links">
                <ul>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://twitter.com/BAKDme" target="_blank" alt="Twitter" title="Twitter" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/twitter.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://bitcointalk.org/index.php?topic=4952711" target="_blank" alt="BitcoinTalk" title="BitcoinTalk" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/bitcoin.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://t.me/BAKDio" target="_blank" alt="Telegram" title="Telegram" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/telegram.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://medium.com/@bakd" target="_blank" alt="Medium" title="Medium" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/medium.png" />
                        </a>
                    </li>
                    <li class="sm-wrapper sm-icon">
                        <a href="https://github.com/BAKD" target="_blank" alt="Github" title="Github" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/github.png" />
                        </a>
                    </li>
                    <!--<li class="sm-wrapper sm-icon">
                        <a href="https://www.reddit.com/user/BAKDio" target="_blank" alt="Reddit" title="Reddit" data-toggle="tooltip" data-placement="bottom">
                            <img src="/images/icons/social-media-2/png/reddit.png" />
                        </a>
                    </li>-->
                </ul>
                <div class="donate-button" data-toggle="tooltip" data-title="Contribute to help us build BAKD!" data-placement="right">
                    <div class="donate-icon" data-target="#donations_modal" data-toggle="modal">
                        <i class="fab fa-btc"></i>
                        <div class="donate-text">DONATE</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-bottom animated fadeInUp">
            <h2 class="animated fadeInDown"><i class="fa fa-clock"></i> <span class="hidden-mobile">Countdown to </span><span class="orange">Alpha</span> Web Launch</h2>
            <div class="alpha-countdown">
                <div class="countdown-container unselectable" id="alpha-countdown"></div>
            </div>
            <script type="text/template" id="alpha-countdown-template">
                <div class="time <%= label %>">
                    <span class="count curr top"><%= curr %></span>
                    <span class="count next top"><%= next %></span>
                    <span class="count next bottom"><%= curr %></span>
                    <span class="count curr bottom"><%= next %></span>
                    <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                </div>
            </script>
        </div>
    </header>


    <!-- Alpha Access Modal -->
    <div class="modal fade" id="alpha_access_modal" tabindex="-1" role="dialog" aria-labelledby="alpha_access_modal_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alpha_access_modal_label">Get Alpha Access</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="POST" action="{{ route('newsletter.subscribe') }}" role="form" name="alpha_access_form" id="alpha_access_form">
                    <div class="modal-body">
                        <div class="alert alert-warning alert-dismissable">
                            <i class="fa fa-info-circle"></i> Early registration for access to the upcoming alpha release of the <strong>BAKD</strong> DAICO Crowdfunding & Social Networking Platform is open!
                            <span class="close close-btn" data-dismiss="alert"><i class="fa fa-times"></i></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                E-Mail Address<span class="required">*</span>
                            </label>
                            <input type="email" name="email_address" placeholder="Email Address" maxlength="255" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Full Name <span class="small">(Optional)</span>
                            </label>
                            <input type="text" name="full_name" placeholder="Full Name" maxlength="255" minlength="3" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-round">OK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Mobile Slideout Menu-->
    <div id="mobile_menu">
        <div class="mobile-inner">
            <div class="mobile-header text-center">
                <a href="#" class="close close-slideout" id="close_slideout">
                    <i class="fa fa-times"></i>
                </a>
                <div class="logo-circle-bg">
                    <img src="/images/icon.png" alt="BAKD.io" title="BAKD.io" />
                </div>
            </div>
            <div class="mobile-body">
                <ul class="link-list">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Onepager
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                            <a class="dropdown-item" href="{{ $onepager['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Roadmap
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" data-toggle="tooltip" data-placement="right" title="NEW!" href="{{ $roadmap['graphic'] }}" target="_blank">Version 0.0.2a <span class="type">(Graphic)</span></a>
                            <a class="dropdown-item" href="{{ $roadmap['text'] }}" target="_blank">Version 0.0.1a <span class="type">(Text)</span></a>
                        </div>
                    </li>
                    <li class="nav-item features dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" data-toggle="tooltip" data-placement="right" title="Coming Soon" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                            <a class="dropdown-item" href="{{ $features['text'] }}">Version 0.0.1a <span class="type">(Text)</span></a>
                        </div>
                    </li>
                    <li class="nav-item whitepaper dropdown">
                        <a class="nav-link disabled dropdown-toggle" title="Coming Soon" data-toggle="tooltip" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Whitepaper
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Graphic)</span></a>
                            <a class="dropdown-item" href="#">Version 0.0.1a <span class="type">(Text)</span></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-right"></i> Jobs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">C/C++ Developers</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Frontend Web Developers</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Backend Web Developers</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Social Media Manager</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Marketing Manager</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Executive Management</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Project Manager</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Alpha/Beta Testers</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Business Advisor</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Legal Advisor</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Blockchain Advisor</a>
                            <a class="dropdown-item" href="mailto: developers@bakd.io?subject=I want to join the BAKD team!">Investment/Financial Advisor</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-target="#donations_modal" data-toggle="modal">
                            <i class="fa fa-chevron-right"></i> Donate!
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-footer">
                <div class="form-inline my-2 my-lg-0">
                    <button class="btn btn-primary my-2 my-sm-0" type="button" data-toggle="modal" data-target="#alpha_access_modal"><i class="fa fa-edit"></i> GET ALPHA ACCESS</button>
                </div>
            </div>

        </div>
    </div>



    <!-- Donations Modal -->
    <div class="modal fade" id="donations_modal" tabindex="-1" role="dialog" aria-labelledby="donations_modal_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donations_modal_label">Support BAKD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning alert-dismissable">
                        <span class="close close-btn" data-dismiss="alert"><i class="fa fa-times"></i></span>
                        <i class="fa fa-info-circle"></i> Help make <strong>BAKD</strong> a reality by donating to the project. All costs for the development of <strong>BAKD</strong> have been, and will continue to be, funded by the developers. So any
                        little bit helps -- thanks!
                    </div>
                    <div class="donation-qr text-center">
                        <strong>BAKD <i class="fab fa-bitcoin" style="color: orange;"></i> BTC Donations QR Code</strong>
                        <br />
                        <a href="bitcoin:14j1QULjScr3mQJ5LLTZxr47htaMyJkDR7">
                            <img src="/images/bakd_donations-btc_14j1QULjScr3mQJ5LLTZxr47htaMyJkDR7.png" class="donation-qr" alt="Thank you for helping to make BAKD a reality!" title="Thank you for helping to make BAKD a reality!" data-toggle="tooltip" data-title="Thank you for helping to make BAKD a reality!"
                                data-placement="bottom" />
                        </a>
                        <p>
                            <strong>14j1QULjScr3mQJ5LLTZxr47htaMyJkDR7</strong>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">DONE</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/node_modules/wowjs/dist/wow.min.js" type="text/javascript"></script>
    <script src="/node_modules/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/node_modules/noty/lib/noty.min.js" type="text/javascript"></script>
    <script src="/node_modules/moment/min/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="/node_modules/moment-timezone/builds/moment-timezone-with-data.min.js" type="text/javascript"></script>
    <script src="/node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js" type="text/javascript"></script>
    <script src="/bower_components/jquery.countdown/dist/jquery.countdown.min.js" type="text/javascript"></script>
    <script src="/node_modules/slick-carousel/slick/slick.min.js" type="text/javascript"></script>
    <script src="/node_modules/particles.js/particles.js" type="text/javascript"></script>
    <script src="js/bakd.js " type="text/javascript "></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124823445-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-124823445-1');
    </script>
</body>

</html>