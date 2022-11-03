<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} - Homepage</title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords"
        content="tinytime, time, tiny time, counter, timer, tinytime counter, tinytime timer, tiny time timer, tiny timer counter, time to get organized and be productive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/images/stopwatch.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Custom Stylesheet -->
    @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- Facebook --}}
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="{{ config('app.description') }}" />
    <meta property="og:image" content="{{ Vite::asset('resources/images/seo_banner.png') }}" />

    {{-- Twitter --}}
    <meta name="twitter:title" content="{{ config('app.name') }}" />
    <meta name="twitter:description" content="{{ config('app.description') }}" />
    <meta name="twitter:creator" content="@TinyTime" />
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/seo_banner.png') }}">
    <meta name="twitter:domain" content="{{ config('app.url') }}" />
</head>

<body class="bg-black flex justify-center items-center min-h-screen relative mb-0 overflow-x-hidden"> {{-- absolute -z-50 w-auto h-auto min-w-full min-h-full max-w-none --}}
    <main class="w-full max-w-5xl text-white text-center my-5 relative">
        <video autoplay loop width="100" muted playsinline height="100" id="bgvid" class="">
            <source src="{{ Vite::asset('resources/vendor/video/output.mp4') }}" type="video/mp4">
        </video>
        <div class="flex justify-between px-4">
            <p class="text-start cursor-pointer dtxt" id="sign">SignIn/SignUp</p>
            <div class="{{-- absolute top-0 right-3 --}} mode">
                <a href="#" class="moon eclipse hidden" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-trigger="hover" title="Dark Mode">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                        <path
                            d="M24 42.3q-7.65 0-12.975-5.325Q5.7 31.65 5.7 24q0-7.65 5.325-13T24 5.65q.25 0 .65.025l1.2.075q-1.8 1.85-2.55 4.2-.75 2.35-.75 4.45 0 4.4 3.15 7.725 3.15 3.325 7.95 3.325 2.55 0 4.725-.775T42.25 22.4q.05.65.075 1.075.025.425.025.525 0 7.65-5.35 12.975Q31.65 42.3 24 42.3Z" />
                    </svg>
                </a>
                <a href="#" class="sun eclipse" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-trigger="hover" title="Light Mode">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" fill="#fff">
                        <path
                            d="M20 28.667q-3.625 0-6.146-2.521T11.333 20q0-3.625 2.521-6.167 2.521-2.541 6.146-2.541t6.167 2.541q2.541 2.542 2.541 6.167t-2.541 6.146Q23.625 28.667 20 28.667ZM3.042 21.75q-.709 0-1.209-.521-.5-.521-.5-1.229 0-.708.5-1.229.5-.521 1.209-.521h3.916q.709 0 1.23.521.52.521.52 1.229 0 .708-.52 1.229-.521.521-1.23.521Zm30 0q-.709 0-1.209-.521-.5-.521-.5-1.229 0-.708.5-1.229.5-.521 1.209-.521h3.916q.709 0 1.23.521.52.521.52 1.229 0 .708-.52 1.229-.521.521-1.23.521ZM20 8.667q-.708 0-1.229-.5-.521-.5-.521-1.209V3.042q0-.709.521-1.229.521-.521 1.229-.521.708 0 1.229.521.521.52.521 1.229v3.916q0 .709-.521 1.209-.521.5-1.229.5Zm0 30q-.708 0-1.229-.5-.521-.5-.521-1.209v-3.916q0-.709.521-1.23.521-.52 1.229-.52.708 0 1.229.52.521.521.521 1.23v3.916q0 .709-.521 1.209-.521.5-1.229.5ZM9.583 12 7.375 9.833q-.5-.5-.5-1.229 0-.729.5-1.229.5-.5 1.229-.5.729 0 1.271.5L12 9.542q.5.541.5 1.25 0 .708-.5 1.166-.458.542-1.188.542-.729 0-1.229-.5Zm20.584 20.625L28 30.417q-.5-.5-.479-1.188.021-.687.521-1.229.458-.5 1.166-.5.709 0 1.25.5l2.167 2.125q.5.542.5 1.271 0 .729-.5 1.229-.5.5-1.229.5-.729 0-1.229-.5ZM28 12q-.5-.5-.5-1.208 0-.709.5-1.25l2.167-2.167q.5-.5 1.229-.5.729 0 1.229.5.5.5.5 1.229 0 .729-.5 1.229L30.458 12q-.541.5-1.229.5-.687 0-1.229-.5ZM7.375 32.625q-.5-.5-.5-1.229 0-.729.5-1.271L9.583 28q.5-.5 1.188-.5.687 0 1.229.5.5.5.5 1.208 0 .709-.5 1.209l-2.125 2.208q-.542.5-1.271.5-.729 0-1.229-.5Z" />
                    </svg>
                </a>
                <a href="#" class="video eclipse hidden" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-trigger="hover" title="Video Mode">
                    <img src="{{ Vite::asset('resources/images/play.png') }}" alt="Play" width="35">
                </a>
            </div>
        </div>
        
        <h1 class="text-5xl title dtxt">TINY TIME</h1>
        <p class="text-lg subtitle dtxt">Time to get organized and be productive.</p>
        <div class="flex flex-col md:flex-row justify-around max-w-lg mx-auto">
           <div class="mt-3">
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="fiveMin">5 min</button>
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="tenMin">10 min</button>
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="fifMin">15 min</button>
           </div>
            <div class="mt-3">
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="tweMin">20 min</button>
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="thiMin">30 min</button>
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="oneHour">1 hr</button>
            </div>
        </div>
        <div class="countdown mt-3 px-10 md:px-0" data-end="September 25, 2022 12:45:58"></div>
        <div class="mt-1">
            <button class="bg-green-700 rounded-lg w-20 py-1 font-normal uppercase disabled:bg-green-900" id="start">Start</button>
            <button class="bg-yellow-500 rounded-lg w-20 py-1 font-normal uppercase" id="pause">Pause</button>
            <button class="bg-blue-700 rounded-lg w-20 py-1 font-normal uppercase" id="reset">Reset</button>
            <button class="bg-red-700 rounded-lg w-20 py-1 font-normal uppercase" id="stop">Stop</button>
        </div>
        <div class="mt-3">
            <button class="bg-gray-500 rounded-lg w-24 py-1 font-normal uppercase" id="counter">Counter</button>
            <button class="bg-green-700 rounded-lg w-24 py-1 font-normal uppercase" id="custom">Custom</button>
            <button class="bg-blue-700 rounded-lg w-24 py-1 font-normal uppercase" id="share">Share</button>
        </div>
        <p class="text-lg mt-2 dtxt">We are adding new features, subscribe to be notified.</p>
        <div class="success_msg"></div>
        <div class="mt-2">
            <form method="post" id="news">
                @csrf
                <label class="flex justify-between border-b pb-3 px-0 w-80 mx-auto">
                    <span class="align-middle text-sm font-medium text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" class="fill-current inline-block"><path d="M6.125 33.333q-1.125 0-1.958-.833-.834-.833-.834-1.958V9.458q0-1.125.834-1.958.833-.833 1.958-.833h27.75q1.125 0 1.958.833.834.833.834 1.958v21.084q0 1.125-.834 1.958-.833.833-1.958.833ZM20 21.042 6.125 12.083v18.459h27.75V12.083Zm0-2.75 13.792-8.834H6.25ZM6.125 12.083V9.458v21.084Z"/></svg>
                    </span>
                    <input id="input" type="email" placeholder="Enter your email here." class="w-10/12 bg-transparent border-0 outline-none px-2 align-middle inline-block text-lg placeholder:text-gray-300 placeholder:text-lg dtxt" name="email" />
                    <span class="input-group-btn">
                        <button class="btn btn-default" id="submit" type="submit" name="submit"><i class="fi flaticon-check dtxt"></i></button>
                    </span>
                </label>
            </form>
        </div>
        <div class="mt-2">
            <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . config('app.url') }}"
                                target="_blank" class="text-xl m-2 dtxt"><i class="fa fa-facebook"></i></a>
            <a href="{{ 'https://twitter.com/share?url=' . config('app.url') }}" target="_blank" class="text-xl m-2"><i
                class="fa fa-twitter dtxt"></i></a>
        </div>
        <div class="mt-1">
            <a href="{{ route('privacy') }}" target="_blank" class="text-lg font-semibold mx-2 dtxt">Privacy
                Policy</a>
            <a href="{{ route('terms') }}" target="_blank" class="text-lg font-semibold mx-2 dtxt">Terms of
                Services</a>
        </div>
    </main>
    {{-- modal 1 --}}
    @include('modals.custom')
    
    {{-- modal 2--}}
    @include('modals.share')
    
    {{-- modal 3 --}}
    @include('modals.sign')
    
    <script src="/vendor/js/jquery.classycountdown.min.js"></script>
    <script src="/vendor/js/jquery.knob.js"></script>
    <script src="/vendor/js/jquery.throttle.js"></script>
    <script src="../vendor/js/main.js"></script>
</body>

</html>
