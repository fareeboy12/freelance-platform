@section('title', 'Post a new Job')
<div>
    <div class="rounded border w-full p-4 mt-10 bg-white">
        <h2>Getting started</h2>
        <div>
            <h3>What would you like to do?</h3>
            <div class="flex flex-col">
                <div class="w-full px-4 py-4">
                  <label class="block text-sm font-medium text-gray-700">Create a new job post</label>
                  <div class="flex flex-row gap-4">
                    <div class="flex items-center">
                      <input type="radio" name="job_type" id="short_term_work" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                      <label for="short_term_work" class="ml-2 text-sm font-medium text-gray-900">Short term or part time work</label>
                    </div>
                    <div class="flex items-center">
                      <input type="radio" name="job_type" id="longer_term_work" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                      <label for="longer_term_work" class="ml-2 text-sm font-medium text-gray-900">Longer term work</label>
                    </div>
                  </div>
                </div>
            </div>

            <h5 class="mt-5">Write a title for your job post</h5>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            
            <h5 class="mt-5">Search or add up to 10 skills</h5>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            <div class="mt-2">
                <h6>Selected skills</h6>
                <span id="badge-dismiss-default" class="rounded-full inline-flex items-center  mt-2 px-4 py-1 mr-2 text-sm font-medium text-slate-500 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300">
                    Java
                    <button type="button" class="inline-flex items-center p-1 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
                      <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Remove badge</span>
                    </button>
                </span>
                <span id="badge-dismiss-default" class="rounded-full inline-flex items-center  mt-2 px-4 py-1 mr-2 text-sm font-medium text-slate-500 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300">
                    Graphic Design
                    <button type="button" class="inline-flex items-center p-1 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
                      <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Remove badge</span>
                    </button>
                </span>
                <span id="badge-dismiss-default" class="rounded-full inline-flex items-center  mt-2 px-4 py-1 mr-2 text-sm font-medium text-slate-500 bg-blue-100 rounded dark:bg-blue-900 dark:text-blue-300">
                    Adobe Photoshop
                    <button type="button" class="inline-flex items-center p-1 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-800 dark:hover:text-blue-300" data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
                      <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Remove badge</span>
                    </button>
                </span>
            </div>

            <h5 class="mt-8 mb-3">Estimate the scope of your work</h5>
            <div class="flex items-center mb-4">
                <input id="large" type="radio" value="" name="scope" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="large" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Large<span class="block">Longer term or complex initiatives (ex. develop and execute a brand strategy (i.e., graphics, positioning))</span></label>
            </div>
            <div class="flex items-center mb-4">
                <input id="medium" type="radio" value="" name="scope" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="medium" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medium<span class="block">Well-defined projects (ex. design business rebrand package (i.e., logos, icons))</span></label>
            </div>
            <div class="flex items-center">
                <input id="small" type="radio" value="" name="scope" class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="small" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Small<span class="block">Quick and straightforward tasks (ex. create logo for a new product)</span></label>
            </div>

            <h5 class="mt-8 mb-3">Tell us about your budget</h5>
            <input type="text" placeholder="Maximum project budget (USD)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            
            <h5 class="mt-8 mb-3">Describe what you need</h5>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

            <button class="rounded-full bg-blue-300 hover:bg-blue-500 text-white py-2 px-6 mt-10">Publish Job</button>
        </div>
    </div>
</div>
