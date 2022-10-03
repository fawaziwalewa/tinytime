<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>{{ config('app.name') }} - Homepage</title>
    <meta name="description" content="{{ config('app.description') }}">
    <meta name="keywords"
        content="tinytime, time, tiny time, counter, timer, tinytime counter, tinytime timer, tiny time timer, tiny timer counter, time to get organized and be productive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/stopwatch.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Custom Stylesheet -->
    {{-- <link rel="stylesheet" href="../vendor/css/main.css"> --}}
    @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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

<body>
    <section id="wrapper" class="video">
        <video autoplay loop width="100" muted playsinline height="100" id="bgvid">
            <source src="{{ Vite::asset('resources/vendor/video/nature.mp4') }}" type="video/mp4">
        </video>
        <div class="container-fluid animated position-relative" id="home">
            <div class="position-absolute top-0 end-0 mode">
                <a href="#" class="moon eclipse d-none" data-bs-toggle="tooltip" data-bs-placement="left"
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
                <a href="#" class="video eclipse d-none" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-trigger="hover" title="Video Mode">
                    <img src="{{ Vite::asset('resources/images/play.png') }}" alt="Play" width="35">
                </a>
            </div><!-- Brand Logo -->
            <div class="middle-area">
                <div class="row dxa">
                    <div class="col-md-6 mx-auto">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ $message }}</strong> You'll not be able to get updates on new features.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ $message }}</strong> Please subscribe to get updates on new features.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($message = Session::get('invalid_link'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>Oops!</strong> Invalid link, link must have expired or does not exist.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <p class="title">{{ config('app.name') }}</p>
                    <p class="subtitle">Time to get organized and be productive.</p>
                </div> <!-- Title & Subtitle -->

                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-12 text-md-end">
                            <button class="btn btn-success timer-btn" id="fiveMin">5 min</button>
                            <button class="btn btn-success timer-btn" id="tenMin">10 min</button>
                            <button class="btn btn-success timer-btn me-md-0" id="fifMin">15 min</button>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-start mt-md-0 mt-sm-3">
                            <button class="btn btn-success timer-btn ms-md-0" id="tweMin">20 min</button>
                            <button class="btn btn-success timer-btn" id="thiMin">30 min</button>
                            <button class="btn btn-success timer-btn" id="oneHour">1 hr</button>
                        </div>
                    </div>
                </div>
                <div class="countdown" data-end="September 25, 2022 12:45:58"></div>
                <!-- Countdown Timer December 16, 2022 11:13:00-->

                <div class="container mb-1">
                    <div class="text-center">
                        <button class="btn btn-success timer-btn" id="start">START</button>
                        <button class="btn btn-warning timer-btn" id="pause">PAUSE</button>
                        <button class="btn btn-primary timer-btn" id="reset">RESET</button>
                        <button class="btn btn-danger timer-btn" id="stop">STOP</button>
                    </div>
                    <div class="text-center mt-1 dxa">
                        <button class="btn btn-secondary et hundred" id="counter">COUNTER</button>
                        <button class="btn btn-success set-custom-timer hundred" data-bs-toggle="modal"
                            data-bs-target="#customTimer">CUSTOM</button>
                        <button class="btn btn-primary et hundred" data-bs-toggle="modal"
                            data-bs-target="#embedTimer" id="more">SHARE</button>
                    </div>
                </div>


                <div class="row dxa">
                    <div class="subscribe text-center">
                        <p>We are adding new features, subscribe to be notified.</p>

                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 mx-auto">
                            <div class="row">
                                <div class="success_msg"></div>
                                <form method="post" id="news">
                                    @csrf
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <input type="email" class="form-control"
                                            placeholder="Enter your email here" required id="input"
                                            name="email">

                                        <span class="input-group-btn">
                                            <button class="btn btn-default" id="submit" type="submit"
                                                name="submit"><i class="fi flaticon-check"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Subscription -->
            </div>
            <div class="row footer dxa mt-1">

                <div class="col col-sm-push-3">
                    <div class="row text-center">
                        <ul class="list-inline">
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                                <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . config('app.url') }}"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                                <a href="{{ 'https://twitter.com/share?url=' . config('app.url') }}"
                                    target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul><!-- Social Media -->
                    </div>
                </div>

            </div> <!-- Footer -->

            <!-- Page Links -->
            {{-- <a href="#about" class="page-link"><img src="/vendor/images/about-inverse.png" alt=""></a>
			<a href="#reach" class="page-link right"><img src="/vendor/images/reach-inverse.png" alt=""></a> --}}
        </div> <!-- Home Page -->

        {{-- <div class="container-fluid otherpage animated dxa" id="about">


            <div class="container discription">
                <div class="col-md-10 col-md-offset-2 text-center">

                    <h1 class="title">about us</h1>
                    <h6 class="subtitle">Creative by nature, Passionate by design.</h6>
                    <section>
                        <h4>We are a creative team of talented professionals.</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis sem. consequat
                            massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                            justo, rhoncus ut, imperdiet Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                            eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in viverra quis, feugiat
                            a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                        </p>
                        <p>
                            Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus
                            eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                            Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                            tincidunt tempus. nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum
                            sodales.
                        </p>
                    </section>
                    <a href="#" class="closeModal" onclick="closeModal(this, event)">
                        <i class="fi flaticon-circle-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- About Us Page --> --}}

        {{-- <div class="container-fluid otherpage animated d" id="reach">


            <div class="container discription">
                <div class="col-md-10 col-md-offset-2 text-center">

                    <h1 class="title">reach us</h1>
                    <h6 class="subtitle">We are really keen on you.</h6>

                    <section>
                        <h4>If you're interested in working with us, we'd love to hear from you</h4>
                        <div class="row contact-info text-center">
                            <div class="col-sm-4">
                                <i class="fi flaticon-technology"></i>
                                <p>
                                    Office: +1 (875) 2023 7542 <br>
                                    Mobile: +1 (745) 2860 9900
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <i class="fi flaticon-pin"></i>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. tenean uommodo ligula eget
                                    dolor senean.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <i class="fi flaticon-note"></i>
                                <p>
                                    hello@creative-era.com <br>
                                    design@creative-era.com
                                </p>
                            </div>
                        </div>
                    </section>

                    <a href="#" class="closeModal" onclick="closeModal(this, event)">
                        <i class="fi flaticon-circle-1"></i>
                    </a>
                </div>
            </div>
        </div> <!-- Reach Us Page --> --}}
        <!-- Set Custom Timer Modal -->
        <div class="modal fade text-black" id="customTimer" tabindex="-1" aria-labelledby="customTimerLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="customTimerLabel">Custom Timer or Counter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="timer-form">
                            <div class="mb-3">
                                <label for="date" class="col-form-label">Date:</label>
                                <input type="date" class="form-control" id="date"
                                    min="{{ now()->toDateString() }}" value="{{ now()->toDateString() }}" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="hour" class="col-form-label">Hour:</label>
                                        <input type="number" min="1" max="24" value="0"
                                            class="form-control" id="hour" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="minute" class="col-form-label">Minute:</label>
                                        <input type="number" min="1" max="60" value="0"
                                            class="form-control" id="minute" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="second" class="col-form-label">Second:</label>
                                        <input type="number" min="1" max="60" value="0"
                                            class="form-control" id="second" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btnc close-modal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btnc submit-timer">SET TIMER</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Embed Code Modal -->
        <div class="modal fade text-black" id="embedTimer" tabindex="-1" aria-labelledby="embedTimerLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="embedTimerLabel">GET LINK OR EMBED TIMER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('customUrl') }}" id="generateLinkForm">
                            @csrf
                            <div class="message">

                            </div>
                            <div class="mb-3">
                                <label for="date1" class="col-form-label">Date:</label>
                                <input type="date" class="form-control" id="date1" name="date"
                                    min="{{ now()->toDateString() }}" value="{{ now()->toDateString() }}" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="hour1" class="col-form-label">Hour:</label>
                                        <input type="number" min="1" max="24" value="0"
                                            class="form-control" id="hour1" name="hour" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="minute1" class="col-form-label">Minute:</label>
                                        <input type="number" min="1" max="60" value="0"
                                            class="form-control" id="minute1" name="minute" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="second1" class="col-form-label">Second:</label>
                                        <input type="number" min="1" max="60" value="0"
                                            class="form-control" id="second1" name="second" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="timerType" class="col-form-label">Timer Type:</label>
                                <select name="timertype" id="timerType" class="form-select" required>
                                    <option value="0" selected="selected">Timer</option>
                                    <option value="1">Counter</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 d-none" id="generatedLink">
                                <input type="url" class="form-control" placeholder="Generated link"
                                    id="generated_url" aria-label="Generated link" aria-describedby="generatedLink"
                                    value="https://tiny.test/custom-timer/%7Blink_id%7D">
                                <span class="input-group-text bg-primary text-white" role="button">COPY</span>
                            </div>
                            <div class="form-floating d-none" id="emBedLink">
                                <textarea class="form-control" placeholder="" rows="10"><iframe src="https://tiny.test/custom-timer/%7Blink_id%7D" width="100%" height="300"></iframe></textarea>
                                <label for="emBedLink">Embed</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btnc" id="generate_link">GENERATE LINK</button>
                        <button class="btn btn-primary btnc" id="embed_link">EMBED</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Main Wrapper -->
    <script src="/vendor/js/jquery.classycountdown.min.js"></script>
    <script src="/vendor/js/jquery.knob.js"></script>
    <script src="/vendor/js/jquery.throttle.js"></script>
    <script src="../vendor/js/main.js"></script>
    {{-- @vite(['resources/vendor/js/main.js']) --}}
    {{-- 'resources/vendor/js/jquery.throttle.js',
     --}}
</body>

</html>
