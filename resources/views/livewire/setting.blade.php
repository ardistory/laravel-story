<div class="w-full min-h-screen flex justify-center flex-wrap gap-[14px] mb-4">
    <div class="w-full md:w-[50%] ring-1 ring-white rounded-lg">
        <div class="p-2 flex justify-center">
            <img class="w-40 h-40 rounded ring-1 ring-zinc-500 p-1"
                src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
        </div>
    </div>
</div>
