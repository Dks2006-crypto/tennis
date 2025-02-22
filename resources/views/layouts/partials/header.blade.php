@php
    use App\Models\Social;

    $siteSocial = Social::latest()->first();
@endphp

<header aria-label="Шапка сайта" class="py-[30px] border-b border-white absolute top-0 right-0 left-0" id="header">
    <x-container>
        <div class="flex items-center justify-between max-w-full">
            {{-- logo --}}
            <div aria-label="Логотип" class="">
                <a aria-label="На главную" href="{{ route('page.home') }}" class="">
                    <img width="95" height="25" src="{{ asset('images/Logo.svg') }}"
                        alt="Логотип сайта {{ config('app.name') }}" class="">
                        {{ $siteName ?? env('APP_NAME') }}
                </a>
            </div>
            {{-- end logo --}}
            {{-- navbar --}}
            <nav aria-label="Навигация" class="hidden md:block">
                <menu aria-label="Меню навигации" class="flex items-center gap-5">
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Главная" href="#!" class="font-medium text-white text-sm">Главная</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="О клубе" href="#!" class="font-medium text-white text-sm">О клубе</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Турниры" href="#!" class="font-medium text-white text-sm">Турниры</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Услуги" href="#!" class="font-medium text-white text-sm">Услуги</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Детский теннис" href="#!" class="font-medium text-white text-sm">Детский
                            теннис</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Галерея" href="#!" class="font-medium text-white text-sm">Галерея</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Цены" href="#!" class="font-medium text-white text-sm">Цены</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Контакты" href="#!" class="font-medium text-white text-sm">Контакты</a>
                    </li>
                </menu>
            </nav>
            {{-- end navbar --}}
            <div class="flex gap-4">
                <a href="{{ $siteSocial->youtube}}" class="flex items-center gap-3">
                    <img src="{{ asset('images/youtube.svg')}}" alt="">
                </a>
                <a href="{{ $siteSocial->vk}}" class="flex items-center gap-3">
                    <img src="{{ asset('images/vk.svg')}}" alt="">
                </a>
                @if (Route::has('login'))
                @auth
                    <a href="{{url('/dashboard')}}">Личный кабинет</a>
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
