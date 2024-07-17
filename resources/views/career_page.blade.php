@extends('layouts.template_page')
@section('content')

@include('component.breadcums')

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>{{$name}}</h1>
                <p>{{$sub_text}}</p>
            </div>
        </div>
    </div>
</section>

<section class="secpadtb2040">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image}}" alt="{{$name}}" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60">
    <div class="container">
        <div class="practiccontainer">
            {!!$content!!}

            <div class="growdetaillist">
                <ul>
                    <li>
                        <a href="javascript:void(0);">View openings
                            <span>
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
</section>
@endsection