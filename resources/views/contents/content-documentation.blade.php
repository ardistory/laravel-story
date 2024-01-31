<div class="px-10 w-full h-[80%] mt-[120px] md:mt-[90px]">
    <x-header title="Documentation"></x-header>
    <div class="mt-4 flex flex-col md:flex-wrap md:flex-row md:justify-between">
        <div
            class="hover:ring hover:ring-blue-500 transition duration-300 w-full md:w-[49%]  min-h-24 mb-5 md:min-h-screen border rounded-xl">
            <div class="flex gap-2 p-5 border-b">
                <div>
                    <img class="w-10 h-10 rounded-full" src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold inline-flex items-center gap-2">
                        Ardiansyah Putra
                        <div>
                            <svg class="size-4 sm:size-[1.05rem] h-3.5 -ml-1" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.9982 2C12.2154 2 12.4219 2.09415 12.5643 2.25809L14.738 4.75988L18.0113 4.24063C18.2258 4.20661 18.4445 4.26724 18.6109 4.40684C18.7773 4.54644 18.875 4.75131 18.8787 4.96846L18.9357 8.28218L21.777 9.98844C21.9632 10.1003 22.0918 10.2873 22.1295 10.5012C22.1672 10.7151 22.1103 10.9348 21.9736 11.1035L19.8873 13.6787L20.967 16.812C21.0378 17.0174 21.0161 17.2433 20.9075 17.4314C20.7989 17.6195 20.6141 17.7513 20.4009 17.7926L17.1474 18.4242L15.9605 21.5186C15.8827 21.7214 15.7208 21.8805 15.5167 21.9548C15.3126 22.0291 15.0864 22.0112 14.8965 21.9059L11.9982 20.2984L9.09989 21.9059C8.90996 22.0112 8.68369 22.0291 8.47961 21.9548C8.27552 21.8805 8.11365 21.7214 8.03587 21.5186L6.84891 18.4242L3.59544 17.7926C3.38224 17.7513 3.19745 17.6195 3.08885 17.4314C2.98026 17.2433 2.95853 17.0174 3.02929 16.812L4.10905 13.6787L2.02273 11.1035C1.88601 10.9348 1.82915 10.7151 1.86687 10.5012C1.90458 10.2873 2.03316 10.1003 2.21935 9.98844L5.06059 8.28218L5.11763 4.96846C5.12137 4.75131 5.21906 4.54644 5.38543 4.40684C5.55181 4.26724 5.77053 4.20661 5.98503 4.24063L9.25831 4.75988L11.432 2.25809C11.5745 2.09415 11.781 2 11.9982 2ZM15.0285 11.2803C15.3214 10.9874 15.3214 10.5126 15.0285 10.2197C14.7356 9.92678 14.2607 9.92678 13.9678 10.2197L10.9982 13.1893L10.0285 12.2197C9.73561 11.9268 9.26073 11.9268 8.96784 12.2197C8.67495 12.5126 8.67495 12.9874 8.96784 13.2803L10.4678 14.7803C10.6085 14.921 10.7993 15 10.9982 15C11.1971 15 11.3879 14.921 11.5285 14.7803L15.0285 11.2803Z"
                                    fill="#1d9bf0"></path>
                            </svg>
                        </div>
                    </span>
                    <span class="text-xs">10 minute ago</span>
                </div>
            </div>
            <div class="p-5">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. A sit et excepturi quasi harum non omnis
                officia fugiat voluptatibus? Labore, repellendus quo dicta tempora quos sint facere, voluptatum nesciunt
                nostrum sapiente nemo accusantium non repellat velit placeat in ipsam explicabo!
            </div>
            <div class="border mx-5 mb-5 h-auto">
                <img src="{{ asset('storage/img/profile/' . Auth::user()->picture) }}">
            </div>
        </div>
    </div>
</div>
