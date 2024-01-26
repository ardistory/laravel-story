<div>
    <div class="flex items-center justify-between border-b-[1px]">
        <div class="w-full font-semibold text-md px-4 py-4 flex items-center justify-between gap-2">
            <div class="flex gap-2 items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </div>
                Registration Table
            </div>
            <div wire:click='refresh' wire:loading.remove class="active:animate-spin cursor-pointer">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </div>
            </div>
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
        </div>
    </div>
    <div class="h-[130px] overflow-auto scrollbar-thin scrollbar-thumb-white">
        @foreach ($listRegistrationTable as $data)
            @if ($data['mac-address'] != '')
                <div wire:key="{{ $data['.id'] }}" class="flex mx-2 gap-2">
                    <div
                        class="w-[60%] h-5 mx-auto mt-[10px] bg-white rounded-xl text-black flex items-center justify-center gap-2 font-semibold">
                        {{ $data['mac-address'] }}
                    </div>
                    <div
                        class="w-[40%] h-5 mx-auto mt-[10px] bg-white rounded-xl text-black flex items-center justify-center gap-2 font-semibold">
                        {{ $data['last-ip'] ?? 'Not Signed' }}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
