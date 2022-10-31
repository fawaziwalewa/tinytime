<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/images/stopwatch.png') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    @vite(['resources/js/app.js', 'resources/vendor/css/main.css', 'resources/vendor/css/jquery.classycountdown.min.css'])
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdn.rawgit.com/mckamey/countdownjs/master/countdown.min.js" type="text/javascript"></script>
</head>

<body class="bg-black flex justify-center items-center min-h-screen relative">
    <main class="w-full max-w-5xl text-white text-center my-5 relative">
        <h1 class="text-4xl title uppercase">{{$name}}</h1>
        <p class="text-lg subtitle">{{$description}}</p>
        <div class="countdown" data-end="{{ $date }}"><a href="{{config('app.url')}}" class="text-white absolute -bottom-6 right-48 mb-2" target="_blank">Powered by {{config('app.name')}}</a></div>
    </main>
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
                end: end, //new Date().getTime() + sec,
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
