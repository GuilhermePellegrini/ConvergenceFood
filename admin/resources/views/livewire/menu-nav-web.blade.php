<div x-data="{ openMenu: false }">
    <div class="w-full bg-white p-1 px-6 flex items-center flex-wrap sm:flex-nowrap">
        <a href="{{route('dashboard')}}" alt="Dashboard" class="hidden sm:flex">
            <img src="{{asset('images/logo.svg')}}" alt="logo" class="w-20">
        </a>
        <div class="text-3xl sm:ml-4 text-yellow-500 cursor-default whitespace-nowrap">
            {{config('app.name', 'Convergence Food')}}
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
    <div class="w-full hidden md:flex bg-white">
        <div class="mx-6 p-2 py-4 border-t w-full h-auto flex flex-wrap">
            <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('home')}}" alt="Incio">
                Home
            </a>
            <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('home')}}" alt="planos">
                Planos
            </a>
            <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('register')}}" alt="planos">
                Registre-se
            </a>
            <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3 ml-auto" href="{{route('login')}}" alt="login">
                Login
            </a>
        </div>
    </div>
    <div x-show="openMenu" class="bg-white py-3 mb-2 flex flex-col flex-wrap sm:flex-row sm:hidden">
        <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('home')}}" alt="Incio">
            Home
        </a>
        <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('home')}}" alt="planos">
            Planos
        </a>
        <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('register')}}" alt="planos">
            Registre-se
        </a>
        <a class="px-3 p-2 text-1xl align-middle font-semibold transition-all duration-700 cursor-pointer text-center rounded hover:bg-gray-300 hover:bg-opacity-60 mr-3" href="{{route('login')}}" alt="login">
            Login
        </a>
    </div>
</div>
