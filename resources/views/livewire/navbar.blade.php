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
        <a wire:navigate href="{{ route('dashboard') }}"
            class="font-bold text-2xl tracking-tighter -translate-y-[3px]">edplebak</a>
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
                    :class="{ 'text-black bg-white': {{ Request::routeIs('dashboard') }} }"
                    class="hover:text-black hover:bg-white flex items-center gap-2 rounded-full px-3 py-2 text-sm font-medium transition duration-250">
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
                    :class="{ 'text-black bg-white': {{ Request::routeIs('ip') }} }"
                    class="hover:text-black hover:bg-white flex items-center gap-2 rounded-full px-3 py-2 text-sm font-medium transition duration-250">
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
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    Users
                </a>
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
                    <div>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </div>
                    Documentation
                </a>
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-3 py-2 text-sm font-medium transition duration-250">
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
                <div x-data="{ dark: true }" x-on:click="dark = !dark"
                    :class="{ 'text-black bg-white': dark, 'text-black bg-white': !dark }"
                    class="text-black bg-white w-[30px] h-[30px] rounded-full flex items-center justify-center hover:ring hover:ring-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path :class="{ 'hidden': !dark }" stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        <path :class="{ 'hidden': dark }" stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </div>
                <div x-data="{ open: false }" class="relative">
                    <div x-on:click="open = !open" x-on:click.away="open = false"
                        class="w-[40px] h-[40px] rounded-full overflow-hidden hover:ring hover:ring-white cursor-pointer">
                        <img src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}" alt="profile picture">
                    </div>
                    <div x-show="open"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="#"
                                class="hover:bg-gray-300 flex items-center gap-2 text-gray-700 px-4 py-2 mx-1 rounded-md text-sm">
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
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="hover:bg-gray-300 flex items-center gap-2 text-gray-700 w-[96%] px-4 py-2 mx-1 rounded-md text-left text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                        </svg>
                                    </div>
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- navbar-mobile --}}
        <div x-show="navbar" class="bg-black h-[2000px] flex flex-col gap-5 p-2 w-full absolute top-[100px] left-0">
            <div class="flex items-center justify-between">
                <div x-data="{ open: false }" class="flex gap-2 items-center">
                    <div
                        class="w-[60px] h-[60px] rounded-full overflow-hidden active:ring active:ring-white cursor-pointer">
                        <img src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}" alt="profile picture">
                    </div>
                    <div class="font-bold text-2xl">{{ Auth::user()->name }}</div>
                </div>
                <div x-data="{ dark: true }" x-on:click="dark = !dark"
                    :class="{ 'text-black': dark, 'bg-white': dark, 'text-black': !dark, 'bg-white': !dark }"
                    class="text-black bg-white w-[30px] h-[30px] rounded-full flex items-center justify-center active:ring active:ring-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path :class="{ 'hidden': !dark }" stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        <path :class="{ 'hidden': dark }" stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <a href="{{ route('dashboard') }}"
                    :class="{ 'text-black bg-white': {{ Request::routeIs('dashboard') }} }"
                    class="flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
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
                <a href="{{ route('ip') }}" :class="{ 'text-black bg-white': {{ Request::routeIs('ip') }} }"
                    class="flex items-center gap-2 hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
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
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    Users
                </a>
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
                    <div>
                        <svg class="h-7 w-7" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </div>
                    Documentation
                </a>
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
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
                <a href="#"
                    class="flex items-center gap-2 text-white hover:bg-white hover:text-black rounded-full px-6 py-4 text-xl font-medium transition duration-250">
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
                <a href="{{ route('logout') }}"
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
