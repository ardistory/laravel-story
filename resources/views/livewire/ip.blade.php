<div class="px-10 w-full mt-[120px] md:mt-[90px]">
    <x-header title="IP Address"></x-header>
    {{-- Start --}}

    <div class="mt-4 flex justify-end">
        <div class="flex items-center px-1 bg-white text-black rounded-l-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
        <input wire:model.live.debounce.100ms='query' class="px-2 py-1 rounded-r-xl outline-none text-black"
            type="text" placeholder='"TINP" / "Serang"'>
    </div>
    <div class="rounded-xl overflow-hidden mt-4 border">
        <table class="w-full border-collapse">
            <thead class="bg-white text-black">
                <tr>
                    <th class="p-2">No</th>
                    <th class="text-left">Store</th>
                    <th class="text-left">Area</th>
                    <th class="text-left">IP Address</th>
                    @if (Auth::user()->role->level == 3)
                        <th class="w-[50px] h-[50px] flex items-center justify-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.867 19.125h.008v.008h-.008v-.008Z" />
                                </svg>
                            </div>
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <div class="relative">
                    @if (count($data) > 0)
                        @foreach ($data as $index => $dt)
                            <tr wire:key='{{ $dt['kode_toko'] }}' class="w-full border-t overflow-auto">
                                <td class="p-4">
                                    <div class="flex font-semibold items-center justify-center">
                                        {{ $data->firstItem() + $index }}
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="flex flex-col text-left">
                                            <div class="font-medium text-zinc-500">{{ $dt['kode_toko'] }}</div>
                                            <div class="font-bold">{{ $dt['nama_toko'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center justify-start gap-2">
                                        <div class="w-10 h-10">
                                            <img class="rounded-full"
                                                src="{{ asset('storage/img/profile/' . $dt['picture']) }}">
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="font-medium text-zinc-500">{{ $dt['nik'] }}</div>
                                            <div class="font-bold">{{ $dt['name'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div x-data="{ show{{ $dt['kode_toko'] }}: false }" class="flex">
                                        <button x-on:click="show{{ $dt['kode_toko'] }}= true"
                                            class="bg-black text-white rounded-md font-bold text-xs px-2 py-1 ring ring-white hover:bg-white hover:text-black">
                                            Show
                                        </button>

                                        <div x-show="show{{ $dt['kode_toko'] }}"
                                            class="flex z-10 fixed top-0 left-0 w-full h-screen backdrop-blur-sm justify-center items-center">
                                            <div class="bg-black text-white rounded-lg shadow-sm shadow-white">
                                                <div class="p-5 flex items-center justify-between font-bold">
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                            </svg>
                                                        </div>
                                                        Detail IP Address
                                                    </div>
                                                    <div x-on:click="show{{ $dt['kode_toko'] }} = !show{{ $dt['kode_toko'] }}"
                                                        x-on:click.away="show{{ $dt['kode_toko'] }} = !show{{ $dt['kode_toko'] }}"
                                                        class="text-red-500 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18 18 6M6 6l12 12" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2 justify-center p-1 border-b font-bold text-xs bg-white text-black">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                                                        </svg>
                                                    </div>
                                                    {{ $dt['kode_toko'] }} - {{ $dt['nama_toko'] }}
                                                </div>
                                                <div class="px-5 pb-1 pt-5 flex flex-col gap-1">
                                                    <div class="flex gap-2 items-center">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                                            </svg>
                                                        </div>
                                                        Gateway
                                                    </div>
                                                    <input
                                                        class="rounded-md outline-none text-black bg-white px-2 font-semibold"
                                                        type="text" value="{{ $dt['ip_gateway'] }}" disabled>
                                                </div>
                                                <div class="px-5 pb-1 flex flex-col gap-1">
                                                    <div class="flex gap-2 items-center">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                            </svg>
                                                        </div>
                                                        Induk
                                                    </div>
                                                    <input
                                                        class="rounded-md outline-none text-black bg-white px-2 font-semibold"
                                                        type="text" value="{{ $dt['ip_induk'] }}" disabled>
                                                </div>
                                                <div class="px-5 pb-1 flex flex-col gap-1">
                                                    <div class="flex gap-2 items-center">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                            </svg>
                                                        </div>
                                                        Anak
                                                    </div>
                                                    <input
                                                        class="rounded-md outline-none text-black bg-white px-2 font-semibold"
                                                        type="text" value="{{ $dt['ip_anak'] }}" disabled>
                                                </div>
                                                <div class="px-5 pb-1 flex flex-col gap-1">
                                                    <div class="flex gap-2 items-center">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                                                            </svg>
                                                        </div>
                                                        Stb
                                                    </div>
                                                    <input
                                                        class="rounded-md outline-none text-black bg-white px-2 font-semibold"
                                                        type="text" value="{{ $dt['ip_stb'] }}" disabled>
                                                </div>
                                                <div class="px-5 pb-5 flex flex-col gap-1">
                                                    <div class="flex gap-2 items-center">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                            </svg>
                                                        </div>
                                                        Rb Wdcp
                                                    </div>
                                                    <input
                                                        class="rounded-md outline-none text-black bg-white px-2 font-semibold"
                                                        type="text" value="{{ $dt['ip_wdcp'] }}" disabled>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                @if (Auth::user()->role->level == 3)
                                    <td>
                                        <div class="flex items-center justify-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center font-bold">
                                <div class="flex items-center gap-1 justify-center p-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </div>
                                    No data
                                </div>
                            </td>
                        </tr>
                    @endif
                </div>
            </tbody>
        </table>
    </div>
    <div class="text-black mt-4 w-full flex justify-center">
        {{ $data->links() }}
    </div>

    {{-- End --}}
</div>
