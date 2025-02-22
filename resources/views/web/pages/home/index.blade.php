<x-base-layout>
    <x-slot:meta>
        <title>{{ $title ?? 'Название страницы' }} - {{ $site_name ?? config('app.name') }}</title>
        <meta name='title' content='{{ $meta_title ?? "meta-заголовок"}}'>
        <meta name="description" content='{{ $meta_description ?? "meta-описание"}}'>
        <meta name="keywords" content="{{ $meta_keywords ?? 'meta-вдоте'}}">
        <meta property="og:title" content='{{ $meta_og_title ?? "meta-заголовок"}}'/>
        <meta property="og:description" content='{{ $meta_og_description ?? "meta-описание"}}' />
    </x-slot:meta>
    @include('web.sections.intro.index')
    <livewire:contact-form />
 </x-base-layout>
