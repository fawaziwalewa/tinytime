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