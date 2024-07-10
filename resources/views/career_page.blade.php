@extends('layouts.template_page')
@section('content')
<section class="breadcumsec">
    <div class="container">
        <div class="customcontainer">
            <div class="commonbreadcum">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0);">Careers</a></li>
                </ul>
            </div>
        </div>
</section>

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>Grow With Us</h1>
                <p>LKS handles complex client projects that need deep insights, market knowledge and global capabilities.
                    Consequently our teams are made up of a diverse range of backgrounds, cultures and perspectives.</p>
            </div>
        </div>
    </div>
</section>

<section class="secpadtb2040">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{ STATIC_PUBLIC_URL }}assets/images/careers.jpg" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60">
    <div class="container">
        <div class="practiccontainer">
            <p id="growwithsub">Talent is critical to the success of Lakshmikumaran & Sridharan. We invest heavily in our
                talent and recognise that the success of our firm is built on the diverse strengths of each of the members. We
                offer exceptional career opportunities to experienced lawyers, chartered accountants, management graduates,
                engineers, scientists, Doctorates and aspiring graduates, in an environment which is challenging, rewarding
                and distinct.</p>
            <p>We encourage a transparent style of work, where individual opinions are valued, and feedback is openly
                accepted. We are looking for problem solvers, strategic thinkers and most importantly people with whom we can
                share our lives. For more than three decades, we have produced a unique track record of delivering exceptional
                services to our clients that is the result of having great people operating in our unique culture.</p>

            <div class="growdetaillist">
                <ul>
                    <li><a href="javascript:void(0);">View openings <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                    <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                </svg>
                            </span></a></li>
                    <li><a href="javascript:void(0);">View internships <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                    <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545" />
                                </svg>
                            </span></a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
@endsection