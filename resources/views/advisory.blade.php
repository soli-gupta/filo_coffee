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

<section class="">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image}}" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>
<section class="whatsnewsec whylks secpadd60">
    <div class="container">
        <div class="customcontainer">
            <div class="commonhead" data-aos="fade-up" data-aos-mirror="true">
                <h2>Why LKS</h2>
            </div>
            <div class="whatsnewcont">
                @if (isset($why_lks_datas))
                @foreach ($why_lks_datas as $key => $value)
                <div class="whatsnewbox" data-aos="fade-left">
                    <p>{{$value}}</p>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>


<section class="explsectorsec secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <h2>Explore Practices</h2>
            <div class="exploredetail">
                <div class="row gx-5">
                    @if (isset($explorePractices))
                    @foreach ($explorePractices as $explorePractice)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="exploresectorbox coleql_height">
                            <a href="javascript:void(0);">
                                <h3>{{$explorePractice->name}}
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

                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@include('component.people_component')
@endsection