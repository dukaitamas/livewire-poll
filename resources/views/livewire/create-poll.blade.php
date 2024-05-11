<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form>
        <label>Poll Title</label>

        <input type="text" wire:model.live="title">
        {{-- wire:model.live="title" livewire syntax not html --}}
        Current title: {{ $title }}
        {{-- blade renders in the server not in the browser but it can be dynamic --}}
        <div class="mb-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label>Option {{ $index + 1 }}</label>
                    {{-- {{ $index }} - {{ $option }} --}}

                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />
                        <button class="btn"
                        wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

    </form>

</div>
