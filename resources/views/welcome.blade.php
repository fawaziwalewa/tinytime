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
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="thiMin">25 min</button>
                <button class="bg-green-700 rounded-lg w-20 py-1 font-normal" id="oneHour">30 min</button>
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
    <div class="relative z-10 hidden customModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full justify-center p-4 text-center items-center">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-gray-50 px-6 py-3">
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase" id="modal-title">Custom Timer or Counter</h3>
            </div>
            <form method="post" id="timer-form">
              <div class="bg-white px-6 pb-4">
                  <div class="mt-4">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Date: </span>
                        <input type="date" id="date" min="{{ now()->toDateString() }}" value="{{ now()->toDateString() }}" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                      </label>
                   <div class="flex justify-between">
                        <label class="mt-3 w-1/3">
                            <span class="block text-sm font-medium text-slate-700">Hour: </span>
                            <input type="number" id="hour" min="1" max="24" value="0" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                        <label class="mt-3 w-1/3 mx-3">
                            <span class="block text-sm font-medium text-slate-700">Minute: </span>
                            <input type="number" id="minute" min="1" max="60" value="0" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                        <label class="mt-3 w-1/3">
                            <span class="block text-sm font-medium text-slate-700">Second: </span>
                            <input type="number" id="second" min="1" max="60" value="0" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                   </div>
                  </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm submit-timer">Submit</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close-modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>

    {{-- modal 2--}}
    <div class="relative z-10 hidden shareModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full justify-center p-4 text-center items-center">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-gray-50 px-6 py-3">
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase" id="modal-title">GET LINK OR EMBED TIMER</h3>
            </div>
            <form method="post" action="{{ route('customUrl') }}" id="generateLinkForm">
                @csrf
              <div class="message px-6 pb-4 mt-2"></div>
              <div class="bg-white px-6 pb-4">
                  <div class="">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Name: <span class="text-red-500">*</span></span>
                        <input type="text" id="s_name" placeholder="Enter timer name here." min="4" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                    <label class="block mt-2">
                        <span class="block text-sm font-medium text-slate-700">Description:</span>
                        <input type="text" id="s_description" placeholder="Enter timer description here." class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                    <label class="block mt-2">
                        <span class="block text-sm font-medium text-slate-700">Date: <span class="text-red-500">*</span></span>
                        <input type="date" id="date1" min="{{ now()->toDateString() }}" value="{{ now()->toDateString() }}" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                   <div class="flex justify-between">
                        <label class="mt-3 w-1/3">
                            <span class="block text-sm font-medium text-slate-700">Hour: <span class="text-red-500">*</span></span>
                            <input type="number" id="hour1" min="1" max="24" value="0" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                        <label class="mt-3 w-1/3 mx-3">
                            <span class="block text-sm font-medium text-slate-700">Minute: <span class="text-red-500">*</span></span>
                            <input type="number" id="minute1" min="1" max="60" value="5" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                        <label class="mt-3 w-1/3">
                            <span class="block text-sm font-medium text-slate-700">Second: <span class="text-red-500">*</span></span>
                            <input type="number" id="second1" min="1" max="60" value="0" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                   </div>
                   <div class="mt-3">
                        <label class="block">
                            <span class="block text-sm font-medium text-slate-700">Timer Type: <span class="text-red-500">*</span></span>
                           <p class="text-green-700 cursor-pointer hidden"></p>
                           <p class="text-red-700 cursor-pointer hidden"></p>
                            <fieldset class="flex flex-wrap gap-3 mt-2">
                                <div>
                                  <input
                                    type="radio"
                                    name="timertype"
                                    id="timer_type"
                                    class="peer hidden"
                                    value="0"
                                    checked
                                  />
                              
                                  <label
                                    for="timer_type"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 py-2 px-3 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                                  >
                                    <p class="text-sm font-medium">Timer</p>
                                  </label>
                                </div>
                              
                                <div>
                                  <input
                                    type="radio"
                                    name="timertype"
                                    id="timertype"
                                    value="1"
                                    class="peer hidden"
                                  />
                              
                                  <label
                                    for="timertype"
                                    class="flex cursor-pointer items-center justify-center rounded-md border border-gray-100 py-2 px-3 text-gray-900 hover:border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white"
                                  >
                                    <p class="text-sm font-medium">Counter</p>
                                  </label>
                                </div>
                              </fieldset>                          
                        </label>
                   </div>
                   <div class="mt-3 hidden" id="generatedLink">
                        <label class="block">
                            <span class="block text-sm font-medium text-slate-700">Generated Link: </span>
                            <div class="relative">
                                <input type="text" id="generated_url" value="https://tiny.test/custom-timer/%7Blink_id%7D" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                                <button type="button" id="copy_link" class="absolute right-0 top-0 rounded-r-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white sm:ml-3 sm:w-auto sm:text-sm">COPY</button>
                            </div>
                        </label>
                   </div>
                   <div class="mt-3 hidden" id="emBedLinkDiv">
                        <label class="block">
                            <span class="block text-sm font-medium text-slate-700">Embed Timer: </span>
                            <textarea cols="30" rows="2" id="emBedLink" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"></textarea>
                        </label>
                   </div>
                  </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm" id="get_link">Create</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close-modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>

    {{-- modal 3 --}}
    <div class="relative z-10 hidden signModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      
        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full justify-center p-4 text-center items-center">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg w-full max-w-sm">
            <div class="flex">
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase w-1/2 text-center py-4 cursor-pointer bg-white signInBtn">SignIn</h3>
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase w-1/2 text-center py-4 cursor-pointer bg-gray-50 signUpBtn">SignUp</h3>
            </div>
            <form method="post" id="signform">
                <div class="bg-white px-6 pb-4 signin">
                    <div class="flex justify-center mt-3">
                        <div class="flex gap-2 text-gray-50">
                            <a href="{{ route('google.login') }}" target="_blank">
                                <svg class="fill-current w-10 h-10 bg-red-600 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"/></svg>                        
                            </a>
                            <a href="{{ route('facebook.login') }}" target="_blank">
                                <svg class="fill-current w-10 h-10 bg-blue-600 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            </a>
                            <a href="{{ route('twitter.login') }}" target="_blank">
                                <svg class="fill-current w-10 h-10 bg-sky-400 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                            </a>
                            <a href="{{ route('twitch.login') }}" target="_blank">
                                <svg class="fill-current w-10 h-10 bg-black px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                        <p class="text-center font-semibold mx-4 mb-0">OR</p>
                    </div>
                    <div class="mt-3">
                        <label class="block">
                            <span class="block text-sm font-medium text-slate-700">Email: </span>
                            <input type="text" placeholder="example@yourprovider.com" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                    </div>
                    <div class="mt-3">
                        <label class="block">
                            <span class="block text-sm font-medium text-slate-700">Password: </span>
                            <input type="text" placeholder="********" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                        </label>
                    </div>
                </div>
              <div class="bg-white px-6 pb-4 signup hidden">
                <div class="flex justify-center mt-3">
                    <div class="flex gap-2 text-gray-50">
                        <a href="{{ route('google.login') }}" target="_blank">
                            <svg class="fill-current w-10 h-10 bg-red-600 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"/></svg>                        
                        </a>
                        <a href="{{ route('facebook.login') }}" target="_blank">
                            <svg class="fill-current w-10 h-10 bg-blue-600 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                        </a>
                        <a href="{{ route('twitter.login') }}" target="_blank">
                            <svg class="fill-current w-10 h-10 bg-sky-400 px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                        </a>
                        <a href="{{ route('twitch.login') }}" target="_blank">
                            <svg class="fill-current w-10 h-10 bg-black px-2 py-3 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                    <p class="text-center font-semibold mx-4 mb-0">OR</p>
                </div>
                <div class="mt-3">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Name: </span>
                        <input type="text" placeholder="Enter your name here." class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                </div>
                <div class="mt-3">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Email: </span>
                        <input type="text" placeholder="example@yourprovider.com" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                </div>
                <div class="mt-3">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Password: </span>
                        <input type="text" placeholder="********" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                </div>
                <div class="mt-3">
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Confirm Password: </span>
                        <input type="text" placeholder="********" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"/>
                    </label>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" disabled class="cursor-not-allowed disabled:opacity-75 inline-flex w-full justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close-modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
    <script src="/vendor/js/jquery.classycountdown.min.js"></script>
    <script src="/vendor/js/jquery.knob.js"></script>
    <script src="/vendor/js/jquery.throttle.js"></script>
    <script src="../vendor/js/main.js"></script>
</body>

</html>
