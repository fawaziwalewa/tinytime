<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} - Homepage</title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords"
        content="tinytime, time, tiny time, counter, timer, tinytime counter, tinytime timer, tiny time timer, tiny timer counter, time to get organized and be productive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/themes/new-year/images/stopwatch.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Custom Stylesheet and JS -->
    @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- Facebook --}}
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="{{ config('app.description') }}" />
    <meta property="og:image" content="{{ Vite::asset('resources/themes/new-year/images/seo_banner.png') }}" />

    {{-- Twitter --}}
    <meta name="twitter:title" content="{{ config('app.name') }}" />
    <meta name="twitter:description" content="{{ config('app.description') }}" />
    <meta name="twitter:creator" content="@TinyTime" />
    <meta name="twitter:image" content="{{ Vite::asset('resources/themes/new-year/images/seo_banner.png') }}">
    <meta name="twitter:domain" content="{{ config('app.url') }}" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/themes/new-year/css/style.css">
    @livewireStyles
</head>

<body class="">
    <!-- Main Timer Template-->
    <div class="py-10 toz">
        <main class="relative z-50 max-w-5xl mx-auto toz-main">
            <div class="text-center toz-text-wrapper">
                <h1 class="toz-title">Countdown to a Spectacular New Year!</h1>
                <h3 class="toz-subtitle">
                    Get ready to welcome the New Year with excitement and joy. Time is
                    ticking away, and we're here to celebrate with you!
                </h3>
            </div>
            <!-- Event timer/counter -->
            <div class="toz-timer">
                <!-- Days -->
                <div class="toz-ec">
                    <div class="toz-ec-d">
                        <img src="/themes/new-year/images/timer_icon.svg" alt="" />
                        <div class="toz-days">
                            <span id="toz-days" class="Countdown-days">365</span>
                        </div>
                    </div>
                    <span class="toz-unit">Days</span>
                </div>
                <!-- Hours -->

                <div class="toz-ec">
                    <div class="toz-ec-d">
                        <img src="/themes/new-year/images/timer_icon2.svg" alt="" />
                        <div class="toz-hours">
                            <span id="toz-hours" class="Countdown-hours">24</span>
                        </div>
                    </div>
                    <span class="toz-unit">Hours</span>
                </div>

                <!-- Minutes -->

                <div class="toz-ec">
                    <div class="toz-ec-d">
                        <img src="/themes/new-year/images/timer_icon.svg" alt="" />
                        <div class="toz-mins">
                            <span id="toz-mins" class="Countdown-minutes">60</span>
                        </div>
                    </div>
                    <span class="toz-unit">Minutes</span>
                </div>
                <!-- Seconds -->

                <div class="toz-ec">
                    <div class="toz-ec-d">
                        <img src="/themes/new-year/images/timer_icon2.svg" alt="" />
                        <div class="toz-secs">
                            <span id="toz-secs" class="Countdown-seconds">60</span>
                        </div>
                    </div>
                    <span class="toz-unit">Seconds</span>
                </div>
            </div>
            <!--Timer control buttons -->
            <div class="toz-control-buttons">
                <!--Play Button-->
                <button type="button" id="start" class="toz-tcb tooltip">
                    <span class="tooltiptext">Play</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="26" viewBox="0 0 23 26" fill="none">
                        <path
                            d="M20.3666 14.7899C21.7443 13.9944 21.7443 12.0058 20.3666 11.2103L4.86657 2.26138C3.48879 1.46592 1.76657 2.46025 1.76657 4.05117L1.76657 21.949C1.76657 23.5399 3.48879 24.5343 4.86657 23.7388L20.3666 14.7899Z"
                            fill="#1D4925" stroke="#1D4925" stroke-width="2.06667" />
                    </svg>
                </button>
                <!-- Pause Button -->
                <button type="button" id="pause" class="toz-tcb tooltip">
                    <span class="tooltiptext">Pause</span>
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="5.90599" y="1.25608" width="3.85469" height="23.488" rx="1.92735" fill="#1D4925"
                            stroke="#1D4925" stroke-width="1.31197" />
                        <path
                            d="M16.2395 3.18343C16.2395 2.11899 17.1024 1.25608 18.1668 1.25608C19.2313 1.25608 20.0942 2.11899 20.0942 3.18343V22.8168C20.0942 23.8812 19.2313 24.7441 18.1668 24.7441C17.1024 24.7441 16.2395 23.8812 16.2395 22.8168V3.18343Z"
                            fill="#1D4925" stroke="#1D4925" stroke-width="1.31197" />
                    </svg>
                </button>
                <!-- Restart Button -->
                <button type="button" id="reset" class="toz-tcb tooltip">
                    <span class="tooltiptext">Restart</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                        <path
                            d="M19.2853 9.90401C18.6223 9.90401 18.1803 10.346 18.1803 11.0091C18.1803 15.3189 14.7545 18.7446 10.4447 18.7446H9.67117C9.45015 18.7446 9.33964 18.7446 9.11863 18.6341C8.89761 18.6341 8.78711 18.5236 8.56609 18.5236C8.45558 18.5236 8.34507 18.4131 8.23457 18.4131C7.46101 18.1921 6.68746 17.75 6.02442 17.308C5.91391 17.1975 5.8034 17.1975 5.8034 17.087C5.69289 16.9765 5.58238 16.866 5.47188 16.866C5.25086 16.7555 5.02985 16.5345 4.91934 16.4239L4.69832 16.2029L6.68746 15.8714C7.24 15.7609 7.68203 15.2084 7.57152 14.5453C7.46101 13.9928 6.90848 13.5508 6.24543 13.6613L2.59868 14.3243L1.71462 14.5453C1.38309 14.5453 1.16208 14.7663 1.05157 14.9873C0.941064 15.2084 0.830556 15.5399 0.830556 15.7609L1.71462 20.4022C1.82512 20.9547 2.26716 21.2863 2.81969 21.2863H3.04071C3.59325 21.1758 4.03528 20.6232 3.92477 19.9602L3.59325 18.0816C3.81426 18.3026 4.14579 18.5236 4.3668 18.7446H4.47731C4.58782 18.8551 4.69832 18.9656 4.80883 18.9656C5.02985 19.1866 5.25086 19.2971 5.58238 19.4076C5.8034 19.8497 6.13492 19.9602 6.46645 20.1812H6.57695C6.68746 20.2917 6.90848 20.2917 7.12949 20.4022C7.57152 20.5127 8.01355 20.6232 8.34507 20.7337C8.56609 20.7337 8.78711 20.8442 9.00812 20.8442H10.3342C15.8596 20.8442 20.2799 16.4239 20.2799 10.8986C20.3904 10.346 19.8379 9.90401 19.2853 9.90401ZM1.71462 12.1142C2.37766 12.1142 2.81969 11.6721 2.81969 11.0091C2.81969 6.69929 6.24543 3.27356 10.5552 3.27356H11.3288C11.5498 3.27356 11.6603 3.27356 11.8813 3.38407C12.1023 3.38407 12.2128 3.49458 12.4339 3.49458C12.5444 3.49458 12.6549 3.60508 12.7654 3.60508C13.5389 3.8261 14.3125 4.15762 14.9755 4.71016C15.086 4.82067 15.1965 4.82067 15.3071 4.93117C15.4176 5.04168 15.5281 5.04168 15.6386 5.15219C15.7491 5.26269 15.8596 5.48371 16.0806 5.59422L16.3016 5.81523L14.3125 6.14675C13.7599 6.25726 13.3179 6.8098 13.4284 7.47284C13.5389 8.02538 13.981 8.3569 14.5335 8.3569H14.7545L19.3958 7.47284C19.9484 7.36234 20.3904 6.8098 20.2799 6.14675L19.3958 1.61595C19.2853 1.06341 18.7328 0.621383 18.0697 0.731891C17.5172 0.842398 17.0752 1.39494 17.1857 2.05798L17.5172 3.93661C17.2962 3.71559 16.9647 3.38407 16.7437 3.27356H16.6331C16.5226 3.16305 16.4121 3.05255 16.3016 3.05255C16.0806 2.83153 15.8596 2.72102 15.5281 2.50001C15.1965 2.279 14.865 2.16849 14.5335 1.94747H14.423C14.3125 1.83696 14.0915 1.83696 13.8705 1.72646C13.4284 1.61595 12.9864 1.50544 12.6549 1.39494C12.4339 1.39494 12.2128 1.28443 11.9918 1.28443H10.6657C5.14035 1.28443 0.720049 5.70472 0.720049 11.2301C0.609541 11.6721 1.05157 12.1142 1.71462 12.1142Z"
                            fill="#1D4925" />
                    </svg>
                </button>
                <!-- Stop Watch Button -->
                <button type="button" id="counter" class="toz-tcb tooltip">
                    <span class="tooltiptext countup">CountUp</span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                        <path
                            d="M22.5284 10.9824C22.5285 13.1517 21.8439 15.2658 20.5721 17.0232C19.3003 18.7807 17.5063 20.0919 15.4456 20.77C13.385 21.4481 11.1629 21.4585 9.09598 20.7997C7.02909 20.1409 5.22287 18.8465 3.93471 17.101L5.21075 16.1578C6.3749 17.7389 8.03866 18.8808 9.93262 19.3984C11.8266 19.9161 13.8398 19.7793 15.6463 19.0102C17.4529 18.2411 18.9469 16.8847 19.8865 15.1607C20.826 13.4367 21.1562 11.446 20.8234 9.51093C20.4906 7.57591 19.5143 5.80988 18.0528 4.49883C16.5912 3.18778 14.7298 2.40846 12.7702 2.28709C10.8105 2.16572 8.86723 2.7094 7.25505 3.83009C5.64287 4.95077 4.45619 6.58284 3.88716 8.46201L4.67973 7.94684L5.56741 9.2625L3.1897 10.8476C3.0496 10.9421 2.88298 10.9893 2.71416 10.9824C2.58433 10.9826 2.45645 10.9509 2.34174 10.8901C2.22704 10.8293 2.12903 10.7412 2.05633 10.6336L0.471191 8.25594L1.78685 7.36827L2.3258 8.16083C3.01345 5.77853 4.53715 3.72412 6.61729 2.37459C8.69744 1.02506 11.1945 0.470936 13.6502 0.813909C16.1059 1.15688 18.3556 2.37394 19.9864 4.24175C21.6172 6.10956 22.5197 8.50283 22.5284 10.9824ZM11.4324 5.4344V10.9824C11.4318 11.0867 11.4518 11.1901 11.4912 11.2866C11.5307 11.3832 11.5888 11.471 11.6623 11.5451L14.04 13.9228L15.1654 12.7974L13.0175 10.6574V5.4344H11.4324Z"
                            fill="#1D4925" />
                    </svg>
                </button>
                <!-- Timer Button -->
                <button type="button" id="custom" class="toz-tcb tooltip">
                    <span class="tooltiptext">Custom Timer</span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.5746 5.75269C19.5443 4.7123 18.273 3.88034 16.8059 3.35275C11.51 1.44817 5.65779 4.2271 3.74348 9.55016C1.82922 14.8732 4.57113 20.7428 9.86713 22.6473C13.4631 23.9405 17.316 23.0737 20.018 20.7184C20.6251 20.1892 21.174 19.5849 21.6489 18.9129C22.1732 18.1709 22.6071 17.3464 22.9296 16.4499C23.1305 15.8911 23.7474 15.6005 24.3063 15.8015C24.8651 16.0024 25.1557 16.6193 24.9547 17.1782C24.565 18.2618 24.0402 19.2581 23.4065 20.1548C22.8316 20.9684 22.1671 21.7001 21.4322 22.3407C18.1601 25.1929 13.4935 26.2385 9.13885 24.6724C2.728 22.367 -0.598913 15.2654 1.71833 8.82183C4.03563 2.37826 11.1234 -0.977865 17.5342 1.3276C19.6038 2.07186 21.3517 3.31584 22.6922 4.87586L24.9777 3.92951L24.4651 11.1297L19.0125 6.39951L20.5746 5.75269ZM12.2605 9.36745L12.1852 16.6102C12.179 17.2041 12.6561 17.6912 13.25 17.6974C13.8439 17.7036 14.331 17.2265 14.3372 16.6326L14.4125 9.38988C14.4187 8.796 13.9416 8.30882 13.3477 8.30268C12.7538 8.2965 12.2667 8.77362 12.2605 9.36745Z"
                            fill="#1D4925" />
                    </svg>
                </button>
                <!-- Share Button-->
                <button type="button" id="share" class="toz-tcb tooltip">
                    <span class="tooltiptext">Share</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_23_2558)">
                            <path
                                d="M22.8876 8.50311L14.4876 1.03645C14.3535 0.915905 14.1872 0.836904 14.009 0.809037C13.8308 0.781171 13.6484 0.805637 13.4838 0.879465C13.3192 0.953293 13.1797 1.07331 13.082 1.22494C12.9843 1.37657 12.9328 1.55329 12.9336 1.73365V4.72685C10.1299 5.47911 0.800293 8.98098 0.800293 22.267C0.800635 22.4837 0.876356 22.6935 1.01447 22.8604C1.15258 23.0274 1.34449 23.1411 1.55726 23.182C1.77004 23.223 1.99043 23.1886 2.18064 23.0848C2.37085 22.9811 2.51903 22.8143 2.59976 22.6132C5.36709 15.6944 10.7618 14.2506 12.9327 13.9491V16.667C12.9325 16.8472 12.9845 17.0236 13.0823 17.1749C13.1802 17.3261 13.3198 17.4459 13.4842 17.5196C13.6486 17.5933 13.8308 17.6179 14.0089 17.5903C14.1869 17.5627 14.3532 17.4842 14.4876 17.3642L22.8876 9.89751C22.986 9.80995 23.0647 9.70256 23.1187 9.5824C23.1726 9.46223 23.2005 9.33202 23.2005 9.20031C23.2005 9.06861 23.1726 8.93839 23.1187 8.81823C23.0647 8.69807 22.986 8.59068 22.8876 8.50311Z"
                                fill="#1D4925" />
                        </g>
                        <defs>
                            <clipPath id="clip0_23_2558">
                                <rect width="22.4" height="22.4" fill="#1D4925"
                                    transform="translate(0.800293 0.800049)" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
            <!-- Subscription container -->
            <div class="toz-subscription">
                <span class="toz-subscription-subtitle">Don't Miss Out! Subscribe to Stay Updated!</span>
                <!-- Subscription form -->
                <div class="relative text-center">
                    <form action="#" method="post" id="news" class="toz-form overflow-clip">
                        @csrf
                       <label for="input" class="sr-only">Email</label>
                       <input type="email" name="email" id="input" class="toz-input" placeholder="Your Email here..." />
                       <button type="submit" class="toz-f-btn" id="send_news">Subscribe</button>
                   </form>
                    <p class="hidden mt-2 font-bold text-red-500" id="error">
                        Please provide a valid email address.
                    </p>
                    <div class="success_msg"></div>
                    <p class='hidden mt-2 font-bold text-green-700 cursor-pointer removeElem'><strong>Your Request was successfully sent.</strong> Thank you!</p>
                </div>
                <!-- Social links -->
                <div class="toz-sl">
                    <!-- Facebook Link -->
                    <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . config('app.url') }}" class="toz-social-link tooltip">
                        <span class="tooltiptext">Facebook</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="#1D4925">
                            <path
                                d="M8.32083 9.62558L8.76523 6.72977H5.98662V4.85058C5.98662 4.05835 6.37477 3.28611 7.61922 3.28611H8.88243V0.820638C8.88243 0.820638 7.7361 0.625 6.6401 0.625C4.35182 0.625 2.8561 2.01196 2.8561 4.52275V6.72977H0.3125V9.62558H2.8561V16.626H5.98662V9.62558H8.32083Z"
                                fill="#1D4925" />
                        </svg>
                    </a>
                    <!-- Twitter Link -->
                    <a href="{{ 'https://twitter.com/share?url=' . config('app.url') }}" class="toz-social-link tooltip">
                        <span class="tooltiptext">XTwitter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24" fill="none">
                            <path
                                d="M21.6348 0H25.7062L16.8115 10.1662L27.2755 24H19.0822L12.665 15.6098L5.32224 24H1.24843L10.7622 13.1262L0.724121 0H9.12531L14.9259 7.66892L21.6348 0ZM20.2059 21.5631H22.4619L7.89947 2.30892H5.47854L20.2059 21.5631Z"
                                fill="#1D4925" />
                        </svg>
                    </a>
                </div>
            </div>
        </main>
        <footer class="flex flex-wrap justify-center gap-2 text-xl font-semibold">
            <a href="{{ route('privacy') }}" class="hover:text-green-700">Privacy Policy</a>
            <a href="{{ route('terms') }}" class="hover:text-green-700">Terms of Services</a>
        </footer>
        <!-- Background ICons -->
        <img src="/themes/new-year/images/top1.png" alt="" class="bg-icon top1" />
        <img src="/themes/new-year/images/top2.png" alt="" class="bg-icon top2" />
        <img src="/themes/new-year/images/left.png" alt="" class="bg-icon left" />
        <img src="/themes/new-year/images/right.png" alt="" class="bg-icon right" />
        <img src="/themes/new-year/images/bottom1.png" alt="" class="bg-icon bottom1" />
        <img src="/themes/new-year/images/bottom2.png" alt="" class="bg-icon bottom2" />
    </div>
    {{-- modal 1 --}}
    @include('modals.custom')

    {{-- modal 2 --}}
    @include('modals.share')

    {{-- modal 3 --}}
    @include('modals.sign')

    {{-- modal 4 --}}
    @include('modals.subscription')

    {{-- <script src="/vendor/js/jquery.classycountdown.min.js"></script> --}}
    <script src="/vendor/js/new-year.js"></script>
    <script src="/vendor/js/jquery.knob.js"></script>
    <script src="/vendor/js/jquery.throttle.js"></script>
    <script src="../vendor/js/main.js"></script>
    @livewireScripts
</body>

</html>
