@extends('layouts.template_page')
@section('content')


@include('component.breadcums')

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>{{$name}}</h1>
                {!! $content!!}
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60">
    <div class="container">
        <div class="customcontainer">
            <div class="value-d">

                @foreach ($ourValueServices as $ourValueService)
                <div class="value-inner">
                    <h3>{{$ourValueService->name}}</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="value-left">
                                <p>{{$ourValueService->short_description}}</p>
                                <h6>{{$ourValueService->author_name ? '-'.$ourValueService->author_name : ''}}</h6>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1 col-md-7 offset-md-1 col-sm-6 col-12">
                            <div class="value-right">
                                {!! $ourValueService->description!!}
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('component.people_component')

@endsection