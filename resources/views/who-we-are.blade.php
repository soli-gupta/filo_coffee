@extends('layouts.template_page')
@section('content')

@include('component.breadcums')

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>{{$name}}</h1>
                {!! $content !!}
            </div>
        </div>
    </div>
</section>

<section class="secpadtb2040">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image}}" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60">
    <div class="container">
        <div class="practiccontainer">
            {!! $content2 !!}
            <div class="secpadd60">
                <div class="row gx-4">
                    {!! $content3 !!}

                </div>
            </div>
        </div>
</section>

@include('component.people_component')

@endsection