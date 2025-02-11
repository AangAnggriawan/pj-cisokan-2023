<div class="p-4 fixed z-50 w-full top-0 flex justify-between items-center text-center drop-shadow-lg bg-white border-b-2 border-slate-500">
    <button id="toggleSidebar" class="flex flex-col gap-1 px-2 py-2 bg-white rounded-md">
        <span class="h-[4px] w-6 bg-black transition-all duration-500"></span>
        <span class="h-[4px] w-6 bg-black transition-all duration-500"></span>
        <span class="h-[4px] w-6 bg-black transition-all duration-500"></span>
    </button>
    <h1 class="font-bold text-2xl text-slate-700">
        <span class="text-blue-600">GRM PLT </span><span id="pumped">PUMPED STORAGE</span>
    </h1>
    <div class="flex gap-4">
        <p id="haloUser" class="text-lg font-semibold text-slate-600">
            {{-- Hi,<span class="text-blue-600">
                @if(session()->has('logged','id_petugas'))
                {{$user->username}}
                @endif
            </span> --}}
        </p>
        <button x-on:click="show = !show" class="flex items-center gap-2 focus:outline-none">
            <div class="w-7 h-7 rounded-full bg-white border border-slate-600 overflow-hidden">
                <i class="fa-solid fa-user-large text-2xl"></i>
            </div>
            <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute top-16 p-2 rounded bg-white border border-blue-400 right-2">
            <a href="{{route('logout')}}" class="flex items-center gap-2 focus:outline-none hover:no-underline">
                <button class="text-lg font-semibold focus:outline-none">
                    <i class="fa-solid fa-arrow-right-from-bracket text-lg"></i>
                    Logout
                </button>
            </a>
        </div>
    </div>
</div>