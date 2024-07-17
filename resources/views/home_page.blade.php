@extends('layouts.template_page')
@section('content')


<section class="homebanner secpadd60">
    <div class="container">
        <div class="customcontainer">
            <div class="bannerslidernew">
                @foreach ($banner_videos as $banner)
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="bannerdetail">
                                <h2>{{$banner->title}}</h2>
                                <p>{{$banner->sub_text}}</p>
                                <a href="#" class="commbtn2">Know More <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                                        </svg>
                                    </span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="bannervideo">
                                <video autoplay muted loop>
                                    <source src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$banner->image_path}}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- What's New -->
<section class="whatsnewsec secpadbottom60">
    <div class="container">
        <div class="customcontainer">
            <div class="commonhead" data-aos="fade-up">
                <h2>What’s New</h2>
            </div>
            <div class="whatsnewcont">
                @foreach ($whats_news as $what_new)
                <div class="whatsnewbox" data-aos="fade-left">
                    <span class="date"><img src="{{ STATIC_PUBLIC_URL }}assets/images/calendar.svg" alt="" class="img-fluid">
                        @php
                        $date = \Carbon\Carbon::parse($what_new->date);
                        @endphp
                        {{ $date->format('d F Y') }}
                    </span>
                    <p>{{$what_new->sub_text}}</p>
                    <a href="#" class="commbtn2">Know More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="quotesec secpadbottom60">
    <div class="container text-center">
        <div class="quote_arrow" data-aos="fade-down"> <img src="{{ STATIC_PUBLIC_URL }}assets/images/quotearrow.svg" alt="" class="img-fluid"> </div>
        <div class="quotetext">
            <h3 class="reveal-type" data-bg-color="#cccccc" data-fg-color="#02214F">{!! isset($short_about->sub_text) && $short_about->sub_text ? $short_about->sub_text : '' !!}</h3>
        </div>
    </div>
</section>

