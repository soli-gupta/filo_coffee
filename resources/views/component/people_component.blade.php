@php

use App\PratcieModel;
use App\LocationModel;

$practices = PratcieModel::where('status', 1)->get();
$locations = LocationModel::where('status', 1)->orderBy('sorting', 'asc')->get();

$activeLetter = request('people') ? request('people') : '';
$name = request('name') ? request('name') : '';
$find_location = request('location') ? request('location') : '';
$leader_pratice = request('practice') ? request('practice') : '';
$current_url = Request::url();
@endphp


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
                                <input type="text" name="name" placeholder="Find a professional" value="{{ $name  ? $name : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select name="practice">
                                    <option value="">Practice areas</option>
                                    @foreach ($practices as $practice)
                                    <option value="{{$practice->name}}" {{ $practice->name == $leader_pratice ? 'selected' : '' }}>{{$practice->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select name="location">
                                    <option value="">Locations</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->name}}" {{ $location->name == $find_location ? 'selected' : '' }}>{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="form-group submit">
                                <button type="submit" placeholder="Submit">Submit
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
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'A' ? 'active' : '' }}" data-key="A">A</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'B' ? 'active' : '' }}" data-key="B">B</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'C' ? 'active' : '' }}" data-key="C">C</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'D' ? 'active' : '' }}" data-key="D">D</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'E' ? 'active' : '' }}" data-key="E">E</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'F' ? 'active' : '' }}" data-key="F">F</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'G' ? 'active' : '' }}" data-key="G">G</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'H' ? 'active' : '' }}" data-key="H">H</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'I' ? 'active' : '' }}" data-key="I">I</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'J' ? 'active' : '' }}" data-key="J">J</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'K' ? 'active' : '' }}" data-key="K">K</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'L' ? 'active' : '' }}" data-key="L">L</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'M' ? 'active' : '' }}" data-key="M">M</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'N' ? 'active' : '' }}" data-key="N">N</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'O' ? 'active' : '' }}" data-key="O">O</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'P' ? 'active' : '' }}" data-key="P">P</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'Q' ? 'active' : '' }}" data-key="Q">Q</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'R' ? 'active' : '' }}" data-key="R">R</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'S' ? 'active' : '' }}" data-key="S">S</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'T' ? 'active' : '' }}" data-key="T">T</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'U' ? 'active' : '' }}" data-key="U">U</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'V' ? 'active' : '' }}" data-key="V">V</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'W' ? 'active' : '' }}" data-key="W">W</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'X' ? 'active' : '' }}" data-key="X">X</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'Y' ? 'active' : '' }}" data-key="Y">Y</a></li>
                    <li><a href="#" class="alpha-link {{ $activeLetter == 'Z' ? 'active' : '' }}" data-key="Z">Z</a></li>
                </ul>


            </div>

            @if ($activeLetter)
            <div class="keypeoplelist">
                @if(count($peoples) > 0)
                <div class="keypeopleslider owl-carousel">
                    @foreach ($peoples as $people)
                    <div class="item">
                        <div class="keypeoplebox">
                            <img src="{{ STATIC_PUBLIC_URL_STORAGE }}{{$people->image}}" alt="" title="" class="img-fluid">
                            <div class="keypeopleboxdet">
                                <h4>{{$people->name}}</h4>
                                <p>{{$people->designation}}, {{$people->practice}}, {{$people->location}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p>We could not find any consultant whose name starts with "{{$activeLetter}}"</p>
                @endif
            </div>
            @endif



        </div>
    </div>
</section>
@push('footer_script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.alpha-link');

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                // Get the selected alpha key
                const alphaKey = this.getAttribute('data-key');

                // Update the URL with the selected alpha key
                const baseUrl = "<?php echo $current_url; ?>";
                const url = `${baseUrl}?people=${alphaKey}`;
                window.location.href = url;

                // Remove active class from all links
                links.forEach(link => link.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');
            });
        });
    });
</script>
@endpush