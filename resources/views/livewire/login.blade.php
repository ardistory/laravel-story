<div class="flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
    <a href="https://edplebak.com/">
        <div class="text-foreground font-semibold text-2xl tracking-tighter mx-auto flex items-center gap-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                </svg>
            </div>
            edplebak
        </div>
    </a>
    <div class="relative mt-12 w-full max-w-lg sm:mt-10">
        <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"
            bis_skin_checked="1"></div>
        <div
            class="border text-card-foreground rounded-none border-b-border border-t-border bg-popover/30 dark:border-b-white/50 dark:border-t-white/50 dark:sm:border-b-white/20 dark:sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 sm:rounded-lg sm:border-white/20 sm:border-l-white/20 sm:border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
            <div class="flex flex-col p-6">
                <h3 class="text-xl font-semibold leading-6 tracking-tighter">Login</h3>
                <p class="mt-1.5 text-sm font-medium text-white/50">Welcome back, enter your credentials to continue.
                </p>
            </div>
            <div class="p-6 pt-0">
                <form wire:submit='login'>
                    <div>
                        <div>
                            <div
                                class="group relative rounded-lg border px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                <div class="flex justify-between">
                                    <label
                                        class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Nik</label>
                                    @error('nik')
                                        <label
                                            class="text-xs font-medium text-muted-foreground text-red-300">{{ $message }}</label>
                                    @enderror
                                </div>
                                <input wire:model='nik' type="text" name="nik" placeholder="2012345678"
                                    autocomplete="off"
                                    class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 file:rounded-full file:border-0 file:bg-accent file:px-4 file:py-2 file:font-medium placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div>
                            <div
                                class="group relative rounded-lg border px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                                <div class="flex justify-between">
                                    <label
                                        class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                                    @error('password')
                                        <label
                                            class="text-xs font-medium text-muted-foreground text-red-300">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="flex items-center">
                                    <input wire:model='password' type="password" name="password"
                                        class="block w-full border-0 bg-transparent p-0 text-sm file:my-1 placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 focus:ring-teal-500 sm:leading-7 text-foreground">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" aria-hidden="true" name="remember" tabindex="-1" value="on"
                                class="ml-2 select-none text-sm text-muted-foreground">Remember me</span>
                        </label>
                        <a class="text-sm font-medium text-foreground underline" href="/forgot-password">Forgot
                            password?</a>
                    </div>
                    <div class="mt-4 flex items-center justify-end gap-x-2">
                        <a class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:bg-white hover:text-black h-10 px-4 py-2"
                            href="/register">Register</a>
                        <button
                            class="hover:ring hover:ring-teal-500 transition duration-300 inline-flex items-center justify-center rounded-md text-sm font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                            type="submit">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="py-2 fixed top-0 w-full text-center text-white bg-red-500">Nik or password is wrong!</div>
    @if (session('error'))
    @endif
</div>
