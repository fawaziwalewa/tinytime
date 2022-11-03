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

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <style>
        header{
            background-image: url('{{ Vite::asset("resources/images/thanks-giving-bg.png") }}');
        }
    </style>
</head>
<body class="flex flex-col items-center min-h-screen relative mb-0 overflow-x-hidden">
    <header class="w-full text-white text-center py-5 relative bg-cover bg-no-repeat md:bg-repeat md:bg-contain">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-5xl text-thanks-giving-secondary font-sacramento">Tiny Time</h1>
            <h2 class="text-thanks-giving-secondary">Time to get organized and be productive.</h2>
            <div class="flex items-center mt-3 px-10 md:px-5">
                <div class="bg-thanks-giving-secondary w-10 md:h-44 h-24 rounded-l"></div>
                <div class="w-full border border-thanks-giving-border bg-thanks-giving-trans rounded-lg drop-shadow-sm">
                    <div class="flex flex-col md:flex-row justify-around max-w-lg mx-auto header md:py-4 pb-4">
                        <div class="mt-3 md:mt-0 sm:px-0 px-1">
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="fiveMin">5 min</button>
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="tenMin">10 min</button>
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="fifMin">15 min</button>
                        </div>
                         <div class="mt-3 md:mt-0 sm:px-0 px-1">
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="tweMin">20 min</button>
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="thiMin">30 min</button>
                             <button class="bg-thanks-giving-secondary rounded-lg sm:w-20 w-16 py-1 font-normal" id="oneHour">1 hr</button>
                         </div>
                     </div>
                    <div class="body md:text-7xl sm:text-4xl text-3xl text-thanks-giving-secondary md:py-12 py-4 border-t border-b border-thanks-giving-border">
                        <span class="Countdown-days">125</span> :
                        <span class="Countdown-hours">24</span> :
                        <span class="Countdown-minutes">45</span> :
                        <span class="Countdown-seconds">60</span>
                    </div>
                    <div class="max-w-md mx-auto md:flex py-4 px-2">
                        <div class="flex justify-around mt-2 md:w-1/2">
                            {{-- Play Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="start" class="w-7 cursor-pointer" viewBox="0 0 43 46" fill="none">
                                    <path d="M37.8008 15.3305L13.1118 1.17136C11.7758 0.399922 10.2595 -0.00420426 8.71681 3.29803e-05C7.17412 0.00427022 5.66004 0.41672 4.32834 1.19549C2.99665 1.97426 1.89479 3.0916 1.13467 4.43403C0.374553 5.77646 -0.0167353 7.29615 0.000548758 8.83875V37.2592C0.000548758 39.5774 0.921453 41.8007 2.56067 43.4399C4.1999 45.0791 6.42316 46 8.74137 46C10.276 45.9974 11.783 45.592 13.1118 44.8243L37.8008 30.6652C39.1274 29.8974 40.2287 28.7943 40.9944 27.4665C41.7601 26.1387 42.1632 24.6328 42.1632 23.1001C42.1632 21.5673 41.7601 20.0615 40.9944 18.7337C40.2287 17.4058 39.1274 16.3027 37.8008 15.5349V15.3305ZM35.245 26.0392L10.556 40.4028C10.0026 40.7164 9.37742 40.8813 8.74137 40.8813C8.10531 40.8813 7.48012 40.7164 6.92675 40.4028C6.37495 40.0842 5.91674 39.626 5.59821 39.0742C5.27967 38.5223 5.11203 37.8964 5.11214 37.2592V8.73652C5.11203 8.09935 5.27967 7.47338 5.59821 6.92155C5.91674 6.36972 6.37495 5.91147 6.92675 5.59289C7.4824 5.28404 8.10573 5.11723 8.74137 5.10729C9.37656 5.12033 9.99917 5.28694 10.556 5.59289L35.245 19.8542C35.797 20.1727 36.2554 20.6309 36.5741 21.1827C36.8928 21.7345 37.0606 22.3606 37.0606 22.9978C37.0606 23.6351 36.8928 24.2612 36.5741 24.813C36.2554 25.3648 35.797 25.823 35.245 26.1415V26.0392Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Play</span>
                            </div>
                            {{-- Pause Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="pause" class="w-7 cursor-pointer" viewBox="0 0 46 46" fill="none">
                                    <path d="M18.4 11.5C17.79 11.5 17.205 11.7423 16.7737 12.1737C16.3423 12.605 16.1 13.19 16.1 13.8V32.2C16.1 32.81 16.3423 33.395 16.7737 33.8263C17.205 34.2577 17.79 34.5 18.4 34.5C19.01 34.5 19.595 34.2577 20.0264 33.8263C20.4577 33.395 20.7 32.81 20.7 32.2V13.8C20.7 13.19 20.4577 12.605 20.0264 12.1737C19.595 11.7423 19.01 11.5 18.4 11.5ZM23 0C18.451 0 14.0042 1.34893 10.2219 3.8762C6.43956 6.40347 3.4916 9.99558 1.75078 14.1983C0.00996553 18.401 -0.445511 23.0255 0.441949 27.4871C1.32941 31.9486 3.51995 36.0468 6.73655 39.2634C9.95316 42.48 14.0514 44.6706 18.5129 45.558C22.9745 46.4455 27.599 45.99 31.8017 44.2492C36.0044 42.5084 39.5965 39.5604 42.1238 35.7781C44.6511 31.9958 46 27.549 46 23C46 19.9796 45.4051 16.9888 44.2492 14.1983C43.0934 11.4078 41.3992 8.87229 39.2635 6.73654C37.1277 4.6008 34.5922 2.90663 31.8017 1.75077C29.0112 0.594912 26.0204 0 23 0ZM23 41.4C19.3608 41.4 15.8034 40.3208 12.7775 38.299C9.75165 36.2772 7.39328 33.4035 6.00063 30.0414C4.60797 26.6792 4.24359 22.9796 4.95356 19.4103C5.66353 15.8411 7.41596 12.5625 9.98924 9.98923C12.5625 7.41595 15.8411 5.66352 19.4103 4.95355C22.9796 4.24358 26.6792 4.60796 30.0414 6.00062C33.4035 7.39327 36.2772 9.75164 38.299 12.7775C40.3209 15.8034 41.4 19.3608 41.4 23C41.4 27.88 39.4614 32.5601 36.0108 36.0108C32.5601 39.4614 27.88 41.4 23 41.4ZM27.6 11.5C26.99 11.5 26.405 11.7423 25.9737 12.1737C25.5423 12.605 25.3 13.19 25.3 13.8V32.2C25.3 32.81 25.5423 33.395 25.9737 33.8263C26.405 34.2577 26.99 34.5 27.6 34.5C28.21 34.5 28.795 34.2577 29.2263 33.8263C29.6577 33.395 29.9 32.81 29.9 32.2V13.8C29.9 13.19 29.6577 12.605 29.2263 12.1737C28.795 11.7423 28.21 11.5 27.6 11.5Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Pause</span>
                            </div>
                            {{-- Reset Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="reset" class="w-7 cursor-pointer" viewBox="0 0 45 46" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3431 9.55722C34.4319 7.62746 32.074 6.08432 29.3527 5.10572C19.5296 1.57304 8.67478 6.7275 5.12403 16.6009C1.57339 26.4742 6.6592 37.3614 16.4824 40.894C23.1524 43.2927 30.2989 41.6849 35.3106 37.3162C36.4366 36.3347 37.4549 35.2137 38.3357 33.9672C39.3082 32.5909 40.113 31.0618 40.7111 29.3989C41.0838 28.3623 42.2281 27.8233 43.2647 28.1961C44.3013 28.5689 44.8402 29.7131 44.4674 30.7497C43.7446 32.7596 42.7711 34.6075 41.5958 36.2708C40.5294 37.7799 39.2968 39.1371 37.9337 40.3253C31.8646 45.6157 23.2088 47.5551 15.1316 44.6503C3.24048 40.374 -2.9304 27.2019 1.36771 15.25C5.66593 3.29821 18.8126 -2.92687 30.7036 1.34939C34.5423 2.72987 37.7845 5.03726 40.2709 7.93084L44.5101 6.17553L43.5593 19.5307L33.4457 10.757L36.3431 9.55722ZM20.9217 16.262L20.782 29.6962C20.7706 30.7977 21.6555 31.7013 22.7571 31.7127C23.8586 31.7242 24.7622 30.8392 24.7737 29.7377L24.9134 16.3036C24.9249 15.2021 24.0399 14.2984 22.9383 14.2871C21.8368 14.2756 20.9332 15.1606 20.9217 16.262Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Pause</span>
                            </div>
                            {{-- Stop Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="stop" class="w-7 cursor-pointer" viewBox="0 0 46 46" fill="none">
                                    <path d="M23 0C10.2982 0 0 10.2982 0 23C0 35.7018 10.2982 46 23 46C35.7018 46 46 35.7018 46 23C46 10.2982 35.7018 0 23 0ZM31.625 28.75C31.625 29.5125 31.3221 30.2438 30.7829 30.7829C30.2438 31.3221 29.5125 31.625 28.75 31.625H17.25C16.4875 31.625 15.7562 31.3221 15.2171 30.7829C14.6779 30.2438 14.375 29.5125 14.375 28.75V17.25C14.375 16.4875 14.6779 15.7562 15.2171 15.2171C15.7562 14.6779 16.4875 14.375 17.25 14.375H28.75C29.5125 14.375 30.2438 14.6779 30.7829 15.2171C31.3221 15.7562 31.625 16.4875 31.625 17.25V28.75Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Stop</span>
                            </div>
                        </div>
                       <div class="flex justify-around mt-2 md:w-1/2">
                            {{-- Timer Type Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="counter" class="w-7 cursor-pointer" viewBox="0 0 50 46" fill="none">
                                    <path d="M49.3223 22.9593C49.3225 27.8102 47.7916 32.5375 44.9478 36.4673C42.104 40.3972 38.0923 43.3292 33.4845 44.8455C28.8767 46.3618 23.9078 46.385 19.286 44.9119C14.6642 43.4387 10.6253 40.5444 7.74482 36.6413L10.5982 34.5323C13.2013 38.0677 16.9217 40.621 21.1568 41.7786C25.3919 42.9362 29.8937 42.6303 33.9333 40.9105C37.9729 39.1906 41.3137 36.1576 43.4147 32.3025C45.5157 28.4474 46.2539 23.996 45.5097 19.669C44.7655 15.3421 42.5826 11.3931 39.3143 8.46141C36.0461 5.52975 31.8839 3.78712 27.5019 3.51572C23.1198 3.24433 18.7745 4.46005 15.1695 6.96603C11.5645 9.47201 8.91089 13.1215 7.63848 17.3235L9.41075 16.1715L11.3957 19.1135L6.07889 22.6581C5.76561 22.8693 5.39303 22.9748 5.01552 22.9593C4.72522 22.9598 4.43926 22.8889 4.18276 22.7529C3.92627 22.617 3.70711 22.4201 3.54454 22.1795L0 16.8627L2.94197 14.8778L4.14711 16.6501C5.68478 11.323 9.09194 6.72908 13.7434 3.71137C18.3948 0.693672 23.9785 -0.545406 29.4697 0.22152C34.961 0.988446 39.9915 3.70993 43.6382 7.88656C47.2848 12.0632 49.303 17.4148 49.3223 22.9593ZM24.5105 10.5535V22.9593C24.5091 23.1926 24.5539 23.4238 24.642 23.6397C24.7302 23.8557 24.8602 24.0521 25.0245 24.2177L30.3413 29.5345L32.8579 27.0178L28.055 22.2327V10.5535H24.5105Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext countup">CountUp</span>
                            </div>
                            {{-- Add Custom Timer Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="custom" class="w-7 cursor-pointer" viewBox="0 0 46 46" fill="none">
                                    <g clip-path="url(#clip0_44_386)">
                                    <path d="M23 0C18.451 0 14.0042 1.34893 10.2219 3.8762C6.43956 6.40347 3.4916 9.99558 1.75078 14.1983C0.00996558 18.401 -0.445511 23.0255 0.441949 27.4871C1.32941 31.9486 3.51995 36.0468 6.73655 39.2635C9.95316 42.4801 14.0514 44.6706 18.5129 45.5581C22.9745 46.4455 27.599 45.99 31.8017 44.2492C36.0044 42.5084 39.5965 39.5604 42.1238 35.7781C44.6511 31.9958 46 27.549 46 23C46 16.9 43.5768 11.0499 39.2635 6.73654C34.9501 2.42321 29.1 0 23 0V0ZM23 42.1667C19.2092 42.1667 15.5035 41.0426 12.3516 38.9365C9.19964 36.8304 6.743 33.837 5.29232 30.3348C3.84164 26.8325 3.46208 22.9787 4.20163 19.2608C4.94118 15.5428 6.76662 12.1276 9.44713 9.44712C12.1276 6.76661 15.5428 4.94117 19.2608 4.20162C22.9787 3.46207 26.8325 3.84163 30.3348 5.29231C33.837 6.74299 36.8304 9.19963 38.9365 12.3516C41.0426 15.5035 42.1667 19.2092 42.1667 23C42.1667 28.0833 40.1473 32.9584 36.5529 36.5529C32.9584 40.1473 28.0833 42.1667 23 42.1667Z" fill="#6C370B"/>
                                    <path d="M24.9167 11.5H21.0833V21.0833H11.5V24.9167H21.0833V34.5H24.9167V24.9167H34.5V21.0833H24.9167V11.5Z" fill="#6C370B"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_44_386">
                                    <rect width="46" height="46" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                <span class="tooltiptext">Custom</span>
                            </div>
                            {{-- Share Timer Icon --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" id="share" class="w-7 cursor-pointer" viewBox="0 0 46 46" fill="none">
                                    <path d="M45.3559 15.8226L28.1067 0.489953C27.8312 0.24242 27.4897 0.0801936 27.1238 0.0229698C26.7579 -0.034254 26.3832 0.0159866 26.0453 0.167592C25.7074 0.319197 25.4208 0.565645 25.2202 0.877014C25.0197 1.18838 24.9138 1.55128 24.9156 1.92164V8.06812C19.1581 9.61288 0 16.8039 0 44.0864C0.000701725 44.5314 0.156194 44.9622 0.439809 45.3051C0.723424 45.6479 1.11749 45.8814 1.55442 45.9655C1.99135 46.0495 2.44392 45.979 2.83452 45.7659C3.22511 45.5528 3.52939 45.2104 3.69517 44.7975C9.37783 30.5899 20.4557 27.6249 24.9136 27.0059V32.5869C24.9133 32.957 25.02 33.3192 25.2209 33.6298C25.4219 33.9405 25.7085 34.1864 26.0461 34.3378C26.3837 34.4892 26.7579 34.5396 27.1236 34.483C27.4892 34.4263 27.8307 34.2651 28.1067 34.0186L45.3559 18.686C45.5579 18.5062 45.7196 18.2856 45.8303 18.0389C45.9411 17.7921 45.9983 17.5247 45.9983 17.2543C45.9983 16.9838 45.9411 16.7164 45.8303 16.4697C45.7196 16.2229 45.5579 16.0024 45.3559 15.8226Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Share</span>
                            </div>
                            {{-- Keep design balance --}}
                            <div class="tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 md:block md:invisible hidden cursor-pointer" viewBox="0 0 46 46" fill="none">
                                    <path d="M45.3559 15.8226L28.1067 0.489953C27.8312 0.24242 27.4897 0.0801936 27.1238 0.0229698C26.7579 -0.034254 26.3832 0.0159866 26.0453 0.167592C25.7074 0.319197 25.4208 0.565645 25.2202 0.877014C25.0197 1.18838 24.9138 1.55128 24.9156 1.92164V8.06812C19.1581 9.61288 0 16.8039 0 44.0864C0.000701725 44.5314 0.156194 44.9622 0.439809 45.3051C0.723424 45.6479 1.11749 45.8814 1.55442 45.9655C1.99135 46.0495 2.44392 45.979 2.83452 45.7659C3.22511 45.5528 3.52939 45.2104 3.69517 44.7975C9.37783 30.5899 20.4557 27.6249 24.9136 27.0059V32.5869C24.9133 32.957 25.02 33.3192 25.2209 33.6298C25.4219 33.9405 25.7085 34.1864 26.0461 34.3378C26.3837 34.4892 26.7579 34.5396 27.1236 34.483C27.4892 34.4263 27.8307 34.2651 28.1067 34.0186L45.3559 18.686C45.5579 18.5062 45.7196 18.2856 45.8303 18.0389C45.9411 17.7921 45.9983 17.5247 45.9983 17.2543C45.9983 16.9838 45.9411 16.7164 45.8303 16.4697C45.7196 16.2229 45.5579 16.0024 45.3559 15.8226Z" fill="#6C370B"/>
                                </svg>
                                <span class="tooltiptext">Keep Balance</span>
                            </div>
                       </div>
                    </div>
                </div> 
                <div class="bg-thanks-giving-secondary w-10 md:h-44 h-24 rounded-r"></div>
            </div>
        </div>
    </header>
    <footer class="w-full text-thanks-giving-primary bg-thanks-giving-secondary py-10 px-10 md:px-5">
        <div class="max-w-lg mx-auto bg-thanks-giving-linear border-2 border-thanks-giving-primary rounded-2xl drop-shadow text-center px-10 py-7">
            <p class="text-xl">We are adding new features, subscribe to
                be notified.</p>
            <div class="relative mt-3 drop-shadow-lg">
                <form method="post" id="news">
                    @csrf
                    <input type="email" placeholder="example@gmail.com" id="input" name="email" class="w-full relative rounded-full px-5 py-2 bg-thanks-giving-primary placeholder:text-thanks-giving-secondary text-thanks-giving-secondary outline-none">
                    <span class="absolute top-0 -right-1 p-3 bg-thanks-giving-secondary rounded-r-full rounded-bl-full cursor-pointer" id="send_news">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 48 44" fill="none">
                            <path d="M1.01405 24.3233L10.9928 30.8392V41.7293C10.9321 43.6885 13.5141 44.7822 14.8811 43.3392L20.8957 37.3246L29.31 42.8228C29.6897 43.0659 30.1151 43.2025 30.5555 43.2025C31.4972 43.2025 32.3781 42.595 32.6971 41.7141L46.9589 3.04442C47.0652 2.74072 47.1109 2.42174 47.0652 2.11794C47.0045 0.538377 45.2578 -0.448898 43.8301 0.204187L1.28744 20.3592C-0.292123 21.0427 -0.45918 23.4273 1.01405 24.3233ZM33.8969 9.95519L15.5038 28.3483L6.90716 22.7286L33.8969 9.95519Z" fill="#F9E2C3"/>
                        </svg>
                    </span>
                    <p class="mt-2 hidden text-red-500 font-bold" id="error">
                        Please provide a valid email address.
                    </p>
                    <div class="success_msg"></div>
                    <p class='mt-2 text-green-700 font-bold hidden cursor-pointer removeElem'><strong>Your Request was successfully sent.</strong> Thank you!</p>
                </form>
            </div>
            <div class="mt-4">
                <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . config('app.url') }}"
                                    target="_blank" class="text-2xl m-2"><i class="fa fa-facebook"></i></a>
                <a href="{{ 'https://twitter.com/share?url=' . config('app.url') }}" target="_blank" class="text-2xl m-2"><i
                    class="fa fa-twitter"></i></a>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('privacy') }}" target="_blank" class="text-lg font-semibold mx-2">Privacy
                Policy</a>
            <a href="{{ route('terms') }}" target="_blank" class="text-lg font-semibold mx-2">Terms of
                Services</a>
        </div>
    </footer>
     {{-- modal 1 --}}
     @include('modals.custom')
    
     {{-- modal 2--}}
     @include('modals.share')
     
     {{-- modal 3 --}}
     @include('modals.sign')

     <script src="/vendor/js/thanks-giving.js"></script>
    <script src="/vendor/js/jquery.knob.js"></script>
    <script src="/vendor/js/jquery.throttle.js"></script>
    <script src="../vendor/js/main.js"></script>
</body>