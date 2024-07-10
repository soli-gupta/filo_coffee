@extends('layouts.template_page')
@section('content')
<section class="breadcumsec">
    <div class="container">
        <div class="customcontainer">
            <div class="commonbreadcum">
                <ul>
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li><a href="javascript:void(0);">Who We are</a></li>
                </ul>
            </div>
        </div>
</section>

<section class="commoninnertop secpadd60" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnersec2">
                <h1>Who We are</h1>
                <p>We are a full-service law firm based in India. The firm has offices in <strong>14 cities</strong> and has
                    over <strong>470+ professionals</strong>.</p>
                <p>The firm has humble origins. It was started in 1985 in a single room set up by the two founders with no
                    prior experience of working in a law firm. Both the founders had outstanding academic records and focussed
                    on their deep understanding of the law to form the foundation of the firm.</p>
            </div>
        </div>
    </div>
</section>

<section class="secpadtb2040">
    <div class="container">
        <div class="customcontainer">
            <div class="commoninnerimg revealimage">
                <img src="{{ STATIC_PUBLIC_URL }}assets/images/who-we-are.jpg" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</section>

<section class="practicedetail secpadd60">
    <div class="container">
        <div class="practiccontainer">
            <p>Even today, the firm prides itself for its commitment towards knowing the law and encouraging its
                professionals to be at the forefront of the latest legal developments.</p>
            <p>An early choice that the firm made was to combine the knowledge of law with the highest ethical practices. It
                allows the firm to set clear boundaries within which the professionals operate with freedom.</p>
            <p>The diversity of people makes the firm. Many of our professionals are dual qualified having studied science,
                engineering or accounting as their primary qualification. We work with professionals who have had significant
                industry or policy experience. Some of the brightest lawyers from law schools are part of the firm. A diverse
                mix allows the firm to collaborate effectively, address areas where law combines with technology or accounting
                and design solutions for the clients.</p>
            <p>The firm believes in technology as a driver for legal services in the future. We invest heavily in technology
                and infrastructure, which allows our professionals and clients to work more efficiently, collaborate
                effectively and maintain standards. We work closely with a spectrum of technology companies from start-ups to
                the leaders to deliver value to their business.</p>
            <h2>What We Do</h2>
            <p>Lakshmikumaran & Sridharan is a full-service law firm based in India. The firm has 14 offices and has over
                400 professionals specializing in areas such as corporate & commercial laws, dispute resolution, taxation and
                intellectual property. Over the last three decades, we have worked with a variety of clients – start-ups,
                small & medium enterprises, large Indian corporates and multinational companies. Our professionals have
                experience of working in both traditional sectors such as commodities, automobile, pharmaceuticals,
                petrochemicals and modern sectors such as e-commerce, big data, renewables. We combine our knowledge of the
                law with industry experience to design legal solutions that our clients can implement.</p>
            <div class="secpadd60">

                <div class="row gx-4">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <h2>History</h2>
                        <p>We know the value of knowing who we are. Vision for our role as an organization is borne of our
                            heritage.</p>
                        <a href="#" class="commonbtn2 d-inline-block">View history <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                    <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#454545"></path>
                                </svg>
                            </span></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="row gx-lg-5">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="history-rgt-bx">
                                    <img src="{{ STATIC_PUBLIC_URL }}assets/images/v-lakshmikumaran.jpg" alt="" title="" class="img-fluid">
                                    <h5>V. Lakshmikumaran</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="history-rgt-bx">
                                    <img src="{{ STATIC_PUBLIC_URL }}assets/images/v-sridharan.jpg" alt="" title="" class="img-fluid">
                                    <h5>V. Sridharan</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>




