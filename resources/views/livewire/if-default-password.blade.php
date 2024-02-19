<div class="flex items-center justify-center z-50 fixed w-full h-screen backdrop-blur-sm top-0">
    <div class="bg-black flex flex-col rounded-xl shadow shadow-white">
        <div class="flex p-5 items-center gap-2 font-bold border-b">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
            First Setup
        </div>
        <div class="p-5 flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between items-center relative">
                    <span class="font-semibold">Set Picture</span>
                    @error('picture')
                        <span
                            class="absolute bottom-0 translate-y-14 translate-x-8 font-semibold text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center gap-2">
                    <div class="rounded-full w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input wire:model.blur='picture' class="bg-white text-gray-500 rounded-md cursor-pointer"
                        type="file">
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-2">
                    <div class="w-full flex justify-between items-center relative">
                        <span class="font-semibold">Set Email</span>
                        @error('email')
                            <span
                                class="absolute bottom-0 translate-y-14 translate-x-8 font-semibold text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex gap-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                            </svg>
                        </div>
                        <input wire:model.blur='email' class="w-full rounded-md outline-none px-2 py-1 text-black"
                            type="text" placeholder="youremail@domain.com" autocomplete="off">
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="flex flex-col gap-2">
                        <div class="w-full flex justify-between items-center relative">
                            <span class="font-semibold">Set New Password</span>
                            @error('newpassword')
                                <span
                                    class="absolute bottom-0 translate-y-14 translate-x-8 font-semibold text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                            <input wire:model='newpassword' class="w-full rounded-md outline-none px-2 py-1 text-black"
                                type="text" placeholder="New Password">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full text-end border-t p-5">
            <button wire:click='updateProfile' wire:loading.attr='disabled'
                class="transition-all duration-200 text-white border px-3 py-1 rounded-md font-semibold hover:ring hover:ring-white">Save</button>
        </div>
    </div>
    @if (Session::has('errorFirstSetup'))
        prabowo memek
    @endif
</div>
