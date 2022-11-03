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