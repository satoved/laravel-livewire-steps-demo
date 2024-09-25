<div class="flex flex-col gap-3">
    <div class="flex flex-col">
        <label for="name_step.first_name" class="text-gray-700 font-medium">First name</label>
        <input wire:model="name_step.first_name" id="name_step.first_name" type="text" class="rounded max-w-64" required>
        @error('name_step.first_name')
        <div class="text-sm mt-1 text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="name_step.last_name" class="text-gray-700 font-medium">Last name</label>
        <input wire:model="name_step.last_name" id="name_step.last_name" type="text" class="rounded max-w-64" required>
        @error('name_step.last_name')
        <div class="text-sm mt-1 text-red-500">{{ $message }}</div>
        @enderror
    </div>
</div>