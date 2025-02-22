<div>
    <form wire:submit="save">
        <div>
            <input type="text" wire:model="title" id="title">
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div>
            <textarea id="description" wire:model="description" cols="30" rows="10"></textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div>
            <textarea id="content" cols="30" wire:model="content" rows="10"></textarea>
            @error('content')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label>
                <input type="checkbox" wire:model="is_active"> Активна
            </label>
        </div>
        <button type="submit">Сохранить</button>
    </form>
</div>
