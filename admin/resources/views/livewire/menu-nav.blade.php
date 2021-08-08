<div x-data="{ openMenu: true }">
    <div class="w-full bg-white p-1 px-6 drop-shadow flex items-center">
        <a  href="{{route('dashboard')}}" alt="Dashboard">
            <img src="{{asset('images/logo.svg')}}" alt="logo" class="w-20">
        </a>
        <div class="text-3xl ml-4 text-yellow-500 cursor-default whitespace-nowrap">
            {{$loja->trading_name}}
        </div>
        <div class="ml-auto md:hidden">
            <button @click="openMenu = ! openMenu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': openMenu, 'inline-flex': ! openMenu }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! openMenu, 'inline-flex': openMenu }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div x-show="openMenu" class="bg-white py-3 mb-2 flex flex-col flex-wrap sm:flex-row">
            @foreach($menus as $menu)
                <a class="px-3 pt-2 pb-1 text-1xl align-bottom font-medium border-b-2 border-yellow-500 mx-3 hover:border-red-500 transition-all duration-700 cursor-pointer block text-center mb-3 md:inline md:w-1/12 rounded" href="{{route($menu->route_name)}}" alt="{{$menu->description}}">
                    {{$menu->name}}
                </a>
            @endforeach
    </div>
</div>
