<div class="px-10 w-full mt-[120px] md:mt-[90px]">
    <x-header title="IP Address"></x-header>
    {{-- Start --}}

    <div class="mt-4 flex @if (Auth::user()->role->level == 3) justify-between @endif justify-end">
        @if (Auth::user()->role->level == 3)
            <div x-data="{ newStore: false }">
                <button x-on:click="newStore = !newStore"
                    class="flex items-center gap-2 bg-black text-white hover:bg-white hover:text-black ring-1 ring-white px-2 py-1 rounded-md font-bold transition duration-150">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    Add Store
                </button>
                <div x-show="newStore"
                    class="fixed w-full h-screen flex items-center justify-center top-0 left-0 z-10 backdrop-blur-sm">
                    <div x-on:click.away="newStore = !newStore"
                        class="bg-black text-white shadow-sm shadow-white border-b rounded-md">
                        <div class="flex items-center gap-2 border-b p-5 font-bold">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </div>
                            Add Store
                        </div>
                        <div class="flex flex-row gap-2 border-b">
                            <div class="flex flex-col gap-4 border-r p-5">
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                                            </svg>
                                        </div>
                                        Store Code
                                    </div>
                                    <div class="w-full relative">
                                        <input wire:model.blur='kode_toko'
                                            class="w-full outline-none text-black px-3 py-1 rounded-md" type="text"
                                            placeholder="Store Code" maxlength="4" autocomplete="off">
                                        <div class="absolute font-bold text-xs flex items-center text-red-500">
                                            @error('newStoreCode')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                            </svg>
                                        </div>
                                        Store Name
                                    </div>
                                    <div class="relative w-full">
                                        <input wire:model.blur='nama_toko'
                                            class="w-full outline-none text-black px-3 py-1 rounded-md" type="text"
                                            placeholder="Store Name">
                                        <div class="absolute font-bold text-xs flex items-center text-red-500">
                                            @error('newNameStoreCode')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                        </div>
                                        Area
                                    </div>
                                    <div class="w-full relative">
                                        <select wire:model='edparea'
                                            class="outline-none rounded-md px-3 py-1 text-black font-semibold">
                                            <option>Choose Area</option>
                                            @foreach ($dataArea as $datax)
                                                @if ($datax['nik'] != '2015171331')
                                                    <option value="{{ $datax['nik'] }}">
                                                        {{ $datax['name'] }} - {{ $datax['nik'] }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <div class="absolute font-bold text-xs flex items-center text-red-500">
                                            @error('newArea')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col gap-1">
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                            </svg>
                                        </div>
                                        Ip Gateway
                                    </div>
                                    <input wire:model='ip_gateway' class="outline-none text-black px-3 py-1 rounded-md"
                                        type="text" placeholder="Gateway">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                            </svg>
                                        </div>
                                        Ip Induk
                                    </div>
                                    <input wire:model='ip_induk' class="outline-none text-black px-3 py-1 rounded-md"
                                        type="text" placeholder="Induk">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                            </svg>
                                        </div>
                                        Ip Anak
                                    </div>
                                    <input wire:model='ip_anak' class="outline-none text-black px-3 py-1 rounded-md"
                                        type="text" placeholder="Anak">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                                            </svg>
                                        </div>
                                        Ip Stb
                                    </div>
                                    <input wire:model='ip_stb' class="outline-none text-black px-3 py-1 rounded-md"
                                        type="text" placeholder="Stb">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div class="flex gap-2 items-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                            </svg>
                                        </div>
                                        Ip Wdcp
                                    </div>
                                    <input wire:model='ip_wdcp' class="outline-none text-black px-3 py-1 rounded-md"
                                        type="text" placeholder="Wdcp">
                                </div>
                            </div>
                        </div>
                        <div class="p-5 flex justify-between">
                            <div class="flex items-center font-bold text-sm">
                                @if (session('successInsertNew'))
                                    <span class="text-green-500">{{ session('successInsertNew') }}</span>
                                @elseif (session('failedInsertNew'))
                                    <span class="text-red-500">{{ session('failedInsertNew') }}</span>
                                @endif
                            </div>
                            <button wire:click='insertNewStore'
                                class="bg-black text-white ring-1 ring-white px-3 py-1 rounded-md hover:ring transition duration-150">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex">
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
                            @if ($dt['nik'] != '2015171331')
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                                </svg>
                                                            </div>
                                                            Detail IP Address
                                                        </div>
                                                        <div x-on:click="show{{ $dt['kode_toko'] }} = !show{{ $dt['kode_toko'] }}"
                                                            x-on:click.away="show{{ $dt['kode_toko'] }} = !show{{ $dt['kode_toko'] }}"
                                                            class="text-red-500 cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18 18 6M6 6l12 12" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-center gap-2 justify-center p-1 border-b font-bold text-xs bg-white text-black">
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
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
                                        <td x-data="{ option{{ $dt['kode_toko'] }}: false }" class="relative">
                                            <button
                                                x-on:click="option{{ $dt['kode_toko'] }} = !option{{ $dt['kode_toko'] }}"
                                                x-on:click.away="option{{ $dt['kode_toko'] }} = false"
                                                class="flex items-center justify-center cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                                </svg>
                                            </button>
                                            <button x-show="option{{ $dt['kode_toko'] }}"
                                                class="-translate-x-24 -translate-y-7 px-3 py-1 absolute ring-1 ring-white bg-black text-white hover:bg-white hover:text-black flex items-center gap-1 rounded-md">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </div>
                                                Edit
                                            </button>
                                        </td>
                                    @endif
                                </tr>
                            @endif
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
