@php
    use App\Models\Settings;
    use App\Models\Social;

    $siteName = Settings::latest()->first()->name;

    $siteDesc = Settings::latest()->first()->description;
    $siteSocial = Social::latest()->first();
@endphp

<footer class="bg-green-600">
    <x-container>
        <div class="flex items-center justify-between px-3 py-6">
            <h2 class="text-5xl text-white font-bolt">{{ $siteName ?? env('APP_NAME') }}</h2>
            <p class="text-white text-4xl">{{ $siteDesc ?? 'Его нет' }}</p>
            <ul class="flex gap-3 text-2xl text-white">
                <li class="border-black rounded-full p-2 bg-black">
                    <a href="{{ $siteSocial->vk }}" class="p-2">Vk</a>
                </li>
                <li class="border-black rounded-full p-2 bg-black">
                    <a href="{{ $siteSocial->tg }}" class="p-2">Tg</a>
                </li>
                <li class="border-black rounded-full p-2 bg-black">
                    <a href="{{ $siteSocial->youtube}}" class="p-2">Youtube</a>
                </li>
                <li class="border-black rounded-full p-2 bg-black">
                    <a href="{{ $siteSocial->x}}" class="p-2">X</a>
                </li>
            </ul>
        </div>
    </x-container>
</footer>
