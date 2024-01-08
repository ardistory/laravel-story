<div class="px-10 w-full h-[80%] mt-[6%]">
    <x-header title="Dashboard"></x-header>
    <div class="flex gap-2 mt-4">
        <div class="w-1/2 h-[407px] rounded-2xl flex">
            <div class="w-full h-full border rounded-2xl relative">
                <div class="flex justify-between items-center h-[15%] px-4">
                    <div class="top-5 left-5 font-semibold text-2xl flex items-center gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                            </svg>
                        </div>
                        Data Store
                    </div>
                    <div class="flex items-center top-5 right-5">
                        <div class="bg-white text-black py-1 px-2 rounded-l-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <input class="outline-none py-1 px-2 rounded-r-full text-black" type="text" name="search"
                            placeholder="Store Code ex.TKBV">
                    </div>
                </div>
                <div class="w-full h-[80%] px-5">
                    <x-table-toko></x-table-toko>
                </div>
            </div>
        </div>
        <div class="w-1/2 h-[400px] rounded-2xl flex flex-col gap-2">
            <div class="w-full h-[200px] flex gap-2">
                <div class="w-1/2 h-[200px] border rounded-2xl">
                    <x-add-mac></x-add-mac>
                </div>
                <div class="w-1/2 h-[200px] border rounded-2xl">
                    <x-list-mac></x-list-mac>
                </div>
            </div>
            <div class="w-full h-1/2 flex gap-2">
                <div class="w-1/2 h-[200px] border rounded-2xl">
                    <x-registration-table></x-registration-table>
                </div>
                <div class="w-1/2 h-[200px] border rounded-2xl">
                    <x-default-authentication></x-default-authentication>
                </div>
            </div>
        </div>
    </div>

</div>