<section class="keypeoplesec secpadd60 mb-5" data-aos="fade-up">
    <div class="container">
        <div class="customcontainer">
            <h2>People</h2>
            <p>Search for our people by name or keyword. You may also search by a location or a practice area.</p>
            <div class="keypeoplefilter">
                <form action="">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" name="" placeholder="Find a professional">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select name="practiceareas">
                                    <option value="">Practice areas</option>
                                    <option value="Arbitration">Arbitration</option>
                                    <option value="Banking &amp; Finance">Banking &amp; Finance</option>
                                    <option value="Commercial litigation">Commercial litigation</option>
                                    <option value="Competition and Antitrust">Competition and Antitrust</option>
                                    <option value="Corporate">Corporate</option>
                                    <option value="Customs">Customs</option>
                                    <option value="Direct Tax">Direct Tax</option>
                                    <option value="Goods and Services Tax">Goods and Services Tax</option>
                                    <option value="Insolvency">Insolvency</option>
                                    <option value="Intellectual Property">Intellectual Property</option>
                                    <option value="International Trade &amp; WTO">International Trade &amp; WTO</option>
                                    <option value="Mergers &amp; Acquisitions / PE">Mergers &amp; Acquisitions / PE</option>
                                    <option value="Real Estate Law">Real Estate Law</option>
                                    <option value="Regulatory">Regulatory</option>
                                    <option value="Securities Laws">Securities Laws</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select name="practiceareas">
                                    <option value="">Locations</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Prayagraj">Prayagraj</option>
                                    <option value="Bengaluru">Bengaluru</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Gurugram">Gurugram</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Kochi">Kochi</option>
                                    <option value="Kolkata">Kolkata</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="New Delhi">New Delhi</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Nagpur">Nagpur</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group submit">
                                <button type="submit" name="submit" placeholder="Submit">Submit
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="13" viewBox="0 0 27 13" fill="none">
                                        <path d="M20.4766 11.8097L20.987 12.3201L26.8932 6.41396L20.987 0.507812L20.4766 1.01822L25.5078 6.04939H0V6.77854H25.5078L20.4766 11.8097Z" fill="#ffffff" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="searchbyalpha">
                <p>Or browse alphabetically</p>
                <ul>
                    <li><a href="#" class="">A</a></li>
                    <li><a href="#" class="">B</a></li>
                    <li><a href="#" class="">C</a></li>
                    <li><a href="#" class="">D</a></li>
                    <li><a href="#" class="">E</a></li>
                    <li><a href="#" class="">F</a></li>
                    <li><a href="#" class="">G</a></li>
                    <li><a href="#" class="active">H</a></li>
                    <li><a href="#" class="">I</a></li>
                    <li><a href="#" class="">J</a></li>
                    <li><a href="#" class="">K</a></li>
                    <li><a href="#" class="">L</a></li>
                    <li><a href="#" class="">M</a></li>
                    <li><a href="#" class="">N</a></li>
                    <li><a href="#" class="">O</a></li>
                    <li><a href="#" class="">P</a></li>
                    <li><a href="#" class="">Q</a></li>
                    <li><a href="#" class="">R</a></li>
                    <li><a href="#" class="">S</a></li>
                    <li><a href="#" class="">T</a></li>
                    <li><a href="#" class="">U</a></li>
                    <li><a href="#" class="">V</a></li>
                    <li><a href="#" class="">W</a></li>
                    <li><a href="#" class="">X</a></li>
                    <li><a href="#" class="">Y</a></li>
                    <li><a href="#" class="">Z</a></li>
                </ul>


            </div>

            <div class="keypeoplelist d-none">
                <div class="keypeopleslider owl-carousel">
                    <div class="item">
                        <div class="keypeoplebox">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/keypeople1.jpg" alt="" title="" class="img-fluid">
                            <div class="keypeopleboxdet">
                                <h4>Name Surname</h4>
                                <p>Principal Partner, Practice, New Delhi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="keypeoplebox">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/keypeople2.jpg" alt="" title="" class="img-fluid">
                            <div class="keypeopleboxdet">
                                <h4>Name Surname</h4>
                                <p>Principal Partner, Practice, New Delhi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="keypeoplebox">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/keypeople3.jpg" alt="" title="" class="img-fluid">
                            <div class="keypeopleboxdet">
                                <h4>Name Surname</h4>
                                <p>Principal Partner, Practice, New Delhi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="keypeoplebox">
                            <img src="{{ STATIC_PUBLIC_URL }}assets/images/keypeople1.jpg" alt="" title="" class="img-fluid">
                            <div class="keypeopleboxdet">
                                <h4>Name Surname</h4>
                                <p>Principal Partner, Practice, New Delhi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection