<div
    class="flex items-center justify-between px-10 fixed top-0 w-full h-[100px] md:h-[70px] border-b-[1px] border-white/20 backdrop-blur-sm z-50">
    <div class="flex items-center gap-1">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
            </svg>
        </div>
        <a wire:navigate href="{{ route('dashboard') }}" class="font-bold text-2xl tracking-tighter -translate-y-[3px]">
            edplebak_
        </a>
    </div>
    <div x-data="{ navbar: false }">
        <div x-on:click="navbar = !navbar" class="md:hidden scale-150">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path :class="{ 'hidden': navbar }" stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                <path :class="{ 'hidden': !navbar }" stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="md:w-full hidden md:flex items-center justify-between gap-10">
            <div class="ml-10 flex items-center gap-2">
                <a wire:navigate href="{{ route('dashboard') }}"
                    class="@if (Request::routeIs('dashboard')) text-black bg-white @endif hover:text-black hover:bg-white flex items-center gap-2 rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="12" cy="13" r="2" />
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                            <path d="M6.4 20a9 9 0 1 1 11.2 0Z" />
                        </svg>
                    </div>
                    Dashboard
                </a>
                <a wire:navigate href="{{ route('ip') }}"
                    class="@if (Request::routeIs('ip')) text-black bg-white @endif hover:text-black hover:bg-white flex items-center gap-2 rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <line x1="12" y1="11" x2="12" y2="17" />
                            <line x1="9" y1="14" x2="15" y2="14" />
                        </svg>
                    </div>
                    IP Address
                </a>
                <a wire:navigate href="{{ route('users') }}"
                    class="@if (Request::routeIs('users')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    Users
                </a>
                <a wire:navigate href="{{ route('documentation') }}"
                    class="@if (Request::routeIs('documentation')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </div>
                    Documentation
                </a>
                <a wire:navigate href="{{ route('checklist') }}"
                    class="@if (Request::routeIs('checklist')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <circle cx="12" cy="13" r="3" />
                        </svg>
                    </div>
                    Checklist
                </a>
            </div>
            <div class="flex gap-2 items-center">
                <div
                    class="relative cursor-pointer hover:ring hover:ring-white hover:bg-white hover:text-black rounded-full">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                    <div
                        class="absolute -top-[2px] -right-[2px] bg-red-600 ring-2 ring-red-900 text-white font-semibold text-xs w-[14px] h-[14px] flex items-center justify-center rounded-full">
                        4
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative">
                    <div x-on:click="open = !open" x-on:click.away="open = false"
                        class="w-[40px] h-[40px] rounded-full overflow-hidden hover:ring hover:ring-white cursor-pointer">
                        <img src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}" alt="profile picture">
                    </div>
                    <div x-show="open"
                        class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-black shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none border border-zinc-500">
                        <div class="py-1" role="none">
                            <div class="px-4 py-2 border-b border-zinc-500 flex items-center justify-center gap-2">
                                <div>
                                    <div class="w-7 h-7 rounded-full overflow-hidden">
                                        <img src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold text-sm inline-flex gap-2 items-center">
                                        {{ Auth::user()->name }}
                                        @if (Auth::user()->role->name == 'Super Admin')
                                            <div>
                                                <svg class="size-4 sm:size-[1.05rem] h-3.5 -ml-1" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.9982 2C12.2154 2 12.4219 2.09415 12.5643 2.25809L14.738 4.75988L18.0113 4.24063C18.2258 4.20661 18.4445 4.26724 18.6109 4.40684C18.7773 4.54644 18.875 4.75131 18.8787 4.96846L18.9357 8.28218L21.777 9.98844C21.9632 10.1003 22.0918 10.2873 22.1295 10.5012C22.1672 10.7151 22.1103 10.9348 21.9736 11.1035L19.8873 13.6787L20.967 16.812C21.0378 17.0174 21.0161 17.2433 20.9075 17.4314C20.7989 17.6195 20.6141 17.7513 20.4009 17.7926L17.1474 18.4242L15.9605 21.5186C15.8827 21.7214 15.7208 21.8805 15.5167 21.9548C15.3126 22.0291 15.0864 22.0112 14.8965 21.9059L11.9982 20.2984L9.09989 21.9059C8.90996 22.0112 8.68369 22.0291 8.47961 21.9548C8.27552 21.8805 8.11365 21.7214 8.03587 21.5186L6.84891 18.4242L3.59544 17.7926C3.38224 17.7513 3.19745 17.6195 3.08885 17.4314C2.98026 17.2433 2.95853 17.0174 3.02929 16.812L4.10905 13.6787L2.02273 11.1035C1.88601 10.9348 1.82915 10.7151 1.86687 10.5012C1.90458 10.2873 2.03316 10.1003 2.21935 9.98844L5.06059 8.28218L5.11763 4.96846C5.12137 4.75131 5.21906 4.54644 5.38543 4.40684C5.55181 4.26724 5.77053 4.20661 5.98503 4.24063L9.25831 4.75988L11.432 2.25809C11.5745 2.09415 11.781 2 11.9982 2ZM15.0285 11.2803C15.3214 10.9874 15.3214 10.5126 15.0285 10.2197C14.7356 9.92678 14.2607 9.92678 13.9678 10.2197L10.9982 13.1893L10.0285 12.2197C9.73561 11.9268 9.26073 11.9268 8.96784 12.2197C8.67495 12.5126 8.67495 12.9874 8.96784 13.2803L10.4678 14.7803C10.6085 14.921 10.7993 15 10.9982 15C11.1971 15 11.3879 14.921 11.5285 14.7803L15.0285 11.2803Z"
                                                        fill="#1d9bf0"></path>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="text-xs text-zinc-500">
                                        {{ Auth::user()->email ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <a wire:navigate href={{ route('setting') }}
                                class="hover:bg-white flex items-center gap-2 transition-colors duration-75 text-white hover:text-black px-4 py-2 mx-1 rounded-md text-sm mt-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                                Account settings
                            </a>
                            <div wire:click='logout'
                                class="cursor-pointer hover:bg-red-500 hover:text-white flex items-center gap-2 transition-colors duration-75 text-white px-4 py-2 mx-1 rounded-md text-sm mt-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                    </svg>
                                </div>
                                Sign Out
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- navbar-mobile --}}
        <div x-show="navbar" class="bg-black h-[2000px] flex flex-col gap-5 p-2 w-full absolute top-[100px] left-0">
            <div class="flex items-center justify-between px-6 py-2">
                <div x-data="{ open: false }" class="flex gap-5 items-center">
                    <img class="w-[60px] h-[60px] rounded-full "
                        src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}" alt="profile picture">
                    <div>
                        <div class="font-bold text-2xl">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-zinc-500 font-semibold">{{ Auth::user()->email ?? '' }}</div>
                    </div>
                </div>
                <div
                    class="scale-125 relative cursor-pointer hover:ring hover:ring-white hover:bg-white hover:text-black rounded-full">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                    <div
                        class="absolute -top-[2px] -right-[2px] bg-red-600 ring-2 ring-red-900 text-white font-semibold text-xs w-[14px] h-[14px] flex items-center justify-center rounded-full">
                        4
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <a wire:navigate href="{{ route('dashboard') }}"
                    class="@if (Request::routeIs('dashboard')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="12" cy="13" r="2" />
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                            <path d="M6.4 20a9 9 0 1 1 11.2 0Z" />
                        </svg>
                    </div>
                    Dashboard
                </a>
                <a wire:navigate href="{{ route('ip') }}"
                    class="@if (Request::routeIs('ip')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <line x1="12" y1="11" x2="12" y2="17" />
                            <line x1="9" y1="14" x2="15" y2="14" />
                        </svg>
                    </div>
                    IP Address
                </a>
                <a wire:navigate href="{{ route('users') }}"
                    class="@if (Request::routeIs('users')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    Users
                </a>
                <a wire:navigate href="{{ route('documentation') }}"
                    class="@if (Request::routeIs('documentation')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </div>
                    Documentation
                </a>
                <a wire:navigate href="{{ route('checklist') }}"
                    class="@if (Request::routeIs('checklist')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                            <circle cx="12" cy="13" r="3" />
                        </svg>
                    </div>
                    Checklist
                </a>
                <a wire:navigate href="{{ route('setting') }}"
                    class="@if (Request::routeIs('setting')) text-black bg-white @endif flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    Account settings
                </a>
                <a wire:click='logout'
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                    </div>
                    Sign out
                </a>
            </div>
        </div>
    </div>
</div>
