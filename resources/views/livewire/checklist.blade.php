<div>
    <div class="mb-1 flex justify-between ring-1 px-2 py-1 hover:ring">
        <div class="flex items-center gap-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                </svg>
            </div>
            Leaderboard
        </div>
        <div class="flex items-center gap-2">
            <div>
                <img class="w-8 h-8 rounded-full" src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
            </div>
            <div class="flex flex-col">
                <span class="text-zinc-500 text-xs">2015171331</span>
                <span class="font-semibold">Ardiansyah Putra</span>
            </div>
        </div>
    </div>
    <div class="flex justify-between mb-4 cursor-pointer">
        <div class="bg-green-800 w-1/2 p-2 text-xs text-center hover:bg-green-700">
            Checked (2)
        </div>
        <div class="bg-red-900 w-1/2 p-2 text-xs text-center hover:bg-red-800">
            Unchecked (18)
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
        <input class="text-black outline-none px-2 py-1 w-full md:w-[10%] rounded-r-xl" type="text"
            placeholder="Store Code">
    </div>
    <div class="flex flex-col gap-2">
        @foreach ($areas as $area)
            <div class="relative border rounded-xl p-5 hover:ring hover:ring-[#64b295] transition duration-300">
                <div class="flex justify-between">
                    <div>
                        <div class="text-sm font-bold text-zinc-500">
                            TKBV
                        </div>
                        <div class="font-semibold text-xs">
                            DC LEBAK 1
                        </div>
                        <div class="absolute top-1 right-1 inline-flex items-center gap-1">
                            <div
                                class="bg-[#051b11] px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-[#64b295] border border-[#64b295]">
                                Checked
                                <div>
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </div>
                            </div>
                            <div
                                class="bg-[#051b11] px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-[#64b295] border border-[#64b295]">
                                2024-02-02 11:40:36
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
