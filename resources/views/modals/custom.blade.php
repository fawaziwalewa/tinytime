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