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

<section class="awardpage">
    <div class="container">
        <div class="awardinner">
            <div class="awardlist">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach ($years as $index => $year)
                    <li class="nav-item">
                        <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="pills{{ $year }}-tab" data-bs-toggle="pill" data-bs-target="#pills{{ $year }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $year }}</button>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($years as $index => $year)
                <div class="tab-pane fade show {{ $index === 0 ? 'active' : '' }}" id="pills{{ $year }}">
                    @if (isset($awards[$year]) && count($awards[$year]) > 0)
                    <div class="awardinner-d">
                        <div class="row gx-5">
                            @foreach ($awards[$year] as $award)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="awardrightbox">
                                    <div class="awardimg"><img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $award->image }}" width="97" alt="" class="img-fluid"></div>
                                    <div class="awarddetail">
                                        <p>{{ $award->name }}</p>
                                        <p class="awardyear">{{ $award->year }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <h2 class="text-center">Coming Soon</h2>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('component.people_component')


<section class="sharecom-btn">
    <a href=""><img src="{{ STATIC_PUBLIC_URL }}assets/images/share.svg" width="15" alt="" title=""></a>
</section>
@endsection