<div x-data="{ open: false }">
    <div class="w-full bg-white p-1 px-6 drop-shadow flex items-center">
        <div class="logo">
            <img src="{{asset('images/logo.svg')}}" alt="logo" class="w-20">
        </div>
        <div class="ml-auto">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div x-show="open" class="bg-white " :class="{ 'animate__animated animate__fadeIn': open}">
            @foreach($menus as $menu)
                <a class="px-3 pt-2 text-1xl align-bottom font-medium border-b-2 border-yellow-500 mx-3 hover:border-red-500 transition-all duration-700 cursor-pointer block text-center sm:inline">
                    {{$menu->name}}
                </a>
            @endforeach
    </div>
</div>
