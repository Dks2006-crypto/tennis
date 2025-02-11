<section aria-labelledby="intro-title" aria-describedby="intro-description"
    class="w-full pt-[150px] md:pt-[200px] bg-no-repeat bg-cover bg-center"
    style="background-image: url({{ asset('images/intro-bg.webp') }})">
    <x-container>
        <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-3 pb-12 md:pb-[96px]">
            {{-- начало колонки слева --}}
            <div class="grid col-span-1 gap-y-6 md:col-span-2">
                <h1 class="font-bold text-white text-[52px] leading-[64px] md:text-[80px] md:leading-[88px]"
                    id="intro-title">Cultivating a Greener Future, One Farm at a Time</h1>
                <div class="text-2xl font-normal text-white">
                    <p id="intro-description">EcoCrop combines sustainability with technology to empower farms and
                        protect the planet. Discover the future of eco-friendly agriculture today.</p>
                </div>
                <ul class="flex gap-4">
                    <li class="inline-flex">
                        <a aria-label="Get Started" href="" class="bg-green-700 flex items-center gap-3 text-center text-white rounded-full px-[30px] py-[12px] border border-green-700 font-semibold">
                            Get Started
                            <span class="w-[20px] h-[20px] rounded-full bg-white flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="text-green-700 size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a aria-label="How it Works" href="" class="bg-white flex items-center gap-3 text-center text-green-700 rounded-full px-[30px] py-[12px] border border-green-700 font-semibold">
                            How it Works
                            <span class="w-[20px] h-[20px] rounded-full bg-green-700 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="text-white size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- конец колонки слева --}}
            {{-- начало колонки справа --}}
            <div class="flex flex-col ">
                <ul class="flex flex-wrap gap-3 mt-auto">
                    <li class="inline-flex">
                        <div class="px-3 py-2 text-center text-white border border-white rounded-full whitespace-nowrap">Green Technology</div>
                    </li>
                    <li class="inline-flex">
                        <div class="px-3 py-2 text-center text-white border border-white rounded-full whitespace-nowrap">Innovative Agriculture</div>
                    </li>
                    <li class="inline-flex">
                        <div class="px-3 py-2 text-center text-white border border-white rounded-full whitespace-nowrap">Eco Friendly</div>
                    </li>
                    <li class="inline-flex">
                        <div class="px-3 py-2 text-center text-white border border-white rounded-full whitespace-nowrap">Green Technology</div>
                    </li>
                </ul>
            </div>
            {{-- конец колонки справа --}}
        </div>
    </x-container>
    <div class="bg-green-700 py-[64px]">
        <x-container>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-4 md:gap-[120px] text-white">
                <div class="grid gap-y-[14px]">
                    <h2 class="text-5xl font-semibold">28+</h2>
                    <h3 class="text-xl font-normal">Year of Experience</h3>
                </div>
                <div class="grid gap-y-[14px]">
                    <h2 class="text-5xl font-semibold">188+</h2>
                    <h3 class="text-xl font-normal">Field in Progress</h3>
                </div>
                <div class="grid gap-y-[14px]">
                    <h2 class="text-5xl font-semibold">120,000+</h2>
                    <h3 class="text-xl font-normal">Farmer Around the World</h3>
                </div>
                <div class="grid gap-y-[14px]">
                    <h2 class="text-5xl font-semibold">$12 Bilion</h2>
                    <h3 class="text-xl font-normal">AgricultureProfit</h3>
                </div>
            </div>
        </x-container>
    </div>
</section>
