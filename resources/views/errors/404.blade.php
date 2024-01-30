<x-app-layout title="404 Not Found">

    <div class="w-full h-screen flex gap-2 flex-col items-center justify-center">
        <div class="flex items-center gap-2">
            <div class="text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </div>
            404 Not Found
        </div>
        <div>
            <a href="{{ route('dashboard') }}" class="bg-indigo-500 hover:bg-indigo-600 rounded-full px-3 py-1">Back</a>
        </div>
    </div>

</x-app-layout>
