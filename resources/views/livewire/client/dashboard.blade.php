@section('title', 'Dashboard')
<div class="flex flex-wrap gap-2 justify-between">
    <div class="rounded border w-full p-4 mt-10 bg-white">
        <h2 class="font-bold text-lg my-4">Your Postings</h2>
        <!-- Tabs -->
        <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
            <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Active (0)</a></li>
            <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Recently Filled</a></li>
        </ul>
        
        <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="p-4 text-center">
                <div class="block m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-20">
                        <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                    </svg>
                </div>            
                <h4>No active job posts</h4>
                <p class="mb-4">Post a job to the marketplace and let talent come to you.</p>
                <a href="{{ route('post-a-job') }}" class="rounded-full bg-blue-300 hover:bg-blue-500 text-white py-2 px-6">Post a Job</a>
            </div>

            <div id="second" class="hidden p-4">
                All past jobs go here.
            </div>
        </div>
    </div>

    <div class="rounded border w-5/12 p-4 mt-10 bg-white">
        <h2 class="font-bold text-lg my-4">Your Drafts</h2>
    </div>

    <div class="rounded border w-5/12 p-4 mt-10 bg-white">
        <h2 class="font-bold text-lg my-4">Your Contracts</h2>
        <div>
            <h5>$0.00</h5>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                </svg>                  
            </span>


            <!-- Component Start -->
	<div class="relative flex flex-col items-center group">
		<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
			<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
		</svg>
		<div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
			<span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">A top aligned tooltip.</span>
			<div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
		</div>
	</div>
	<!-- Component End  -->
            

        </div>
        <p>You have no active contracts. View your <a href="#">ended contracts</a></p>
    </div>
</div>