<section class="servicesec secpadd60">
    <div class="container">
        <div class="customcontainer">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="serviceleftbox" data-aos="fade-right">
                        <h3>{{isset($services->title) && $services->title ? $services->title : ''}}</h3>
                        <p>{{isset($services->sub_text) && $services->sub_text ? $services->sub_text : ''}}</p>
                        <div class="servicetab">
                            <ul id="serviceTab" role="tablist">
                                <li> <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" aria-selected="true">Transaction<span><img src="{{ STATIC_PUBLIC_URL }}assets/images/left-arrow.svg" alt="" class="img-fluid"></span></a> </li>
                                <li> <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" aria-selected="false">Advisory<span><img src="{{ STATIC_PUBLIC_URL }}assets/images/left-arrow.svg" alt="" class="img-fluid"></span></a> </li>
                                <li> <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" aria-selected="false">Litigation<span><img src="{{ STATIC_PUBLIC_URL }}assets/images/left-arrow.svg" alt="" class="img-fluid"></span></a> </li>
                                <li> <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" aria-selected="false">Investigations<span><img src="{{ STATIC_PUBLIC_URL }}assets/images/left-arrow.svg" alt="" class="img-fluid"></span></a> </li>
                                <li> <a class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" aria-selected="false">Technology<span><img src="{{ STATIC_PUBLIC_URL }}assets/images/left-arrow.svg" alt="" class="img-fluid"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="serviceright" data-aos="fade-left">
                        <div class="tab-content" id="serviceTabContent">

                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <div class="serviceslider">
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Goods & Services Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>India has implemented Goods and Services Tax (GST), replacing a plethora of indirect taxes,
                                                with the promise of the so-called “Good and Simple” Tax.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Commercial Litigation <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The Commercial Litigation team at Lakshmikumaran & Sridharan has extensive and practical
                                                experience in resolving a wide variety of commercial and corporate laws.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Customs <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has a dedicated customs advisory and litigation practice.
                                                The attorneys have decades of experience in handling customs disputes for major organisations
                                                involved in global trade.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Arbitration <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Our team regularly handles institutional and ad hoc arbitrations seated both in India and
                                                abroad, and is adept at handling all aspects of alternate dispute resolution.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Competition & Antitrust <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>In the short span since its existence, the Competition Commission of India (‘CCI’) has
                                                investigated a large number of sectors for anti-competitive practices and has known to become
                                                very assertive in its enforcement outlook by imposing record and heavy fines.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Direct Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The income tax team at the firm handles all aspects of tax requirements for companies. These
                                                include providing services relating to tax assessments, tax advisory, structuring and
                                                investment strategy, due diligence and litigation.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Economic Offence FEMA/FRCA/PMLA/Benam <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Insolvency <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The team at Lakshmikumaran & Sridharan (LKS) supports clients with advisory as well as
                                                litigation services.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>International Trade & WTO <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Our globally ranked international trade practice is one of the oldest in India, and has dealt
                                                with trade remedy investigations in multiple jurisdictions.</p>
                                        </div>
                                    </div>
                                    <!-- <div class="slick-slide servicetablist">
                    <div class="servicedertail"> <a href="javascript:void(0);">
                      <h3>Investigation <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                          <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"/>
                        </svg>
                        </span></h3>
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div> -->
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Transfer Pricing <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade marqueebox" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="">
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Goods & Services Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>India has implemented Goods and Services Tax (GST), replacing a plethora of indirect taxes,
                                                with the promise of the so-called “Good and Simple” Tax.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Commercial Litigation <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The Commercial Litigation team at Lakshmikumaran & Sridharan has extensive and practical
                                                experience in resolving a wide variety of commercial and corporate laws.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Customs <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has a dedicated customs advisory and litigation practice.
                                                The attorneys have decades of experience in handling customs disputes for major organisations
                                                involved in global trade.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade marqueebox" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="">
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Goods & Services Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>India has implemented Goods and Services Tax (GST), replacing a plethora of indirect taxes,
                                                with the promise of the so-called “Good and Simple” Tax.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Commercial Litigation <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The Commercial Litigation team at Lakshmikumaran & Sridharan has extensive and practical
                                                experience in resolving a wide variety of commercial and corporate laws.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Customs <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has a dedicated customs advisory and litigation practice.
                                                The attorneys have decades of experience in handling customs disputes for major organisations
                                                involved in global trade.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade marqueebox" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="">
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Goods & Services Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>India has implemented Goods and Services Tax (GST), replacing a plethora of indirect taxes,
                                                with the promise of the so-called “Good and Simple” Tax.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Commercial Litigation <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The Commercial Litigation team at Lakshmikumaran & Sridharan has extensive and practical
                                                experience in resolving a wide variety of commercial and corporate laws.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Customs <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has a dedicated customs advisory and litigation practice.
                                                The attorneys have decades of experience in handling customs disputes for major organisations
                                                involved in global trade.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade marqueebox" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                <div class="">
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Goods & Services Tax <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>India has implemented Goods and Services Tax (GST), replacing a plethora of indirect taxes,
                                                with the promise of the so-called “Good and Simple” Tax.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Intellectual Property Rights <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has an established top tier Intellectual Property Practice
                                                in India.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Commercial Litigation <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>The Commercial Litigation team at Lakshmikumaran & Sridharan has extensive and practical
                                                experience in resolving a wide variety of commercial and corporate laws.</p>
                                        </div>
                                    </div>
                                    <div class="slick-slide servicetablist">
                                        <div class="servicedertail"> <a href="javascript:void(0);">
                                                <h3>Customs <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                                        </svg>
                                                    </span></h3>
                                            </a>
                                            <p>Lakshmikumaran & Sridharan (LKS) has a dedicated customs advisory and litigation practice.
                                                The attorneys have decades of experience in handling customs disputes for major organisations
                                                involved in global trade.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awardsec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                <div class="awardleft">
                    <h3 data-aos="fade-up">{{isset($accolades_and_awards->title) && $accolades_and_awards->title ? $accolades_and_awards->title  : 'Accolades And Awards'}}</h3>
                    <p>{{isset($accolades_and_awards->sub_text) && $accolades_and_awards->sub_text ? $accolades_and_awards->sub_text : ''}}</p>
                    <a href="/awards" class="commbtn2">SEE ALL<span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                            </svg>
                        </span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="awardmarquee">
                    <div class="marqueebox2">
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{ STATIC_PUBLIC_URL }}assets/images/chambers.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Band 1 Firm in Tax</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{ STATIC_PUBLIC_URL }}assets/images/asialaw.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Recognised firm in Dispute Resolution</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{ STATIC_PUBLIC_URL }}assets/images/legal.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Tier 1 Firm ranking in Tax</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{ STATIC_PUBLIC_URL }}assets/images/ipstars.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Patent Prosecution (Tier 1), Patent Disputes (Tier 3) and Notable firm in Trademark Prosecution</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('component.insights_media')
<section class="growwith secpadd60">
    <div class="container">
        <div class="customcontainer">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 col-sm-6 col-12">
                    <div class="growimg revealimage"> <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$grow_with_us->image_path}}" alt="" class="img-fluid"> </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                    <div class="growdetail">
                        <h3 data-aos="fade-up">{{$grow_with_us->title ? $grow_with_us->title : 'Grow with us'}}</h3>
                        <p>{{$grow_with_us->sub_text ? $grow_with_us->sub_text : ''}}</p>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">View openings <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">View internships
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                        </svg>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="connectus secpadd60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="subscribebox connectpadd" data-aos="fade-up">
                    <h4>{{isset($stay_in_loop->title) && $stay_in_loop->title ? $stay_in_loop->title : 'Stay in the loop'}}</h4>
                    <p>{{ isset($stay_in_loop->sub_text) && $stay_in_loop->sub_text ? $stay_in_loop->sub_text : 'Get access to our latest services, articles and events:'}} </p>
                    <form>
                        <div class="form-group">
                            <input type="email" name="" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <p>By subscribing you agree to receive marketing communications from LKS. You can unsubscribe anytime
                                using the link in the footer of any of our emails. See our <a href="javascript:void(0);">privacy
                                    policy</a>.</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="commbtn2">Subscribe <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                        <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                    </svg>
                                </span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 connectlbr">
                <div class="connectbox connectpadd" data-aos="fade-up">
                    <h4>{{isset($scancode->title) && $scancode->title ? $scancode->title : 'Connect with us'}}</h4>
                    <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{isset($scancode->image_path) && $scancode->image_path ? $scancode->image_path : ''}}" alt="" class="img-fluid">
                    <p>Scan the QR code to get in<br>
                        touch with us</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection