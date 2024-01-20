<div>
    <div class="flex items-center justify-between border-b-[1px]">
        <div class="w-full font-semibold text-md px-4 py-4 flex items-center justify-between gap-2">
            <div class="flex gap-2 items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                </div>
                List Mac
            </div>
            @if (session('counted'))
                <div wire:loading.remove>Count : {{ session('counted') }}</div>
            @endif
            <div wire:loading class="flex items-center justify-center">
                <div>
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </div>
            </div>
            @if (session('listMacFailed'))
                <div wire:loading.remove class="flex items-center gap-2">
                    <div class="flex-none rounded-full bg-red-500/20 p-1">
                        <div class="h-1.5 w-1.5 rounded-full bg-red-500 animate-ping absolute">
                        </div>
                        <div class="h-1.5 w-1.5 rounded-full bg-red-500"></div>
                    </div>
                    <p class="text-xs leading-5 text-white">Offline</p>
                </div>
            @endif
        </div>
    </div>
    <div class="h-[130px] pb-2 w-full overflow-auto scrollbar-thin scrollbar-thumb-white">
        @foreach ($listMac[0] as $data)
            <div class="flex gap-2 mx-2">
                <div
                    class="w-[70%] h-5 mx-auto mt-[10px] bg-white rounded-xl text-black font-semibold flex items-center justify-center gap-2">
                    {{ $data['mac-address'] }}
                </div>
                <div
                    class="text-xs font-pixel w-[30%] h-5 mx-auto mt-[10px] bg-white rounded-xl text-black flex items-center justify-center gap-2">
                    {{ $data['comment'] ?? '' }}
                </div>
                <button wire:click="deleteMac('{{ $data['.id'] }}')"
                    class="hover:ring hover:ring-red-300 w-[30%] h-5 mx-auto mt-[10px] bg-red-500 rounded-xl text-white flex items-center justify-center gap-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </div>
                </button>
            </div>
        @endforeach
    </div>
</div>
