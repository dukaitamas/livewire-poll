<div>
    {{-- The best athlete wants his opponent at his best. --}}

@forelse ($polls as $poll )
<div class="mb-4">
<h3 class="mb-4 text-xl">
    {{ $poll->title}}
</h3>
@foreach ($poll->options as $option)
<div class="mb-2">
    <button class="btn" wire.click="vote({{$option->id}})">Vote</button>
                    {{-- vote method called in wire.click="vote()" --}}
    {{$option->name}} ({{ $option->votes->count()}})
</div>
@endforeach

</div>
@empty
 <div class="text-gray-500">No polls available</div>
@endforelse

</div>
