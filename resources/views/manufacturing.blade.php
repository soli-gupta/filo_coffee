@extends('layouts.template_page')
@section('content')

@include('component.breadcums')
@php
use App\PratcieModel;
@endphp
<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec">
                <h1>{{$name}}</h1>

                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-6 col-12">
                        <div class="manuheadseclft">
                            <h6>{{isset($sub_text) ? $sub_text : ''}}</h6>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-6 col-12">
                        <div class="manuheadsecrgt">
                            @if (isset($description) && $description)
                            {!! $description!!}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="empoweringsec secpadtb4020">
    <div class="container">
        <div class="customcontainer">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                    <div class="image1 revealimage">
                        @if (isset($image1) && $image1)
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image1}}" alt="" class="img-fluid">
                        @endif

                    </div>
                </div>
            </div>
            <div class="empowerheadsec">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-12">
                        <div class="innerpagehead" data-aos="fade-up">
                            <h2 class="reveal-type" data-bg-color="#cccccc" data-fg-color="#02214F">{!!$title1!!}</h2>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-12 mobilenone">
                        <div class="empowersecondimg revealimage">
                            @if (isset($image2) && $image2)
                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image2}}" alt="" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="empowersubhead" data-aos="fade-left">
                <h3>{{$title2}}</h3>
            </div>
            <!-- popup 1 start-->
            @foreach ($sectorsServices as $key => $sectorsService)
            @php
            $sectorsServicesPractices = [];
            if (isset($sectorsService->practices)) {

            $PracticeId = explode(',', $sectorsService->practices);
            $sectorsServicesPractices = PratcieModel::whereIn('id', $PracticeId)->get();
            }
            @endphp
            <div class="maufacturepopup">
                <div class="modal fade" id="practic{{$key+1}}" tabindex="-1" aria-labelledby="practic1Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="closebtn" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="0.25" y="0.25" width="31.5" height="31.5" rx="3.75" fill="#F3F3F3" stroke="#DEDEDE" stroke-width="0.5" />
                                    <path d="M22 10L10 22" stroke="#02214F" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 10L22 22" stroke="#02214F" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-12">
                                        <div class="popupleft">
                                            <h4>Advisory</h4>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                            <div class="popservlist">
                                                <ul>
                                                    @foreach ($sectorsServicesPractices as $sectorsServicesPractice)
                                                    <li>
                                                        <a href="javascript:void(0);">{{$sectorsServicesPractice->name}} <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                                                    <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-12 mobilenone">
                                        <div class="popupright">
                                            <div class="serimg">
                                                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$sectorsService->image}}" alt="" title="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- popup 1 end-->
            <div class="empoweringdetail" data-aos="fade-up">
                <div class="row">
                    @foreach ($sectorsServices as $key => $sectorsService)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 boxsepreter">
                        <div class="empoweringboxes">
                            <div class="empowericon">
                                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$sectorsService->image_icon}}" alt="" title="" class="img-fluid">
                            </div>
                            {!!$sectorsService->name!!}
                            {!!$sectorsService->sub_text!!}

                            <a data-bs-toggle="modal" data-bs-target="#practic{{$key+1}}" class="commbtn2">view practices
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                        <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Button trigger modal -->
        </div>

    </div>
</section>

@include('component.insights_media')

@include('component.people_component')

<section class="testimonialsec secpadd60">
    <div class="container">
        <h2 data-aos="fade-up">Testimonials</h2>

        <div class="testimonialslider owl-carousel">
            <div class="item">
                <div class="testimonialbox">
                    <p>I had the pleasure of working with [Law Firm Name] on a complicated legal matter. Their team was incrediblyuser1 professional, knowledgeable, and attentive to my needs. They provided clear and concise advice, and I felt confident in their ability to handle my case. Thanks to their hard work and dedication, we achieved a favorable outcome. I highly recommend [Law Firm Name] to anyone in need of legal assistance.</p>
                    <div class="userdetail">
                        <div class="userimg">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/user1.jpeg" alt="" title="" class="img-fluid">
                        </div>
                        <div class="username">
                            <h5>Name Surname</h5>
                            <p>Designation, Company Name</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonialbox">
                    <p>I had the pleasure of working with [Law Firm Name] on a complicated legal matter. Their team was incrediblyuser1 professional, knowledgeable, and attentive to my needs. They provided clear and concise advice, and I felt confident in their ability to handle my case. Thanks to their hard work and dedication, we achieved a favorable outcome. I highly recommend [Law Firm Name] to anyone in need of legal assistance.</p>
                    <div class="userdetail">
                        <div class="userimg">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/user1.jpeg" alt="" title="" class="img-fluid">
                        </div>
                        <div class="username">
                            <h5>Name Surname</h5>
                            <p>Designation, Company Name</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonialbox">
                    <p>I had the pleasure of working with [Law Firm Name] on a complicated legal matter. Their team was incrediblyuser1 professional, knowledgeable, and attentive to my needs. They provided clear and concise advice, and I felt confident in their ability to handle my case. Thanks to their hard work and dedication, we achieved a favorable outcome. I highly recommend [Law Firm Name] to anyone in need of legal assistance.</p>
                    <div class="userdetail">
                        <div class="userimg">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/user1.jpeg" alt="" title="" class="img-fluid">
                        </div>
                        <div class="username">
                            <h5>Name Surname</h5>
                            <p>Designation, Company Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="explsectorsec secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <h2>Explore Sectors</h2>
            <div class="exploredetail">
                <div class="row gx-5">
                    @foreach ($exploreSectors as $exploreSector)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="exploresectorbox">
                            <a href="/{{$exploreSector->slug}}">
                                <h3>{{$exploreSector->name}}
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                        </svg>
                                    </span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    @endforeach
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
                    <h4>Stay in the loop</h4>
                    <p>Get access to our latest services, articles and events: </p>
                    <form>
                        <div class="form-group">
                            <input type="email" name="" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <p>By subscribing you agree to receive marketing communications from LKS. You can unsubscribe anytime using the link in the footer of any of our emails. See our <a href="javascript:void(0);">privacy policy</a>.</p>
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
                    <h4>Connect with us</h4>
                    <img src="images/scancode.png" alt="" class="img-fluid">
                    <p>Scan the QR code to get in<br>
                        touch with us</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection