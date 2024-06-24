@extends('layouts.template_page')
@section('content')

<div class="fixed-nav">
    <div class="cont-w">
        <div class="fake-active"></div>
        <ul class="nav-ul">
            <li class="nav-elem home active">
                <div class="svg-w">
                    <svg viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.000158669 21.7143C0.000158669 23.9029 1.78237 25.6851 3.97095 25.6851H7.14758C9.33616 25.6851 11.1184 23.9029 11.1184 21.7143V18.5377C11.1184 17.2239 12.1871 16.1552 13.5008 16.1552C14.8146 16.1552 15.8833 17.2239 15.8833 18.5377V21.7143C15.8833 23.9029 17.6655 25.6851 19.8541 25.6851H23.0307C25.2193 25.6851 27.0015 23.9029 27.0015 21.7143V13.4983C27.0015 12.4374 26.5889 11.4416 25.8382 10.6909L16.3083 1.16098C14.7603 -0.386993 12.243 -0.386993 10.6932 1.16098L1.16332 10.6909C0.412605 11.4416 0 12.4374 0 13.4983L0.000158669 21.7143ZM1.58847 13.5027C1.58847 12.8668 1.8351 12.268 2.28801 11.8198L11.8179 2.28988C12.747 1.36079 14.2593 1.36079 15.1884 2.28988L24.7183 11.8198C25.1666 12.268 25.4179 12.8683 25.4179 13.5027V21.7187C25.4179 23.0324 24.3492 24.1011 23.0354 24.1011H19.8588C18.545 24.1011 17.4763 23.0324 17.4763 21.7187V18.542C17.4763 16.3535 15.6941 14.5713 13.5055 14.5713C11.3169 14.5713 9.5347 16.3535 9.5347 18.542V21.7187C9.5347 23.0324 8.466 24.1011 7.15223 24.1011H3.97559C2.66182 24.1011 1.59312 23.0324 1.59312 21.7187V13.5027H1.58847Z" fill="#ffffff" />
                    </svg>
                </div>
            </li>
            <li class="nav-elem">
                Menu
            </li>
            <li class="nav-elem">
                Gallery
            </li>
            <li class="nav-elem">
                Story
            </li>
        </ul>
    </div>
</div>
<!-- <section class="spotlight">
    <div class="vid-wrap">

        <video playsinline autoplay loop muted poster="img/vid-thumb.png">
          
            <source src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image}}" type="video/mp4">
        </video>
    </div>
</section> -->
<section id="webSec1" class="spotlight web-sec">
    <div class="soundOn"></div>
    <div class="soundOff"></div>
    <div class="vid-wrap">
        <video playsinline autoplay loop muted poster="img/vid-thumb.png">
            <!-- <source src="./frontend/img/filo-vid.mp4" type="video/mp4"> -->
            <source src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$image}}" type="video/mp4">
        </video>
    </div>
    <div class="insta-w">
        <a href="https://www.instagram.com/filocoffeeuk/" target="_blank">
            <img src="./frontend/img/insta.gif" alt="">
        </a>
    </div>
</section>

<section id="webSec2" class="menu-sec web-sec">
    <div class="fixed-category">
        <ul class="cat-ul">
            @foreach ($item_categories as $cate)
            <li class="cat-li {{ $loop->first ? 'active' : '' }}">
                {{ $cate->name}}
            </li>
            @endforeach
        </ul>
    </div>
    <div class="menu-content-w" data-lenis-prevent>
        @foreach ($item_categories as $category )
        <article id="groudElem{{ $loop->index + 1 }}">
            <div class="head-m">
                <span>
                    {{$category->name}}
                </span>
            </div>
            <?php
            $sub_categories = DB::table('product_sub_category')->where('cate_id', $category->id)->where('status', 1)->get();
            $products = [];
            ?>
            @if (count($sub_categories) > 0)
            @foreach ($sub_categories as $sub_cate)
            <div class="head-m sub-head">
                <span>
                    {{$sub_cate->name}}
                </span>
            </div>
            <?php
            $products = DB::table('product')->where('category_id', $category->id)->where('sub_cate_id', $sub_cate->id)->where('status', 1)->get();
            ?>
            <ul class="menu-list-ul">
                @foreach ($products as $product)
                <li class="menu-elem">
                    <div class="left">
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->short_description}}</p>
                    </div>
                    <div class="right">
                        <div class="price">£{{number_format($product->price, 2)}}</div>
                    </div>
                </li>
                @endforeach

            </ul>
            @endforeach
            @else
            <?php
            $products = DB::table('product')->whereNull('sub_cate_id')->where('category_id', $category->id)->where('status', 1)->get();
            ?>
            <ul class="menu-list-ul">
                @foreach ($products as $product)
                <li class="menu-elem">
                    <div class="left">
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->short_description}}</p>
                    </div>
                    <div class="right">
                        <div class="price">£{{number_format($product->price, 2)}}</div>
                    </div>
                </li>
                @endforeach

            </ul>
            @endif
        </article>
        @endforeach

    </div>
</section>

