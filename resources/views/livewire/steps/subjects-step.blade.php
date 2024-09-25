<div>
    @foreach(['Laravel', 'Livewire', 'TailwindCSS', 'AlpineJS'] as $subject)
        <label class="flex gap-2 items-center">
            <input type="checkbox" value="{{ $subject }}" wire:model="subjects_step.subjects">
            <span>{{ $subject }}</span>
        </label>
    @endforeach
    @error('subjects_step.subjects')
    <div class="text-sm mt-1 text-red-500">{{ $message }}</div>
    @enderror
</div>