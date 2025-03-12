<header class="border-b border-gray-300 py-5">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('storage/bpx.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap hover:text-gray-800">ТрусБакс</span>
                </a>
            </div>
            <nav>
                <ul class="flex text-gray-400 text-lg gap-8">
                    <li class="">
                        <a href="{{ route('page.brand') }}" class="hover:text-gray-800 hover:font-semibold">Главная</a>
                    </li>
                    <li class="">
                        <a href="{{ route ("brand.index")}}" class="hover:text-gray-800 hover:font-semibold">Бренды</a>
                    </li>
                    <li class="">
                        <a href="{{ route('product.index') }}" class="hover:text-gray-800 hover:font-bold">Все продукты</a>
                    </li>

                </ul>
            </nav>
            <div class="flex gap-4">
                @if (Route::has('login'))
                @auth
                    <a href="{{route('logout')}}">Выйти</a>
                    @else
                    <a href="{{route('login')}}">Войти</a>
                    @if (Route::has('register'))
                    <a href="{{route('register')}}">Зарегаться</a>
                    @endif
                @endauth
            @endif
            </div>
        </div>
    </x-container>
</header>
