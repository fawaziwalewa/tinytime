<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/images/stopwatch.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script
      src="https://cdn.rawgit.com/mckamey/countdownjs/master/countdown.min.js"
      type="text/javascript"
    ></script>
</head>

<body class="">
    <section id="wrapper" class="black min-h-screen flex flex-col justify-center items-center relative">
        <div class="container-fluid animated my-4" id="home">
            <div class="middle-area">
                <div class="row">
                    <h1 class="title">{{ config('app.name') }}</h1>
                    <p class="subtitle">Time to get organized and be productive.</p>
                </div>
                <div class="countdown" data-end="{{ $date }}"></div>
            </div>
        </div>
        <p class="text-white absolute bottom-3 right-6">Powered by {{config('app.name')}}</p>
    </section>
        <script src="/vendor/js/jquery.custom_classycountdown.min.js"></script>
        <script src="/vendor/js/jquery.knob.js"></script>
        <script src="/vendor/js/jquery.throttle.js"></script>
        {{-- <script src="/vendor/js/main.js"></script> --}}
        <script>
            $(document).ready(function() {
                var end = $('.countdown').data('end');
                var date = new Date(end.replace(/-/g, "/"));
                var sec = (date.getTime() - new Date().getTime()) / 1000;
                /* Countdown Activation */
                var timer = $('.countdown').ClassyCountdown({
                    theme: "flat-colors",
                    end: end,//new Date().getTime() + sec,
                    labelsOptions: {
                        lang: {
                            days: 'DAYS',
                            hours: 'hours',
                            minutes: 'mins',
                            seconds: 'secs'
                        },
                        style: 'font-size:10px; text-transform:uppercase; font-family: Roboto; font-weight: 400;'
                    },
                    style: {
                        days: {
                            gauge: {
                                thickness: 0.22,
                                bgColor: "rgba(22, 34, 0, 0.8)",
                                fgColor: "#a4ff00",
                                fgLast: "#bafc00",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Roboto\';font-weight:400;color:#fff;font-size: 60px;'
                        },
                        hours: {
                            gauge: {
                                thickness: 0.22,
                                bgColor: "rgba(12, 40, 40, .8)",
                                fgColor: "#65f9ed",
                                fgLast: "#24cad9",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Roboto\';font-weight:400;color:#fff;font-size: 60px;'
                        },
                        minutes: {
                            gauge: {
                                thickness: 0.22,
                                bgColor: "rgba(52, 9, 20, .8)",
                                fgColor: "#ff1415",
                                fgLast: "#fd08a8",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Roboto\';font-weight:400;color:#fff;font-size: 60px;'
                        },
                        seconds: {
                            gauge: {
                                thickness: 0.22,
                                bgColor: "rgba(39, 28, 1, .8)",
                                fgColor: "#ffbf00",
                                fgLast: "#ff6e00",
                                lineCap: 'round'
                            },
                            textCSS: 'font-family:\'Roboto\';font-weight:400;color:#fff;font-size: 60px;'
                        }
                    }
                });
                @if ($timer_type == 0)
                    timer.startTimer()
                @elseif ($timer_type == 1)
                    timer.startCounter("{{ $created_at }}")
                @endif
            });
        </script>
</body>

</html>
