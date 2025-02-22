<div class="py-12">
        <x-container>
            @if (session()->has('message'))
                <div class="bg-red-500 text-black text-xl">
                    {{ session ("message")}}
                </div>
            @endif
            <form wire:submit.prevent='submit'class='text-center flex flex-col gap-6 items-center' >
                <div class="flex gap-5">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="surname">Введите Фамилию</label>
                    <input class="py-2 px-4 border-2 border-violet-400 rounded-full" type="text" Wire:model='surname' id="surname" placeholder="Дронов">
                    @error('surname') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex gap-5">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="name">Введите Фамилию</label>
                    <input class="py-2 px-4 border-2 border-violet-400 rounded-full" type="text" Wire:model='name' id="name" placeholder="Дрон">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex gap-5">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="fathername">Введите Отчество</label>
                    <input class="py-2 px-4 border-2 border-violet-400 rounded-full" type="text" Wire:model='fathername' id="fathername" placeholder="Дронович">
                    @error('fathername') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex gap-5">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="phoneNumber">Введите номер телефона</label>
                    <input class="py-2 px-4 border-2 border-violet-400 rounded-full" type="number" Wire:model='phoneNumber' id="phoneNumber" placeholder="+7846854654646846854654648546554">
                    @error('phoneNumber') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex gap-5">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="email">Введите email</label>
                    <input class="py-2 px-4 border-2 border-violet-400 rounded-full" type="mail" Wire:model='email' id="email" placeholder="Название@дрон.com">
                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="flex gap-5 items-center">
                    <label class="pr-5 py-2 px-5 bg-violet-400 rounded-full text-white w-3xs" for="message">Введите Комментарий</label>
                    <textarea class="py-2 px-4 border-2 border-violet-400 rounded-full" Wire:model='message' id="message" placeholder="Что-то вроде комментария"></textarea>
                    @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="py-2 px-4 text-xl font-semibold bg-violet-400 rounded-full text-white">Оставить заявку</button>
            </form>
        </x-container>
    </div>
