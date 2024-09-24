<form wire:submit="nextStep" class="max-w-screen-sm w-full">
    <ul class="flex gap-3">
        @foreach($this->steps() as $step)
            <li>
                <button
                        wire:key="{{ $step->id() }}"
                        @if($step->isPast()) wire:click="toStep('{{ $step->id() }}')" @endif
                        @if($step->isCurrent() || $step->isFuture()) disabled @endif
                        @class([
                            'text-gray-500 cursor-not-allowed' => $step->isFuture(),
                            'font-bold' => $step->isCurrent(),
                        ])
                >
                    {{ $step->label() }}
                </button>
            </li>
        @endforeach
    </ul>
    <div class="mt-4 bg-white rounded-lg shadow-xl p-6">
        <h1 class="text-lg font-bold">Enter {{ $this->currentStep()->label() }}</h1>
        <div>
            {{ $currentStepIndex }}
        </div>
        <div class="mt-5">
            {{ $this->renderStep() }}
        </div>
        <div class="mt-3 pt-3 border-t flex">
            @if(!$this->isFirstStep())
                <button type="button" wire:click="previousStep" class="font-medium text-gray-600 hover:text-gray-800 rounded py-2">
                    Previous step
                </button>
            @endif
            <div class="flex-1"></div>
            <button type="submit" class="border bg-blue-600 hover:bg-blue-800 font-medium text-white rounded px-4 py-2">
                Next
            </button>
        </div>
    </div>
</form>