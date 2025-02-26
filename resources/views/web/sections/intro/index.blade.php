<section aria-labelledby="intro-title" aria-describedby="intro-description"
    class="w-full pt-[150px] md:pt-[200px] bg-no-repeat bg-cover bg-center bg-black"
    style="background-image: url({{ asset('images/intro-bg.png') }})">
    <x-container>
        <div class="w-full">
            {{-- начало колонки слева --}}
            <div class="flex flex-col">
                <h1 class="font-bold text-white text-[48px] leading-[64px] mb-[60px]"
                    id="intro-title">Петербургский <br>
                    теннисный клуб <br>
                    имени М.А. Пасечникова</h1>
                <div class="text-2xl font-normal text-white pb-[200px]">
                    <a href="" class="flex items-center gap-[30px]">
                        <img src="{{ asset('images/video.png') }}" alt="">
                        <p class="text-[18px] font-semibold">Посмотрите видео <br> о нашем клубе</p>
                    </a>
                </div>
                <div class="grid grid-cols-4 gap-[12px] pb-10">
                    <div class="p-[35px] bg-violet-400 rounded-[10px]">
                        <p class="">Услуги</p>
                        <div class="flex items-center justify-between">
                            <h3 class="">Аренда корта</h3>
                            <a href="" class="">
                                <img src="{{ asset('images/link.svg')}}" alt="" class="">
                            </a>
                        </div>
                    </div>
                    <div class="p-[35px] bg-violet-400 rounded-[10px]">
                        <p class="">Услуги</p>
                        <div class="flex items-center justify-between">
                            <h3 class="">Детский теннис</h3>
                            <a href="" class="">
                                <img src="{{ asset('images/link.svg')}}" alt="" class="">
                            </a>
                        </div>
                    </div>
                    <div class="p-[35px] bg-violet-400 rounded-[10px]">
                        <p class="">Услуги</p>
                        <div class="flex items-center justify-between">
                            <h3 class="">Сборы команд</h3>
                            <a href="" class="">
                                <img src="{{ asset('images/link.svg')}}" alt="" class="">
                            </a>
                        </div>
                    </div>
                    <div class="p-[35px] bg-violet-400 rounded-[10px]">
                        <p class="">Услуги</p>
                        <div class="flex items-center justify-between">
                            <h3 class="">Расписание</h3>
                            <a href="" class="">
                                <img src="{{ asset('images/link.svg')}}" alt="" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</section>
