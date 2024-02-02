<div>
    <div x-data="{ addDocumentation: false }" class="mb-4">
        <button x-on:click="addDocumentation = !addDocumentation"
            class="flex items-center gap-2 ring-1 ring-white px-3 py-1 rounded-lg hover:bg-white hover:text-black font-semibold">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            Post Documentation
        </button>
        <div x-show="addDocumentation"
            class="fixed left-0 top-0 backdrop-blur-sm flex items-center justify-center w-full min-h-screen">
            <div x-on:click.away='addDocumentation = false' class="bg-black shadow-sm shadow-white rounded-lg">
                <div class="flex items-center gap-2 font-semibold p-5 border-b">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    Add Documentation
                </div>
                <div class="p-5 flex flex-col gap-2 border-b">
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                    </svg>
                                </div>
                                Title <span class="text-red-500">*</span>
                            </div>
                            @error('title')
                                <div class="text-xs text-red-500 flex items-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input wire:model.blur='title' class="text-black outline-none px-3 py-1 rounded-lg"
                            type="text" placeholder="Title">
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                            </div>
                            Description
                        </div>
                        <textarea wire:model='description' class="text-black outline-none px-3 py-1 rounded-lg" rows="5"
                            placeholder="Description"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </div>
                                Picture <span class="text-red-500">*</span>
                            </div>
                            @error('picture')
                                <div class="text-xs text-red-500 flex items-center">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input wire:model.blur='picture' class="text-black bg-white outline-none rounded-lg"
                            type="file" placeholder="Title">
                    </div>
                </div>
                <div class="p-5 flex justify-end">
                    <button wire:click='postDocumentation'
                        class="ring-1 ring-white hover:ring px-3 py-1 rounded-md transition duration-300">Post</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-5">
        @foreach ($data as $dt)
            <div wire:key='{{ $dt['id'] }}'
                class="hover:ring hover:ring-blue-500 transition duration-300 w-full md:w-[49%] min-h-24 md:mb-0 md:min-h-screen border rounded-xl">
                <div class="flex gap-2 p-5 border-b">
                    <div>
                        <img class="w-10 h-10 rounded-full" src="{{ asset('storage/img/profile/' . $dt['picture']) }}">
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold inline-flex items-center gap-2">
                            {{ $dt['name'] }}
                            @if ($dt['role_level'] == 3)
                                <div>
                                    <svg class="size-4 sm:size-[1.05rem] h-3.5 -ml-1" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9982 2C12.2154 2 12.4219 2.09415 12.5643 2.25809L14.738 4.75988L18.0113 4.24063C18.2258 4.20661 18.4445 4.26724 18.6109 4.40684C18.7773 4.54644 18.875 4.75131 18.8787 4.96846L18.9357 8.28218L21.777 9.98844C21.9632 10.1003 22.0918 10.2873 22.1295 10.5012C22.1672 10.7151 22.1103 10.9348 21.9736 11.1035L19.8873 13.6787L20.967 16.812C21.0378 17.0174 21.0161 17.2433 20.9075 17.4314C20.7989 17.6195 20.6141 17.7513 20.4009 17.7926L17.1474 18.4242L15.9605 21.5186C15.8827 21.7214 15.7208 21.8805 15.5167 21.9548C15.3126 22.0291 15.0864 22.0112 14.8965 21.9059L11.9982 20.2984L9.09989 21.9059C8.90996 22.0112 8.68369 22.0291 8.47961 21.9548C8.27552 21.8805 8.11365 21.7214 8.03587 21.5186L6.84891 18.4242L3.59544 17.7926C3.38224 17.7513 3.19745 17.6195 3.08885 17.4314C2.98026 17.2433 2.95853 17.0174 3.02929 16.812L4.10905 13.6787L2.02273 11.1035C1.88601 10.9348 1.82915 10.7151 1.86687 10.5012C1.90458 10.2873 2.03316 10.1003 2.21935 9.98844L5.06059 8.28218L5.11763 4.96846C5.12137 4.75131 5.21906 4.54644 5.38543 4.40684C5.55181 4.26724 5.77053 4.20661 5.98503 4.24063L9.25831 4.75988L11.432 2.25809C11.5745 2.09415 11.781 2 11.9982 2ZM15.0285 11.2803C15.3214 10.9874 15.3214 10.5126 15.0285 10.2197C14.7356 9.92678 14.2607 9.92678 13.9678 10.2197L10.9982 13.1893L10.0285 12.2197C9.73561 11.9268 9.26073 11.9268 8.96784 12.2197C8.67495 12.5126 8.67495 12.9874 8.96784 13.2803L10.4678 14.7803C10.6085 14.921 10.7993 15 10.9982 15C11.1971 15 11.3879 14.921 11.5285 14.7803L15.0285 11.2803Z"
                                            fill="#1d9bf0"></path>
                                    </svg>
                                </div>
                            @endif
                        </span>
                        <span class="text-xs">{{ $dt['updated_at'] }}</span>
                    </div>
                </div>
                <div class="p-5">
                    <span class="font-bold">{{ $dt['title'] }}</span>
                    <div class="text-xs">{{ $dt['description'] }}</div>
                </div>
                <div class="border mx-5 mb-5 h-auto">
                    <img class="w-full h-auto" src="{{ asset('storage/img/documentation/' . $dt['doc_picture']) }}">
                </div>
            </div>
        @endforeach
    </div>
</div>
