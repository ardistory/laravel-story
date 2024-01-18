<div>
    <div class="font-semibold text-md px-4 py-4 flex items-center justify-between gap-2 border-b-[1px]">
        <div class="flex items-center gap-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
            Add Mac
        </div>
        @if (session('connected'))
            <div class="flex items-center gap-2">
                <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                    <div class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping absolute">
                    </div>
                    <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                </div>
                <p class="text-xs leading-5 text-white">Online</p>
            </div>
        @endif
        @if (session('successInsertMac'))
            <div class="flex items-center gap-2 justify-between">
                <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                    <div class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping absolute">
                    </div>
                    <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                </div>
                <p class="text-xs leading-5 text-white flex items-center justify-between gap-1">
                    {{ session('successInsertMac') }}
                </p>
            </div>
        @endif
        @if (session('error'))
            <div class="flex items-center gap-2">
                <div class="flex-none rounded-full bg-red-500/20 p-1">
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500 animate-ping absolute">
                    </div>
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500"></div>
                </div>
                <p class="text-xs leading-5 text-white">Offline</p>
            </div>
        @endif
        @if (session('failedInsertMac'))
            <div class="flex items-center gap-2">
                <div class="flex-none rounded-full bg-red-500/20 p-1">
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500 animate-ping absolute">
                    </div>
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500"></div>
                </div>
                <p class="text-xs leading-5 text-white">Insert Failed</p>
            </div>
        @endif
        @if (session('thereIs'))
            <div class="flex items-center gap-2">
                <div class="flex-none rounded-full bg-red-500/20 p-1">
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500 animate-ping absolute">
                    </div>
                    <div class="h-1.5 w-1.5 rounded-full bg-red-500"></div>
                </div>
                <p class="text-xs leading-5 text-white">has been registered!</p>
            </div>
        @endif
    </div>
    <div class="w-full h-[130px] flex items-center justify-center gap-2">
        <div class="flex gap-2 bg-gray-100 p-1 rounded-full">
            <div class="flex items-center">
                <div class="bg-white text-black px-2 py-1 rounded-l-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                    </svg>
                </div>
                <input wire:model='macAddress'
                    class="outline-none py-1 px-2 rounded-r-full text-black hover:ring hover:ring-teal-500 transition duration-150"
                    type="text" placeholder="Mac address">
            </div>
            <button wire:click='insertMacAddress' type="submit"
                class="bg-white text-black border border-gray-200 px-1 py-1 rounded-full hover:ring hover:ring-teal-500 transition duration-150">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
            </button>
        </div>
    </div>
</div>
