<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/stopwatch.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <!-- Countdown Stylesheet -->
    <link rel="stylesheet" href="/vendor/css/jquery.classycountdown.min.css">

    <!-- Animate Stylesheet
            <link rel="stylesheet" href="/vendor/css/animate.css">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/vendor/css/main.css">
    @vite(['resources/js/app.js'])

    <script src="/vendor/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    {{-- Moment.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
</head>

<body>

    <section id="wrapper" class="black">

        <div class="container-fluid animated" id="home">
            <div class="middle-area">
                <div class="countdown" data-end="{{$date}}"></div>

                <!-- Countdown Timer December 16, 2022 11:13:00-->
            </div>
        </div>
        <script src="/vendor/js/jquery.custom_classycountdown.min.js"></script>
        <script src="/vendor/js/jquery.knob.js"></script>
        <script src="/vendor/js/jquery.throttle.js"></script>
        {{-- <script src="/vendor/js/main.js"></script> --}}
        <script>
            var end = $('.countdown').data('end');
            var date = new Date(end.replace(/-/g, "/"));
            var sec = (date.getTime() - $.now()) / 1000;

            /* Countdown Activation */
            var timer = $('.countdown').ClassyCountdown({
                theme: "flat-colors",
                end: $.now() + sec,
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
                var local = moment.utc("{{$created_at}}").local().format('YYYY-MM-DD HH:mm:ss');
                timer.startCounter(local)
            @endif
        </script>
</body>

</html>
