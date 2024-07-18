@extends('layouts.template_page')
@section('content')
@include('component.breadcums')

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>{{$name}}</h1>
                <p>{{$sub_text}}</p>
                {!!$description!!}
            </div>
        </div>
    </div>
</section>

<section class="secpadtb2040">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{STATIC_PUBLIC_URL_STORAGE}}{{$image}}" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60 practicelist">
    <div class="container">
        <div class="practiccontainer">
            {!!$feature_content!!}

            <div class="otherservice secpadd60">
                <a href="#" class="commonbtn2">Contact us <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                            <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                        </svg>
                    </span></a>
            </div>

        </div>
    </div>
</section>


<section class="awardsec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                <div class="awardleft">
                    <h3 data-aos="fade-up">Accolades & Awards</h3>
                    <p>Global recognition validates our commitment to excellence. We and our professionals are regularly appreciated for the quality of services and the depth of legal expertise. Our consistent recognition also proves our maxim of always exceeding expectations.</p>
                    <a href="javascript:void(0);" class="commbtn2">SEE ALL <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                            </svg>
                        </span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="awardmarquee">
                    <div class="marqueebox2">
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{STATIC_PUBLIC_URL}}assets/images/chambers.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Band 1 Firm in Tax</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{STATIC_PUBLIC_URL}}assets/images/asialaw.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Recognised firm in Dispute Resolution</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="images/legal.png" alt="" class="img-fluid"></div>
                            <div class="awarddetail">
                                <p>Tier 1 Firm ranking in Tax</p>
                                <p class="awardyear">2023</p>
                            </div>
                        </div>
                        <div class="awardrightbox">
                            <div class="awardimg"><img src="{{STATIC_PUBLIC_URL}}assets/images/ipstars.png" alt="" class="img-fluid"></div>
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

@include('component.people_component')

@endsection