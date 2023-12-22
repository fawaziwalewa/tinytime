<div class="relative z-[100] hidden signModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-center justify-center min-h-full p-4 text-center">
            <div
                class="relative w-full max-w-sm overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                <div class="flex">
                    <h3
                        class="w-1/2 py-4 text-lg font-medium leading-6 text-center text-gray-900 uppercase bg-white cursor-pointer signInBtn">
                        SignIn</h3>
                    <h3
                        class="w-1/2 py-4 text-lg font-medium leading-6 text-center text-gray-900 uppercase cursor-pointer bg-gray-50 signUpBtn">
                        SignUp</h3>
                </div>
                <div class="px-6 pb-4 bg-white signin active">
                    <div class="flex justify-center mt-3">
                        <div class="flex gap-2 text-gray-50">
                            <a href="{{ route('google.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-red-600 rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" />
                                </svg>
                            </a>
                            <a href="{{ route('facebook.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-blue-600 rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                </svg>
                            </a>
                            {{-- <a href="{{ route('twitter.login') }}" target="_blank">
                            <svg class="w-10 h-10 px-2 py-3 rounded-full fill-current bg-sky-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                        </a> --}}
                            <a href="{{ route('twitch.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-black rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                        <p class="mx-4 mb-0 font-semibold text-center">OR</p>
                    </div>
                    <div>
                        @livewire('auth.login')
                    </div>
                </div>
                <div class="hidden px-6 pb-4 bg-white signup">
                    <div class="flex justify-center mt-3">
                        <div class="flex gap-2 text-gray-50">
                            <a href="{{ route('google.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-red-600 rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" />
                                </svg>
                            </a>
                            <a href="{{ route('facebook.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-blue-600 rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                </svg>
                            </a>
                            {{-- <a href="{{ route('twitter.login') }}" target="_blank">
                        <svg class="w-10 h-10 px-2 py-3 rounded-full fill-current bg-sky-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                    </a> --}}
                            <a href="{{ route('twitch.login') }}" target="_blank">
                                <svg class="w-10 h-10 px-2 py-3 bg-black rounded-full fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                        <p class="mx-4 mb-0 font-semibold text-center">OR</p>
                    </div>
                    <div>
                        @livewire('auth.register')
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" id="signSubmit"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                    <button type="button"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close-modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
