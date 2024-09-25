<div class="flex flex-col">
    <label for="email_step.email" class="text-gray-700 font-medium">Email</label>
    <input wire:model="email_step.email" id="email_step.email" type="email" class="rounded max-w-64" required>
    @error('email_step.email')
    <div class="text-sm mt-1 text-red-500">{{ $message }}</div>
    @enderror
</div>