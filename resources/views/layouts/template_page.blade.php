<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> {{$title}} | Lakshmisri</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link href="{{ STATIC_PUBLIC_URL }}assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ STATIC_PUBLIC_URL }}assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ STATIC_PUBLIC_URL }}assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ STATIC_PUBLIC_URL }}assets/css/slick-theme.css" />
    <link href="{{ STATIC_PUBLIC_URL }}assets/css/manufacturing.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ STATIC_PUBLIC_URL }}assets/css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


    @include('layouts.meta_tags')
    <base href="{{ BASE_URL }}" />
    <script type="text/javascript">
        var base_url = "{{ BASE_URL }}";
    </script>
    <?php
    define('STATICVER', App\SettingModel::getValue('staticver'));
    ?>
    {!! App\SettingModel::getValue('common-seo-tags')!!} @if(isset($meta_other)) {!! $meta_other !!} @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ STATIC_PUBLIC_URL }}assets/js/aos.js"></script>
</head>

<body>

    <div class="sidewarper">
        <div id="slidesection">
            <div class="headerinner">
                <div class="topclose "><a id="slide1" class="white row2"><i class="fr"><img src="{{ STATIC_PUBLIC_URL }}assets/images/close.png" alt="close" width="15" /></i></a></div>
                <div class="overscroll">
                    <div class="customcontainer">
                        <div class="mobilemenuinfo">
                            <ul>
                                <li class="accordion"><b class="accordion-toggle"><a href="javascript:void(0);">Insights<span><i class=""><img src="{{ STATIC_PUBLIC_URL }}assets/images/arrowdown_icon.svg" alt="" title="" class="img-fluid"></i></span></a></b>
                                    <div class="accordion-content">
                                        <ul class="">
                                            <li><a href="javascript:void(0);">Insights</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0);">People</a></li>
                                <li><a href="javascript:void(0);">Expertise</a></li>
                                <li><a href="javascript:void(0);">About Us</a></li>
                                <li><a href="javascript:void(0);">Grow With Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="menu-flex">
                <div class="logo"> <a href="/" title="LKS"> <img src="{{ STATIC_PUBLIC_URL }}assets/images/logo.svg" width="220" alt="" /> </a> </div>
                <a href="javascript:void(0);" class="desktophide mobilesearchicon"><img src="{{ STATIC_PUBLIC_URL }}assets/images/search_icon.svg" alt="" title="" class="img-fluid"></a> <a id="slide" class="float-left"><i class=""><img src="{{ STATIC_PUBLIC_URL }}assets/images/menu-icon.svg" alt="LKS" width="35" /></i></a>
                <div class="header-links mobilenone">
                    <ul>
                        <li><a href="javascript:void(0);">Insights <span class="dropdownicon"><img src="{{ STATIC_PUBLIC_URL }}assets/images/arrowdown_icon.svg" alt="" title="" class="img-fluid"></span></a>
                            <ul class="mainsubnav">
                                <li><a href="javascript:void(0);">Articles</a></li>
                                <li><a href="javascript:void(0);">Blogs</a></li>
                                <li><a href="javascript:void(0);">Press Release</a></li>
                                <li><a href="javascript:void(0);">Events</a></li>
                                <li><a href="javascript:void(0);">Newsletters</a></li>
                                <li><a href="javascript:void(0);">Monographs</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('people')}}">People</a></li>
                        <li><a href="javascript:void(0);">Expertise <span class="dropdownicon"><img src="{{ STATIC_PUBLIC_URL }}assets/images/arrowdown_icon.svg" alt="" title="" class="img-fluid"></span></a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-12">
                                            <h6>Sectors</h6>
                                            <ul>
                                                <li><a href="javascript:void(0);">Automative Logistics</a>
                                                <li><a href="javascript:void(0);">Defence</a>
                                                <li><a href="javascript:void(0);">Financial Service</a>
                                                <li><a href="javascript:void(0);">Food & Agriculture</a>
                                                <li><a href="javascript:void(0);">IT & ITES</a>
                                                <li><a href="manufacturing.html">Manufaturing</a>
                                                <li><a href="javascript:void(0);">Oil and Gas</a>
                                                <li><a href="javascript:void(0);">Online Gaming</a>
                                                <li><a href="javascript:void(0);">Pharma & Healthcare</a>
                                                <li><a href="javascript:void(0);">Renewable Energy</a>
                                                <li><a href="javascript:void(0);">Retail & E-commerce</a>
                                                <li><a href="javascript:void(0);">Supply Chain</a>
                                                <li><a href="javascript:void(0);">Technology & Data Protection</a>
                                                <li><a href="javascript:void(0);">Telecom and Media</a>
                                            </ul>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-12">
                                            <h6>Services </h6>
                                            <ul>
                                                <li><a href="javascript:void(0);">Transaction</a></li>
                                                <li><a href="advisory.html">Advisory</a></li>
                                                <li><a href="javascript:void(0);">Litigation</a></li>
                                                <li><a href="javascript:void(0);">Investigations</a></li>
                                                <li><a href="javascript:void(0);">Technology</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                            <h6>Practices </h6>
                                            <ul class="row">
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Arbitration</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Classification</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Commercial Litigation</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Competition and Antitrust</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Customs</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Data Protection</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="direct-tax.html" title="">Direct Tax</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Economic Offences</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Employment Law</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">General Corporate</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Consultancy</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Litigation</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Insolvency</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Intellectual Property</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">International Trade & WTO</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Mergers & Acquistions</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Private Equity</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Real Estate Law</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Regulatory</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Securities Law</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Supply Chain</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Tax Compliance Review & Due Deligence</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Technology Media Telecom (TMT)</a></li>
                                                <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Transfer Pricing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="javascript:void(0);">About Us <span class="dropdownicon"><img src="{{ STATIC_PUBLIC_URL }}assets/images/arrowdown_icon.svg" alt="" title="" class="img-fluid"></span></a>
                            <ul class="mainsubnav">
                                <li><a href="{{route('who-we-are')}}">Who we are</a></li>
                                <li><a href="javascript:void(0);">Our History</a></li>
                                <li><a href="{{ route('our-values')}}">Our Values</a></li>
                                <li><a href="{{ route('awards')}}">Our Awards </a></li>
                                <li><a href="javascript:void(0);">Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);">Grow With Us <span class="dropdownicon"><img src="{{ STATIC_PUBLIC_URL }}assets/images/arrowdown_icon.svg" alt="" title="" class="img-fluid"></span></a>
                            <ul class="mainsubnav">
                                <li><a href="{{ route('career')}}">Careers</a></li>
                                <li><a href="javascript:void(0);">LKS Internships</a></li>
                                <li><a href="javascript:void(0);">Life at LKS</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mainsearch"><img src="{{ STATIC_PUBLIC_URL }}assets/images/search_icon.svg" alt="" title="" class="img-fluid"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="customcontainer">
                <div class="desktophide footermobilemenu">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item footer-links-box">
                            <div class="accordion-header" id="headingOne">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6>Services</h6>
                                </div>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="javascript:void(0);">Transaction</a></li>
                                        <li><a href="javascript:void(0);">Advisory</a></li>
                                        <li><a href="javascript:void(0);">Litigation</a></li>
                                        <li><a href="javascript:void(0);">Investigations</a></li>
                                        <li><a href="javascript:void(0);">Technology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item footer-links-box">
                            <div class="accordion-header" id="headingTwo">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h6>Practices</h6>
                                </div>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <ul class="row">
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Arbitration</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Classification</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Commercial Litigation</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Competition and Antitrust</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Customs</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Data Protection</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Direct Tax</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Economic Offences</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Employment Law</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">General Corporate</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Consultancy</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Litigation</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Insolvency</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Intellectual Property</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">International Trade & WTO</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Mergers & Acquistions</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Private Equity</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Real Estate Law</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Regulatory</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Securities Law</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Supply Chain</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Tax Compliance Review & Due Deligence</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Technology Media Telecom (TMT)</a></li>
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Transfer Pricing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item footer-links-box">
                            <div class="accordion-header" id="headingThree">
                                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h6>Quick Links</h6>
                                </div>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="javascript:void(0);" title="">Regulatory Disclosures</a></li>
                                        <li><a href="javascript:void(0);" title="">Privacy and Security</a></li>
                                        <li><a href="javascript:void(0);" title="">Terms of Use</a></li>
                                        <li><a href="javascript:void(0);" title="">Cookie Policy</a></li>
                                        <li><a href="javascript:void(0);" title="">Archives</a></li>
                                        <li><a href="javascript:void(0);" title="">About us</a></li>
                                        <li><a href="award.html" title="">Awards</a></li>
                                        <li><a href="javascript:void(0);" title="">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobilenone">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-12">
                            <div class="footer-links-box">
                                <h6>Services</h6>
                                <ul>
                                    <li><a href="javascript:void(0);">Transaction</a></li>
                                    <li><a href="javascript:void(0);">Advisory</a></li>
                                    <li><a href="javascript:void(0);">Litigation</a></li>
                                    <li><a href="javascript:void(0);">Investigations</a></li>
                                    <li><a href="javascript:void(0);">Technology</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                            <div class="footer-links-box">
                                <h6>Practices</h6>
                                <ul class="row">
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Arbitration</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Classification</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Commercial Litigation</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Competition and Antitrust</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Customs</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Data Protection</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Direct Tax</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Economic Offences</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Employment Law</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">General Corporate</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Consultancy</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Good & Service tax Litigation</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Insolvency</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Intellectual Property</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">International Trade & WTO</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Mergers & Acquistions</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Private Equity</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Real Estate Law</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Regulatory</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Securities Law</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Supply Chain</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Tax Compliance Review & Due Deligence</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Technology Media Telecom (TMT)</a></li>
                                    <li class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="javascript:void(0);" title="">Transfer Pricing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-12">
                            <div class="footer-links-box">
                                <h6>Quick Links</h6>
                                <ul>
                                    <li><a href="javascript:void(0);" title="">Regulatory Disclosures</a></li>
                                    <li><a href="javascript:void(0);" title="">Privacy and Security</a></li>
                                    <li><a href="javascript:void(0);" title="">Terms of Use</a></li>
                                    <li><a href="javascript:void(0);" title="">Cookie Policy</a></li>
                                    <li><a href="javascript:void(0);" title="">Archives</a></li>
                                    <li><a href="javascript:void(0);" title="">About us</a></li>
                                    <li><a href="award.html" title="">Awards</a></li>
                                    <li><a href="javascript:void(0);" title="">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footermiddle">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                            <div class="footermiddleleft">
                                <img src="{{ STATIC_PUBLIC_URL }}assets/images/logo.svg" width="190" alt="" class="footerlogo mobilenone img-fluid">
                                <div class="phonetab"> <a href="javascript:void(0);"><img src="{{ STATIC_PUBLIC_URL }}assets/images/call.svg" alt="" class="img-fluid"> +91 11 41299800</a>
                                    <a href="javascript:void(0);"><img src="{{ STATIC_PUBLIC_URL }}assets/images/email.svg" alt="" class="img-fluid"> info@lakshmisri.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                            <div class="footermiddlesocial">
                                <ul>
                                    <li><a href="https://www.linkedin.com/company/lakshmikumaran-and-sridharan/" target="_blank"><img src="{{ STATIC_PUBLIC_URL }}assets/images/linkedin.svg" alt="" class="img-fluid"></a></li>
                                    <li><a href="https://www.facebook.com/lsipr" target="_blank"><img src="{{ STATIC_PUBLIC_URL }}assets/images/facebook.svg" alt="" class="img-fluid"></a></li>
                                    <li><a href="https://twitter.com/LKSattorneys" target="_blank"><img src="{{ STATIC_PUBLIC_URL }}assets/images/twitter.svg" alt="" class="img-fluid"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerbottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>© 1985-2024, Lakshmikumaran & Sridharan, All Rights Reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- <script  src="https://code.jquery.com/jquery-3.7.1.js" type="text/javascript"></script> -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ STATIC_PUBLIC_URL }}assets/js/slick.js"></script>
    <script src="{{ STATIC_PUBLIC_URL }}assets/js/owl.carousel.min.js" type="text/javascript"></script>

    <script src="{{ STATIC_PUBLIC_URL }}assets/js/marquee.js"></script>


    <!-- Quote animation -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js'></script>
    <script src='https://unpkg.com/split-type'></script>
    <script src="{{ STATIC_PUBLIC_URL }}assets/js/index.js"></script>
    <!-- Quote animation -->

    <script>
        AOS.init({
            duration: 1200,
            disable: 'mobile',
        })
    </script>
    <script type="text/javascript">
        (function($) {
            "use strict";

            $(document).ready(function() {
                "use strict";
                var progressPath = document.querySelector('.progress-wrap path');
                var pathLength = progressPath.getTotalLength();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                progressPath.style.strokeDashoffset = pathLength;
                progressPath.getBoundingClientRect();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
                var updateProgress = function() {
                    var scroll = $(window).scrollTop();
                    var height = $(document).height() - $(window).height();
                    var progress = pathLength - (scroll * pathLength / height);
                    progressPath.style.strokeDashoffset = progress;
                }
                updateProgress();
                $(window).scroll(updateProgress);
                var offset = 50;
                var duration = 550;
                jQuery(window).on('scroll', function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.progress-wrap').addClass('active-progress');
                    } else {
                        jQuery('.progress-wrap').removeClass('active-progress');
                    }
                });
                jQuery('.progress-wrap').on('click', function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: 0
                    }, duration);
                    return false;
                })
            });

        })(jQuery);
    </script>

    @yield('footer_section')
    @stack('footer_script')
</body>

</html>