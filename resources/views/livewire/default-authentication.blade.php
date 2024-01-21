<div>
    <div class="w-full font-semibold text-md px-4 py-4 flex items-center justify-between gap-2 border-b-[1px]">
        <div class="flex gap-2 items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                </svg>
            </div>
            Default Authentication
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
    <div class="w-full h-[140px] flex flex-col items-center justify-center gap-2">
        @foreach ($dataWlan as $data)
            @if ($data['name'] != '')
                <div wire:key='{{ $data['.id'] }}'
                    class="bg-white text-black rounded-full w-[90%] py-2 px-4 font-bold text-md flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="text-sm">{{ $data['name'] }}</span>
                        <span class="text-xs text-gray-600">{{ ucfirst($data['default-authentication']) }}</span>
                    </div>
                    <div>
                        <button wire:click='setDefaultAuthenticationTrue("{{ $data['.id'] }}")'
                            class="bg-green-700 text-white px-2 py-1 rounded-full hover:ring hover:ring-green-300">True</button>
                        <button wire:click='setDefaultAuthenticationFalse("{{ $data['.id'] }}")'
                            class="bg-red-500 text-white px-2 py-1 rounded-full hover:ring hover:ring-red-300">False</button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
