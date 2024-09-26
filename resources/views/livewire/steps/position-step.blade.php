<div>
    @foreach(\App\Enums\PositionEnum::cases() as $position)
        <label class="flex gap-2 items-center">
            <input type="radio" value="{{ $position->value }}" wire:model="position_step.position">
            <span>{{ $position->value }}</span>
        </label>
    @endforeach
    @error('position_step.position')
    <div class="text-sm mt-1 text-red-500">{{ $message }}</div>
    @enderror
</div>