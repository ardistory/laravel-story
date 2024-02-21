<div class="w-full h-auto flex justify-center flex-wrap gap-[14px] mb-4">
    <div class="w-full md:w-[30%]">
        <div class="ring-1 ring-white p-2 rounded-md">
            <div class="flex gap-2 justify-between">
                <img class="w-28 h-28 rounded ring-1 ring-zinc-500 p-1"
                    src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
                <label class="flex flex-col items-center justify-center">
                    <div>
                        <span>Update Picture</span>
                        <input class="bg-white w-full mt-1 rounded-md text-black" type="file">
                    </div>
                </label>
            </div>
            <div class="mt-2">
                <label class="flex flex-col justify-between">
                    <span class="grow-[1]">Nik</span>
                    <div class="grow-[2]">
                        <input class="bg-zinc-400 w-full mt-1 rounded-md text-black outline-none px-2 py-1"
                            type="text" value="{{ Auth::user()->nik }}" disabled>
                    </div>
                </label>
            </div>
            <div class="mt-2">
                <label class="flex flex-col justify-between">
                    <span class="grow-[1]">Name</span>
                    <div class="grow-[2]">
                        <input class="bg-zinc-400 w-full mt-1 rounded-md text-black outline-none px-2 py-1"
                            type="text" value="{{ Auth::user()->name }}" disabled>
                    </div>
                </label>
            </div>
            <div class="mt-2">
                <div class="flex gap-2">
                    <div class="w-[70%]">
                        <span>Update Email</span>
                        <div>
                            <input
                                class="focus:ring focus:ring-indigo-500 transition duration-300 bg-white w-full mt-1 rounded-md text-black outline-none px-2 py-1"
                                type="text" placeholder="youremail@domain.com">
                        </div>
                    </div>
                    <div class="w-[30%]">
                        <span>Verify Code</span>
                        <div>
                            <input
                                class="focus:ring focus:ring-indigo-500 transition duration-300 bg-white w-full mt-1 rounded-md text-black outline-none px-2 py-1"
                                type="text" placeholder="***">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <label class="flex flex-col justify-between">
                    <span>Update Password</span>
                    <div>
                        <input
                            class="focus:ring focus:ring-indigo-500 transition duration-300 bg-white w-full mt-1 rounded-md text-black outline-none px-2 py-1"
                            type="text" placeholder="*********">
                    </div>
                </label>
            </div>
        </div>
        <div class="mt-2 rounded-md flex justify-center">
            <button class="px-2 py-1 bg-yellow-500 rounded-md w-full hover:bg-yellow-600">
                Save
            </button>
        </div>
    </div>
</div>