<section id="webSec3" class="gallery-sec web-sec">
    <div class="gallery-cont-w">
        <div class="slideshow-cta">
            <div class="cta-slideshow">
                Slideshow
            </div>
        </div>
        <div class="col-p">
            <div class="col-left">
                @foreach ($galleries as $key => $gallery)
                @if ($key == 0)
                <div class="img-1 pad-bot-e">
                    <figure>
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                    </figure>
                </div>
                @elseif ($key == 1)
                <div class="img-1 pad-bot-e">
                    <figure>
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                    </figure>
                </div>
                @elseif ($key == 2 || $key == 3)
                @if ($key == 2)
                <div class="img-2 pad-bot-e">
                    @endif
                    <div class="elem">
                        <figure>
                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                        </figure>
                    </div>
                    @if ($key == 3)
                </div>
                @endif
                @elseif ($key == 4)
                <div class="img-3">
                    <figure>
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                    </figure>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-right">
                @foreach ($galleries as $key => $gallery)
                @if ($key == 5)
                <div class="img-4 pad-bot-e">
                    <figure>
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                    </figure>
                </div>
                @elseif ($key == 6)
                <div class="img-4">
                    <figure>
                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $gallery->image_path }}" alt="">
                    </figure>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="image-gallery-popup">
    <div class="cont-w">
        <div class="close-w">
            <div class="close-elem"></div>
        </div>
        <div class="slider-ps">
            <div class="slider-img-c">
                <div id="gallery-keen" class="keen-slider">
                    @foreach ( $galleries as $key=>$gallery )
                    <div class="keen-slider__slide">
                        <div class="gallery-img-comp">
                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$gallery->image_path}}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="slide-count">
                <span class="current">1</span>/<span class="total">{{ count($galleries)}}</span>
            </div>
            <div class="slider-nav-c">
                <div class="prev-w">
                    <svg viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.277156 11.8496L9.16269 21.8456C9.62718 22.3184 10.3016 22.3144 10.7333 21.9237C11.1649 21.5329 11.2021 20.7847 10.8114 20.3531L3.57452 12.214L32.2093 12.214C32.8228 12.214 33.3201 11.7168 33.3201 11.1033C33.3201 10.4899 32.8228 9.99268 32.2093 9.99268L3.57452 9.99268L10.8114 1.85362C11.2021 1.42196 11.152 0.687536 10.7333 0.283032C10.2973 -0.138021 9.55342 -0.0705012 9.16269 0.36116L0.277156 10.3572C-0.115312 10.9058 -0.0685472 11.3706 0.277156 11.8496Z" fill="#BF9C7A" />
                    </svg>
                </div>
                <div class="next-w">
                    <svg viewBox="0 0 34 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.7228 10.3594L24.8373 0.363478C24.3728 -0.109354 23.6984 -0.105342 23.2667 0.285385C22.8351 0.676106 22.7979 1.42432 23.1886 1.85594L30.4255 9.99503H1.79065C1.17723 9.99503 0.679932 10.4923 0.679932 11.1057C0.679932 11.7191 1.17723 12.2164 1.79065 12.2164H30.4255L23.1886 20.3554C22.7979 20.7871 22.848 21.5215 23.2667 21.926C23.7027 22.3471 24.4466 22.2795 24.8373 21.8479L33.7228 11.8519C34.1153 11.3033 34.0685 10.8384 33.7228 10.3594Z" fill="#BF9C7A" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="webSec4" class="about-sec web-sec">
    <div class="wrap-cont">
        <div class="mask-w">
            <div class="mask-content">
                <img class="" src="{{ STATIC_PUBLIC_URL_STORAGE }}{{ $filo_stories->image_path }}" alt="Filo Coffee">
                <h1>The Tradition</h1>
            </div>
        </div>
        <div class="under-mask">
            <div class="cont-wm">
                <div class="hea-w">
                    <span class="h-start">
                        <svg viewBox="0 0 89 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.80289 73.2755C2.53178 61.0634 0.896223 50.1597 0.896223 40.5644C0.896223 27.6981 4.0583 17.7757 10.3824 10.7973C16.7066 3.60088 25.8657 0.00265739 37.8598 0.00265739V15.3769C32.1899 15.3769 28.0464 17.0124 25.4296 20.2835C23.0307 23.3366 21.8313 28.1342 21.8313 34.6764V41.5458H39.4953V73.2755H5.80289ZM55.1967 73.2755C52.1436 61.9357 50.6171 51.032 50.6171 40.5644C50.6171 27.6981 53.6702 17.7757 59.7762 10.7973C66.1004 3.60088 75.2595 0.00265739 87.2536 0.00265739V15.3769C76.5679 15.3769 71.2251 21.8101 71.2251 34.6764V41.5458H88.8891V73.2755H55.1967Z" fill="#BF9C7A" fill-opacity="0.2" />
                        </svg>
                    </span>
                    <h2>{{$filo_stories->title}}</h2>
                    <span class="h-end">
                        <svg viewBox="0 0 89 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.9158 0.00265739C36.9688 10.2521 38.4953 21.1558 38.4953 32.7138C38.4953 45.7982 35.3333 55.8296 29.0091 62.808C22.903 69.7864 13.853 73.2755 1.85889 73.2755V57.5742C7.31074 57.5742 11.3451 56.0477 13.962 52.9947C16.5789 49.7236 17.8873 44.9259 17.8873 38.6018V31.7324H0.223335V0.00265739H33.9158ZM83.3096 0.00265739C86.5807 11.9967 88.2162 22.9004 88.2162 32.7138C88.2162 45.7982 85.0542 55.8296 78.73 62.808C72.4059 69.7864 63.2467 73.2755 51.2527 73.2755V57.5742C56.9226 57.5742 60.957 56.0477 63.3558 52.9947C65.9727 49.9416 67.2811 45.144 67.2811 38.6018V31.7324H49.6171V0.00265739H83.3096Z" fill="#BF9C7A" fill-opacity="0.2" />
                        </svg>
                    </span>
                </div>
                <div class="para-w">
                    {!!$filo_stories->description!!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection