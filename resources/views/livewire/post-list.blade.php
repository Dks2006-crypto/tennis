<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ __('Название поста') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Статус') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('Проверка пройдена') }}
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr class="bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post->title }}
                    </th>
                    <td class="px-6 py-4">
                        @if ($post->is_active == true)
                            <span
                                class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 rounded-md bg-green-50 ring-1 ring-green-600/20 ring-inset">Активна</span>
                        @else
                            <span
                                class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-700 rounded-md bg-red-50 ring-1 ring-red-600/10 ring-inset">Не
                                активна</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($post->is_verificate == true)
                            <span
                                class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 rounded-md bg-green-50 ring-1 ring-green-600/20 ring-inset">Пройдена</span>
                        @else
                            <span
                                class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-700 rounded-md bg-red-50 ring-1 ring-red-600/10 ring-inset">На
                                проверке</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <button wire:click="deletePost({{ $post->id }})"
                            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                            Удалить
                        </button>
                    </td>
                </tr>
            @empty
                {{ __('Посты не найдены') }}
            @endforelse
        </tbody>
    </table>
</div>
