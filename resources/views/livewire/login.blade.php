<div class="flex min-h-screen flex-col items-center pt-16 justify-center">
    <a href="{{ env('APP_URL') }}">
        <div class="select-none text-foreground font-semibold text-2xl tracking-tighter mx-auto flex items-center gap-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                </svg>
            </div>
            edplebak_
        </div>
    </a>
    <div class="relative mt-12 w-full max-w-lg">
        <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"
            bis_skin_checked="1"></div>
        <div
            class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
            <div class="select-none flex-col p-6">
                <h3 class="text-xl font-semibold leading-6 tracking-tighter">Login</h3>
                <p class="mt-1.5 text-sm font-medium text-white/50">Welcome back, enter your credentials to continue.
                </p>
            </div>
            <div class="p-6 pt-0">
                <form wire:submit='login'>
                    <div>
                        <div>
                            <div
                                class="group relative rounded-lg border @if ($isNikNull && $nik != null) border-red-500 ring ring-red-400 @else border-white/30 @endif @error('nik') border-red-500 ring ring-red-400 @else border-white/30 @enderror focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                <div class="flex justify-between">
                                    <label
                                        class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Nik</label>
                                    @error('nik')
                                        <label
                                            class="text-xs font-medium text-muted-foreground text-red-500">{{ $message }}</label>
                                    @else
                                        @if ($isNikNull && $nik != null)
                                            <div class="absolute right-3 translate-y-2 text-red-200">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        @elseif($isNikNull == false && $nik != null && strlen($nik) == 10)
                                            <div class="absolute right-3 translate-y-2 text-green-200">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path fill-rule="evenodd"
                                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        @endif
                                    @enderror
                                </div>
                                <input wire:model.blur='nik' type="text" placeholder="2012345678" autocomplete="off"
                                    class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 leading-7 text-foreground">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div>
                            <div
                                class="group relative rounded-lg border @error('password') border-red-500 ring ring-red-400 @else border-white/30 @enderror focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                <div class="flex justify-between">
                                    <label
                                        class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                                    @error('password')
                                        <label
                                            class="text-xs font-medium text-muted-foreground text-red-500">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="flex items-center">
                                    <input wire:model.blur='password' type="password"
                                        class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 leading-7 text-foreground">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <label class="flex items-center gap-2">
                            <label class="relative">
                                <input wire:model='remember' type="checkbox"
                                    class="peer appearance-none w-3 h-3 bg-white rounded-full">
                                <div class="opacity-0 peer-checked:opacity-100 text-blue-500 absolute top-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                        fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                            <span class="text-xs select-none">Remember me</span>
                        </label>
                        <a class="select-none text-sm font-medium text-foreground underline"
                            href="/forgot-password">Forgot
                            password?</a>
                    </div>
                    <div class="select-none mt-4 flex items-center justify-end gap-x-2">
                        <a class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:ring hover:ring-white h-10 px-4 py-2 duration-200"
                            href="/register">Register</a>
                        <button
                            class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                            type="submit">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (session('error'))
        <div class="py-2 fixed top-0 w-full text-center text-white bg-red-500">Wrong credentials!</div>
    @endif
</div>
