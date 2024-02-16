<div>
    <div
        class="group mb-4 flex justify-between ring-1 ring-white px-2 py-1 hover:bg-white hover:text-black rounded-sm transition duration-200 cursor-pointer">
        <div class="flex items-center gap-2">
            <div class="text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>
            </div>
            Leaderboard
            <div
                class="animate-pulse group-hover:text-red-500 group-hover:translate-x-5 group-hover:transition group-hover:duration-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <div>
                <img class="w-8 h-8 rounded-full" src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">Ardiansyah Putra</span>
                <span class="text-zinc-500 text-xs inline-flex gap-1 items-center">
                    10000
                    <div>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <div class="flex justify-between gap-2 mb-4 cursor-pointer">
        <div
            class="flex justify-between rounded-full bg-green-800 w-1/2 p-2 text-xs text-center hover:bg-green-700 relative">
            Checked
            <div
                class="absolute top-[8px] right-2 bg-green-600 text-white font-semibold text-xs w-[14px] h-[14px] flex items-center justify-center rounded-full">
                {{ $count_checked }}
            </div>
        </div>
        <div
            class="flex justify-between rounded-full bg-red-900 w-1/2 p-2 text-xs text-center hover:bg-red-800 relative">
            Unchecked
            <div
                class="absolute top-[8px] right-2 bg-red-600 text-white font-semibold text-xs w-[14px] h-[14px] flex items-center justify-center rounded-full">
                {{ $count_unchecked }}
            </div>
        </div>
    </div>
    <div class="mb-4 flex justify-end w-full">
        <div class="bg-white text-black px-1 py-1 rounded-l-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
        <input wire:model.live='query' class="text-black outline-none px-2 py-1 w-full md:w-[20%] rounded-r-xl"
            type="text" placeholder="Nama Toko">
    </div>
    <div class="flex flex-col gap-2">
        @if (count($areas) > 0)
            @foreach ($areas as $area)
                <div wire:key="{{ $area['kode_toko'] }}"
                    class="relative border rounded-xl p-5 hover:ring hover:ring-[#64b295] transition duration-300">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-sm font-bold text-zinc-500">
                                {{ $area['kode_toko'] }}
                            </div>
                            <div class="font-semibold text-xs">
                                {{ $area['nama_toko'] }}
                            </div>
                            <div class="absolute top-1 right-1 inline-flex items-center gap-1">
                                @if ($area['is_checked'] == 0 && $area['post_at'] != null)
                                    <div
                                        class="bg-red-900 px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-red-400 border border-red-400">
                                        Unchecked
                                        <div>
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18 18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </div>
                                @elseif($area['is_checked'] == 1 && $area['post_at'] != null)
                                    <div
                                        class="bg-[#051b11] px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-[#64b295] border border-[#64b295]">
                                        Checked
                                        <div>
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </div>
                                    </div>
                                @endif
                                @if ($area['post_at'] != null)
                                    <div
                                        class="px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-white border border-white">
                                        {{ $area['post_at'] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div x-data="{ doChecklist{{ $area['kode_toko'] }}: false }" class="flex items-center">
                            <button x-on:click="doChecklist{{ $area['kode_toko'] }} = true"
                                class="text-xs ring-1 ring-white px-2 py-1 rounded-lg hover:ring transition duration-300 inline-flex items-center gap-1">
                                Checklist
                                <div>
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                    </svg>
                                </div>
                            </button>
                            <div x-show="doChecklist{{ $area['kode_toko'] }}"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-90"
                                class="fixed w-full h-screen flex items-center justify-center backdrop-blur-sm top-0 left-0 z-10">
                                <div
                                    class="w-[90%] h-[80%] md:w-[70%] md:h-[75%] md:mt-5 bg-black shadow-sm shadow-white rounded-xl border-b flex flex-col justify-between">
                                    <div class="p-5 flex gap-5 justify-between border-b">
                                        <div class="flex items-center gap-2 font-bold">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                                </svg>
                                            </div>
                                            {{ $area['kode_toko'] }} - {{ $area['nama_toko'] }}
                                        </div>
                                        <div>
                                            <div x-on:click="doChecklist{{ $area['kode_toko'] }}=false"
                                                class="text-red-500 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-5 overflow-y-auto scrollbar-thin scrollbar-thumb-white scrollbar-track-black flex justify-between flex-wrap gap-2">
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 1
                                                </div>
                                                <div>
                                                    @if ($area['foto_1'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_1']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_1')
                                                        <p class="text-xs text-red-500">error foto</p>
                                                    @enderror
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_1'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                                <p class="text-xs text-red-500">error checklist</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 2
                                                </div>
                                                <div>
                                                    @if ($area['foto_2'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_2']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    <p class="text-xs text-red-500">error foto</p>
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_2'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                                <p class="text-xs text-red-500">error foto</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 3
                                                </div>
                                                <div>
                                                    @if ($area['foto_3'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_3']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    <p class="text-xs text-red-500">error foto</p>
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_3'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                                <p class="text-xs text-red-500">error foto</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 4
                                                </div>
                                                <div>
                                                    @if ($area['foto_4'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_4']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_4'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 5
                                                </div>
                                                <div>
                                                    @if ($area['foto_5'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_5']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_5'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 6
                                                </div>
                                                <div>
                                                    @if ($area['foto_6'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_6']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_6'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 7
                                                </div>
                                                <div>
                                                    @if ($area['foto_7'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_7']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_7'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 8
                                                </div>
                                                <div>
                                                    @if ($area['foto_8'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_8']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_8'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 9
                                                </div>
                                                <div>
                                                    @if ($area['foto_9'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_9']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_9'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-[32%]">
                                            <div
                                                class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                <div class="flex gap-2 items-center mb-2 font-bold">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                        </svg>
                                                    </div>
                                                    Foto 10
                                                </div>
                                                <div>
                                                    @if ($area['foto_10'] != null)
                                                        <img class="w-full h-auto mb-2 ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_10']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px] mb-2">
                                                            <div class="flex items-center gap-2">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                    </svg>
                                                                </div>
                                                                No data
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <input
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                </div>
                                                <div class="flex items-center justify-between bg-white/10 pl-2 mt-2">
                                                    <span class="select-none text-sm">
                                                        blablablablablablablabla?</span>
                                                    <select
                                                        class="bg-white px-3 py-1 rounded-md text-black outline-none"
                                                        name="checklist_1">
                                                        <option value="false">Tidak</option>
                                                        <option value="true"
                                                            @if ($area['checklist_10'] == true) selected @endif>Ya
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 border-t flex items-center justify-between">
                                        <div class="text-xs font-semibold">
                                            @if ($area['post_at'] != null)
                                                Last Update : {{ $area['post_at'] }}
                                            @else
                                                Last Update : -
                                            @endif
                                        </div>
                                        <button wire:click="storeGambar('{{ $area['kode_toko'] }}')"
                                            class="px-3 py-1 rounded-lg ring-1 ring-white hover:ring transition duration-300">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="flex justify-center ring-1 ring-white p-5 rounded-lg">
                <div class="flex items-center gap-2 n">
                    <div class="text-red-500 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                    No Data.
                </div>
            </div>
        @endif
    </div>

    <div class="flex justify-center mt-4">
        {{ $areas->links() }}
    </div>
</div>
