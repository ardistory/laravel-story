<div class="px-10 w-full h-[80%] mt-[120px] md:mt-[90px]">
    <x-header title="Dashboard"></x-header>
    <div class="flex flex-col md:flex md:flex-row gap-2 mt-4">
        <div class="w-full md:w-1/2 @if (Auth::user()->role->level != 3) md:w-full @endif h-[407px] rounded-2xl flex">
            <livewire:table-toko>
        </div>
        <div
            class="@if (Auth::user()->role->level != 3) hidden @endif w-full md:w-1/2 h-auto md:h-[400px] rounded-2xl flex flex-col md:gap-2 gap-48">
            <div class="w-full h-[200px] flex flex-col gap-2 md:flex md:flex-row">
                <div
                    class="w-full md:w-1/2 h-[200px] border rounded-2xl relative hover:ring hover:ring-blue-500 transition duration-300">
                    <livewire:add-mac>
                </div>
                <div
                    class="w-full md:w-1/2 h-[200px] border rounded-2xl hover:ring hover:ring-blue-500 transition duration-300">
                    <livewire:list-mac>
                </div>
            </div>
            <div class="w-full h-1/2 gap-2 flex flex-col md:flex md:flex-row">
                <div
                    class="w-full md:w-1/2 h-[200px] border rounded-2xl hover:ring hover:ring-blue-500 transition duration-300">
                    <livewire:registration-table>
                </div>
                <div
                    class="w-full md:w-1/2 h-[200px] border rounded-2xl hover:ring hover:ring-blue-500 transition duration-300">
                    <livewire:default-authentication>
                </div>
            </div>
        </div>
    </div>
</div>
