<div class="relative rounded-2xl overflow-hidden border-[0.1px] border-white border-opacity-20 -z-10">
    <div class="w-[50px] h-[50px] bg-fuchsia-500 absolute right-0 top-0 -z-10"></div>
    <div class="w-[60px] h-[20px] bg-fuchsia-500 absolute left-0 top-0 -z-10"></div>
    <div class="w-[200px] h-[50px] bg-fuchsia-500 absolute left-[40%] bottom-[10px] -z-10"></div>
    <div class="w-[800px] h-[10px] bg-sky-500 absolute left-[5%] bottom-0 -z-10"></div>
    <div class="w-[400px] h-[20px] bg-blue-600 absolute right-[0] bottom-0 -z-10"></div>

    <div class="flex bg-gray-500/15 items-center relative justify-center backdrop-blur-2xl p-7">
        <div class="focus:outline-none font-bold tracking-widest text-white text-xl flex items-center gap-2">
            <div>
                @if (Request::routeIs('dashboard'))
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>
                @endif
            </div>
            {{ $title }}
        </div>
    </div>
</div>
