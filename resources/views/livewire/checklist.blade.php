<div>
    <div x-data="{ showLeaderboard: false }" x-on:click="showLeaderboard = true"
        class="group mb-4 flex justify-between ring-1 ring-white px-2 py-1 bg-indigo-950 hover:bg-indigo-900 rounded-sm transition duration-200 cursor-pointer">
        <div class="flex items-center gap-2 font-bold">
            <div class="text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path
                        d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
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
                <img class="w-8 h-8 rounded-full"
                    src="{{ asset('storage/img/profile/' . $leaderboard_first['picture']) }}">
            </div>
            <div class="flex flex-col">
                <span class="font-semibold">{{ $leaderboard_first['name'] }}</span>
                <span class="text-zinc-500 text-xs inline-flex gap-1 items-center">
                    {{ $leaderboard_first['point'] }}
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
        <div x-show="showLeaderboard" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="cursor-default z-10 fixed top-0 left-0 backdrop-blur-sm w-full h-screen flex justify-center items-center">
            <div x-on:click.away="showLeaderboard = false" class="w-[90%] md:w-[50%] h-[70%] flex flex-col">
                <div class="font-semibold flex items-center gap-2 bg-black p-5 rounded-t-lg border">
                    <div class="text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                        </svg>
                    </div>
                    Leaderboard
                </div>
                <div
                    class="rounded-b-lg border-b border-l border-r p-2 bg-black max-h-full overflow-y-auto scrollbar-thin scrollbar-thumb-white scrollbar-track-black">
                    @foreach ($leaderboards as $index => $leaderboard)
                        <div
                            class="@if ($leaderboard['name'] == Auth::user()->name) ring ring-yellow-500 @else ring-1 ring-white @endif cursor-pointer mt-2 first:mt-0 hover:ring hover:ring-blue-500 rounded-lg p-3 bg-black flex justify-between transition duration-300">
                            <div class="flex items-center justify-center">
                                #{{ $index + 1 }}
                            </div>
                            <div class="flex items-center justify-start gap-2">
                                <img class="w-10 h-10 rounded-full"
                                    src="{{ asset('storage/img/profile/' . $leaderboard['picture']) }}">
                                <div>
                                    <div class="font-bold">
                                        {{ $leaderboard['name'] }}
                                    </div>
                                    <div class="text-xs text-zinc-500 flex items-center gap-1">
                                        {{ $leaderboard['point'] }}
                                        <div>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between gap-2 mb-4 cursor-pointer">
        <div x-data="{ showChecked: false }" x-on:click="showChecked = true"
            class="flex font-semibold justify-center rounded-full bg-green-800 w-1/2 p-2 text-xs text-center hover:bg-green-700 relative">
            Checked
            <div x-show="showChecked" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="select-none cursor-default fixed top-0 left-0 w-full h-screen flex flex-col justify-center items-center backdrop-blur-sm z-10">
                <div class="bg-black w-[90%] md:w-[50%] rounded-t-lg border">
                    <div class="font-bold flex items-center gap-2 px-4 py-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Checked
                    </div>
                </div>
                <div x-on:click.away="showChecked = false"
                    class="bg-black border-x border-b rounded-b-lg w-[90%] md:w-[50%] max-h-[70%] p-2 scrollbar-thin scrollbar-thumb-white scrollbar-track-black overflow-y-auto">
                    @foreach ($list_checked as $list)
                        @if ($carbon::now()->diffInMonths($list['post_at']) <= 2)
                            <div
                                class="relative @if ($list['nik'] == Auth::user()->nik) ring ring-yellow-500 @else ring-1 ring-white @endif rounded-md flex justify-between px-2 py-2 mb-2 last:mb-0">
                                <div>
                                    <div class="flex justify-start font-bold text-zinc-500">{{ $list['kode_toko'] }}
                                    </div>
                                    <div class="flex justify-start font-semibold text-xs">{{ $list['nama_toko'] }}</div>
                                    <div class="flex justify-start items-center gap-1 text-xs text-green-500">
                                        {{ $list['check_by_name'] }}
                                        <div class="text-green-500">
                                            <svg class="w-4 h-4 animate-pulse" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                <path fill-rule="evenodd"
                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="absolute top-0 right-1 flex justify-start text-xs text-zinc-500">
                                        {{ $list['updated_at'] }}
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img class="w-7 h-7 rounded-full"
                                        src="{{ asset('storage/img/profile/' . $list['picture']) }}">
                                    <div>
                                        <div class="flex justify-start font-bold text-zinc-500">{{ $list['nik'] }}
                                        </div>
                                        <div class="flex justify-start font-semibold">{{ $list['name'] }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div x-data="{ showUnchecked: false }" x-on:click="showUnchecked = true"
            class="flex font-semibold items-center gap-1 justify-center rounded-full bg-yellow-900 w-1/2 p-2 text-xs text-center hover:bg-yellow-800 relative">
            <div>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </div>
            Unchecked
            <div x-show="showUnchecked" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="select-none cursor-default fixed top-0 left-0 w-full h-screen flex flex-col justify-center items-center backdrop-blur-sm z-10">
                <div class="bg-black w-[90%] md:w-[50%] rounded-t-lg border">
                    <div class="font-bold flex items-center gap-2 px-4 py-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Unchecked
                    </div>
                </div>
                <div x-on:click.away="showUnchecked = false"
                    class="bg-black border-x border-b rounded-b-lg w-[90%] md:w-[50%] max-h-[70%] p-2 scrollbar-thin scrollbar-thumb-white scrollbar-track-black overflow-y-auto">
                    @foreach ($list_unchecked as $listUn)
                        @if ($carbon::now()->diffInMonths($listUn['post_at']) <= 2)
                            <div
                                class="@if ($listUn['nik'] == Auth::user()->nik) ring ring-yellow-500 @else ring-1 ring-white @endif rounded-md flex justify-between px-4 py-2 mb-2 last:mb-0">
                                <div>
                                    <div class="flex justify-start font-bold text-zinc-500">{{ $listUn['kode_toko'] }}
                                    </div>
                                    <div class="flex justify-start font-semibold text-xs">{{ $listUn['nama_toko'] }}
                                    </div>
                                    <div class="flex justify-start font-semibold text-xs text-zinc-500">
                                        Post at {{ $listUn['post_at'] }}
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img class="w-7 h-7 rounded-full"
                                        src="{{ asset('storage/img/profile/' . $listUn['picture']) }}">
                                    <div>
                                        <div class="flex justify-start font-bold text-zinc-500">{{ $listUn['nik'] }}
                                        </div>
                                        <div class="flex justify-start font-semibold">{{ $listUn['name'] }}</div>
                                    </div>
                                </div>
                                @if (Auth::user()->role_level == 2 || Auth::user()->role_level == 3)
                                    <div x-data="{ showUncheckf{{ $listUn['kode_toko'] }}: false }" class="flex items-center">
                                        <button x-on:click="showUncheckf{{ $listUn['kode_toko'] }}=true"
                                            class="flex items-center gap-1 px-3 py-1 bg-white text-black font-semibold rounded-md">
                                            Check
                                            <div>
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                        <div x-show="showUncheckf{{ $listUn['kode_toko'] }}"
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
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                                            </svg>
                                                        </div>
                                                        {{ $listUn['kode_toko'] }} - {{ $listUn['nama_toko'] }}
                                                    </div>
                                                    <div>
                                                        <div x-on:click="showUncheckf{{ $listUn['kode_toko'] }}=false"
                                                            class="text-red-500 cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 1
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_1']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 2
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_2']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 3
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_3']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 4
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_4']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 5
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_5']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 6
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_6']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 7
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_7']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 8
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_8']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 9
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_9']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full md:w-[32%]">
                                                        <div
                                                            class="p-2 ring-1 ring-white/20 rounded-md hover:ring hover:ring-blue-500 transition duration-300">
                                                            <div class="flex gap-2 items-center mb-2 font-bold">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                                    </svg>
                                                                </div>
                                                                Foto 10
                                                            </div>
                                                            <div>
                                                                <img class="w-full h-auto ring-1 ring-white/20"
                                                                    src="{{ asset('storage/img/checklist/' . $listUn['foto_10']) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-5 border-t flex items-center justify-between">
                                                    <div class="text-xs font-semibold">
                                                        @if ($listUn['post_at'] != null)
                                                            Last Update : {{ $listUn['post_at'] }}
                                                        @else
                                                            Last Update : -
                                                        @endif
                                                    </div>
                                                    <div class="flex gap-2">
                                                        <button
                                                            wire:click="setStoreAccept('{{ $listUn['kode_toko'] }}','{{ $listUn['nik'] }}')"
                                                            class="px-3 py-1 rounded-lg ring-1 ring-green-500 text-green-500 hover:ring transition duration-300">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div x-data="{ wahDireject{{ $listUn['kode_toko'] }}: false }">
                                                            <button
                                                                x-on:click="wahDireject{{ $listUn['kode_toko'] }}=true"
                                                                class="px-3 py-1 rounded-lg ring-1 ring-red-500 text-red-500 hover:ring transition duration-300">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M6 18 18 6M6 6l12 12" />
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                            <div x-show="wahDireject{{ $listUn['kode_toko'] }}"
                                                                x-transition:enter="transition ease-out duration-300"
                                                                x-transition:enter-start="opacity-0 scale-90"
                                                                x-transition:enter-end="opacity-100 scale-100"
                                                                x-transition:leave="transition ease-in duration-300"
                                                                x-transition:leave-start="opacity-100 scale-100"
                                                                x-transition:leave-end="opacity-0 scale-90"
                                                                class="z-20 backdrop-blur-sm fixed top-0 left-0 w-full h-screen flex justify-center items-center">
                                                                <div
                                                                    class="bg-black border text-white rounded-md shadow-sm shadow-black">
                                                                    <div class="p-2 border-b flex justify-between">
                                                                        <div class="flex items-center gap-2">
                                                                            <div>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    stroke-width="1.5"
                                                                                    stroke="currentColor"
                                                                                    class="w-6 h-6">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                                                                </svg>
                                                                            </div>
                                                                            Alasannya?
                                                                        </div>
                                                                        <div x-on:click="wahDireject{{ $listUn['kode_toko'] }}=false"
                                                                            class="text-red-500 cursor-pointer">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke-width="1.5"
                                                                                stroke="currentColor" class="w-6 h-6">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    d="M6 18 18 6M6 6l12 12" />
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-3 py-3 flex gap-2">
                                                                        <input wire:model='messageReject'
                                                                            class="text-black px-2 py-1 ring-1 outline-none rounded-md focus:ring focus:ring-sky-500/65 transition duration-200"
                                                                            type="text" placeholder="Keterangan">
                                                                        <button
                                                                            wire:click="setStoreReject('{{ $listUn['kode_toko'] }}')"
                                                                            class="px-3 py-1 ring-1 ring-white rounded-md hover:ring">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div x-data="{ showRejected: false }" x-on:click="showRejected = true"
            class="flex items-center gap-1 font-semibold justify-center rounded-full bg-red-900 w-1/2 p-2 text-xs text-center hover:bg-red-800 relative">
            <div>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </div>
            Rejected
            <div x-show="showRejected" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="select-none cursor-default fixed top-0 left-0 w-full h-screen flex flex-col justify-center items-center backdrop-blur-sm z-10">
                <div class="bg-black w-[90%] md:w-[50%] rounded-t-lg border">
                    <div class="font-bold flex items-center gap-2 px-4 py-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                <path fill-rule="evenodd"
                                    d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Rejected
                    </div>
                </div>
                <div x-on:click.away="showRejected = false"
                    class="bg-black border-x border-b rounded-b-lg w-[90%] md:w-[50%] max-h-[70%] p-2 scrollbar-thin scrollbar-thumb-white scrollbar-track-black overflow-y-auto">
                    @foreach ($list_rejected as $listRe)
                        @if ($carbon::now()->diffInMonths($listRe['post_at']) <= 2)
                            <div
                                class="@if ($listRe['nik'] == Auth::user()->nik) ring ring-yellow-500 @else ring-1 ring-white @endif rounded-md flex flex-col justify-between px-2 py-2 mb-2 last:mb-0">
                                <div class="flex justify-between">
                                    <div>
                                        <div class="flex justify-start font-bold text-zinc-500">
                                            {{ $listRe['kode_toko'] }}
                                        </div>
                                        <div class="flex justify-start font-semibold text-xs">
                                            {{ $listRe['nama_toko'] }}
                                        </div>
                                        <div
                                            class="text-red-500 text-xs flex justify-start gap-1 items-center rounded-md">
                                            {{ $listRe['check_by_name'] }}
                                            <div class="text-red-500">
                                                <svg class="w-4 h-4 animate-pulse" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img class="w-7 h-7 rounded-full"
                                            src="{{ asset('storage/img/profile/' . $listRe['picture']) }}">
                                        <div>
                                            <div class="flex justify-start font-bold text-zinc-500">
                                                {{ $listRe['nik'] }}
                                            </div>
                                            <div class="flex justify-start font-semibold">{{ $listRe['name'] }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 bg-white text-black italic text-xs px-2 py-2 rounded">
                                    "{{ $listRe['message'] }}!"
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
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
        @if (count($areas) > 0)
            <input wire:model.live='query' class="text-black outline-none px-2 py-1 w-full md:w-[20%] rounded-r-xl"
                type="text" placeholder="Nama Toko">
        @elseif (count($areas_admin) > 0)
            <input wire:model.live='queryAdmin'
                class="text-black outline-none px-2 py-1 w-full md:w-[20%] rounded-r-xl" type="text"
                placeholder="Nama Toko">
        @else
            <input class="text-black outline-none px-2 py-1 w-full md:w-[20%] rounded-r-xl" type="text"
                placeholder="Nama Toko">
        @endif
    </div>
    <div class="select-none flex flex-col gap-2">
        @if (count($areas) > 0)
            @foreach ($areas as $area)
                <div wire:key="{{ $area['kode_toko'] }}"
                    class="relative border rounded-xl p-5 hover:ring @if ($area['is_checked'] == 0 && $area['post_at'] != null) hover:ring-yellow-500 focus:ring-yellow-500 @elseif($area['is_checked'] == 1 && $area['post_at'] != null) hover:ring-green-500 @elseif($area['is_checked'] == 2 && $area['post_at'] != null) hover:ring-red-500 @else hover:ring-white @endif transition duration-300">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-sm font-bold text-zinc-500">
                                {{ $area['kode_toko'] }}
                            </div>
                            <div class="font-semibold text-xs">
                                {{ $area['nama_toko'] }}
                            </div>
                            <div class="absolute top-1 right-1 inline-flex items-center gap-1">
                                @if ($carbon::now()->diffInMonths($area['post_at']) <= 2)
                                    @if ($area['is_checked'] == 0 && $area['post_at'] != null)
                                        <div
                                            class="bg-yellow-900 px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-yellow-400 border border-yellow-400">
                                            Unchecked
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    @elseif($area['is_checked'] == 1 && $area['post_at'] != null)
                                        <div
                                            class="bg-[#051b11] px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-[#64b295] border border-[#64b295]">
                                            Checked
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                            </div>
                                        </div>
                                    @elseif($area['is_checked'] == 2 && $area['post_at'] != null)
                                        <div
                                            class="bg-red-900 px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-red-400 border border-red-400">
                                            Rejected
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
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
                                @elseif ($area['post_at'] != null)
                                    <div
                                        class="px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-white border border-white">
                                        Upload Terakhir : {{ $area['post_at'] }}
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
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
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
                                                    <input wire:model.blur='foto_1'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_1')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_2'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_2')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_3'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_3')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_4'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_4')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_5'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_5')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_6'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_6')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_7'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_7')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_8'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_8')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_9'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_9')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
                                                    <input wire:model.blur='foto_10'
                                                        class="w-full cursor-pointer file:cursor-pointer file:font-bold text-xs file:text-sm file:text-black file:bg-white file:px-3 file:py-1 file:rounded-2xl file:border-0 bg-white/10 rounded-2xl"
                                                        type="file">
                                                    @error('foto_10')
                                                        <p class="text-xs text-red-500">{{ $message }}</p>
                                                    @enderror
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
        @elseif(count($areas_admin) > 0)
            @foreach ($areas_admin as $area)
                <div wire:key="{{ $area['kode_toko'] }}"
                    class="relative border rounded-xl p-5 hover:ring @if ($area['is_checked'] == 0 && $area['post_at'] != null) hover:ring-yellow-500 focus:ring-yellow-500 @elseif($area['is_checked'] == 1 && $area['post_at'] != null) hover:ring-green-500 @elseif($area['is_checked'] == 2 && $area['post_at'] != null) hover:ring-red-500 @else hover:ring-white @endif transition duration-300">
                    <div class="flex justify-between">
                        <div>
                            <div class="text-sm font-bold text-zinc-500">
                                {{ $area['kode_toko'] }}
                            </div>
                            <div class="font-semibold text-xs">
                                {{ $area['nama_toko'] }}
                            </div>
                            <div class="absolute top-1 right-1 inline-flex items-center gap-1">
                                @if ($carbon::now()->diffInMonths($area['post_at']) <= 2)
                                    @if ($area['is_checked'] == 0 && $area['post_at'] != null)
                                        <div
                                            class="bg-yellow-900 px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-yellow-400 border border-yellow-400">
                                            Unchecked
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    @elseif($area['is_checked'] == 1 && $area['post_at'] != null)
                                        <div
                                            class="bg-[#051b11] px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-[#64b295] border border-[#64b295]">
                                            Checked
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                            </div>
                                        </div>
                                    @elseif($area['is_checked'] == 2 && $area['post_at'] != null)
                                        <div
                                            class="bg-red-900 px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-red-400 border border-red-400">
                                            Rejected
                                            <div>
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
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
                                @elseif ($area['post_at'] != null)
                                    <div
                                        class="px-2 rounded-xl font-semibold text-xs inline-flex items-center gap-1 text-white border border-white">
                                        Upload Terakhir : {{ $area['post_at'] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div x-data="{ doChecklist{{ $area['kode_toko'] }}: false }" class="flex items-center">
                            <button x-on:click="doChecklist{{ $area['kode_toko'] }} = true"
                                class="text-xs ring-1 ring-white px-2 py-1 rounded-lg hover:ring transition duration-300 inline-flex items-center gap-1">
                                Show
                                <div>
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="w-6 h-6">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd"
                                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                            clip-rule="evenodd" />
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_1']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                    Foto 2
                                                </div>
                                                <div>
                                                    @if ($area['foto_2'] != null)
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_2']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                    Foto 3
                                                </div>
                                                <div>
                                                    @if ($area['foto_3'] != null)
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_3']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                    Foto 4
                                                </div>
                                                <div>
                                                    @if ($area['foto_4'] != null)
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_4']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_5']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_6']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_7']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_8']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_9']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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
                                                        <img class="w-full h-auto ring-1 ring-white/20"
                                                            src="{{ asset('storage/img/checklist/' . $area['foto_10']) }}">
                                                    @else
                                                        <div
                                                            class="flex justify-center ring-1 ring-white/20 h-[150px]">
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

    @if (count($areas) > 0)
        <div class="flex justify-center mt-4">
            {{ $areas->links() }}
        </div>
    @elseif (count($areas_admin) > 0)
        <div class="flex justify-center mt-4">
            {{ $areas_admin->links() }}
        </div>
    @endif
</div>
