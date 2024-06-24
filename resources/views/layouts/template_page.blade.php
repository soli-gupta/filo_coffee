<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./frontend/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="./frontend/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./frontend/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./frontend/favicon-16x16.png">
    @include('layouts.meta_tags')
    <base href="{{ BASE_URL }}" />
    <script type="text/javascript">
        var base_url = "{{ BASE_URL }}";
    </script>
    <?php
    define('STATICVER', App\SettingModel::getValue('staticver'));
    ?>
    {!! App\SettingModel::getValue('common-seo-tags')!!} @if(isset($meta_other)) {!! $meta_other !!} @endif

    <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->

    <link rel="manifest" href="./frontend/site.webmanifest">
    <script type="module" crossorigin src="./frontend/assets/custom.js"></script>
    <link rel="stylesheet" crossorigin href="./frontend/assets/style.css">
    <style>
        #timeSensitiveText {
            display: none;
        }
    </style>
</head>

<body>
    <main class="main-d">
        <header>
            <div class="inner-w">
                <div class="left">
                    &nbsp;
                </div>
                <div class="center">
                    <div class="logo">
                        <img src="./frontend/img/logofilo.png" alt="Filo Coffee">
                    </div>
                </div>
                <div class="right">
                    <div class="icon">
                        <span></span>
                    </div>
                    <div class="text" id="timeSensitiveText">
                        Today 8:00 AM to 7:00 PM
                    </div>
                </div>
            </div>
        </header>

        @yield('content')


        <footer>
            <div class="foo-pa">
                <div class="back-to-top-p">
                    <div class="conta-w">
                        <div class="gif-w">
                            <img src="./frontend/img/back-to-top.gif" alt="">
                        </div>
                        <div class="text-w">
                            BACK TO</br>TOP
                        </div>
                    </div>
                </div>
                <div class="cont">
                    <div class="logo">
                        <img src="./frontend/img/logofilo.png" alt="Filo Coffee">
                    </div>
                    <div class="address">
                        @if (isset($contact_addresses) && $contact_addresses)
                        {!! $contact_addresses!!}
                        @endif
                    </div>
                    <div class="hours-w">
                        <div class="head-d">
                            Opening Hours
                        </div>
                        <div class="timing">
                            @if (isset($opening_hours) && $opening_hours)
                            {!! $opening_hours!!}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="bots-w">
                    <div class="left">
                        <a href="https://www.instagram.com/filocoffeeuk/" target="_blank">
                            <div class="icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 1H6C3.23858 1 1 3.23858 1 6V16C1 18.7614 3.23858 21 6 21H16C18.7614 21 21 18.7614 21 16V6C21 3.23858 18.7614 1 16 1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 10.3698C15.1234 11.2021 14.9812 12.052 14.5937 12.7988C14.2062 13.5456 13.5931 14.1512 12.8416 14.5295C12.0901 14.9077 11.2384 15.0394 10.4077 14.9057C9.57708 14.7721 8.80971 14.3799 8.21479 13.785C7.61987 13.1901 7.22768 12.4227 7.09402 11.592C6.96035 10.7614 7.09202 9.90971 7.47028 9.15819C7.84854 8.40667 8.45414 7.79355 9.20094 7.40605C9.94773 7.01856 10.7977 6.8764 11.63 6.99981C12.4789 7.1257 13.2648 7.52128 13.8716 8.12812C14.4785 8.73496 14.8741 9.52089 15 10.3698Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 5.5H16.51" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>@filocoffeuk</p>
                        </a>
                    </div>
                    <div class="right">
                        © <span class="current_year"></span> Filo Coffee. All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>

        <script>
            function showHideText() {
                const now = new Date();
                const day = now.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday
                const hours = now.getHours();

                const startHour = 7;
                const endHour = 20;

                // Check if today is a weekday and if the current time is within the specified range
                if (day >= 1 && day <= 5 && hours >= startHour && hours < endHour) {
                    document.getElementById('timeSensitiveText').style.display = 'block';
                } else {
                    document.getElementById('timeSensitiveText').style.display = 'none';
                }
            }
            window.onload = showHideText;

            setInterval(showHideText, 60000);
        </script>
        @yield('footer_section')
        @stack('footer_script')
    </main>

</body>

</html>