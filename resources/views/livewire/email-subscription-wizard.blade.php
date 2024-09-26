<div class="max-w-screen-sm w-full">
    @unless($subscribed)
        <ul class="flex gap-3">
            @foreach($this->steps() as $step)
                <li>
                    <button
                            type="button"
                            wire:key="pill-{{ $step->id() }}"
                            wire:click="toStep('{{ $step->id() }}')"
                            @if($step->isCurrent() || $step->isFuture() || $this->subscribed) disabled @endif
                            @class([
                                'px-1.5 py-0.5 text-sm rounded text-blue-900 font-medium',
                                'text-gray-500 cursor-not-allowed' => $step->isFuture() || $this->subscribed,
                                'text-blue-700 hover:text-blue-900' => $step->isPast(),
                                'bg-blue-100' => $step->isCurrent(),
                            ])
                    >
                        {{ $step->label() }}
                    </button>
                </li>
            @endforeach
        </ul>
    @endif
    <div class="mt-4 bg-white rounded-lg shadow-xl py-6 px-8">
        @unless($subscribed)
            <form wire:submit="proceed">
                <h1 class="text-2xl font-medium">Enter {{ $this->currentStep()->label() }}</h1>
                <div class="mt-5">
                    {{ $this->renderStep() }}
                </div>
                <div class="mt-5 pt-3 flex">
                    @if(!$this->isFirstStep())
                        <button type="button" wire:click="previousStep" class="font-medium text-gray-600 hover:text-gray-800 rounded py-2">
                            Previous step
                        </button>
                    @endif
                    <div class="flex-1"></div>
                    <button type="submit" class="border bg-blue-600 hover:bg-blue-800 font-medium text-white rounded px-4 py-2">
                        @if($this->isLastStep())
                            Subscribe
                        @else
                            Next
                        @endif
                    </button>
                </div>
            </form>
        @else
            <div>
                <h1 class="text-2xl font-medium">Thank you, {{ $name_step->first_name }}!</h1>
                <div class="mt-5">You are now subscribed</div>
            </div>
        @endif
    </div>
</div>