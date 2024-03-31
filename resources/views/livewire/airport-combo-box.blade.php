<div class="relative overflow-visible w-80">
    <x-input
        wire:model.live.debounce.100ms="input"
        id="{{ $id }}"
        name="{{ $name }}"
        type="text"
        placeholder="{{ $placeholder }}"
        class="w-full peer"
    />
    <div class="absolute hidden bg-white text-black w-full peer-focus:block hover:block focus:block">
    @foreach ($airports as $airport)
        <button type="button" value="{{ $airport->icao_id }}" class="w-full hover:bg-zinc-400 cursor-pointer" onclick="onClick(this)">
            {{ $airport->icao_id }} - {{ $airport->name }}
        </button>
    @endforeach
    </div>
    <script>

        document.getElementById('{{ $id }}-') // TODO

    </script>
</div>
