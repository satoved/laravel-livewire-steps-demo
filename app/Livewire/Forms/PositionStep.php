<?php

namespace App\Livewire\Forms;

use App\Enums\PositionEnum;
use Livewire\Attributes\Validate;
use Satoved\LivewireSteps\Livewire\Forms\StepForm;

class PositionStep extends StepForm
{
    #[Validate(['required'])]
    public PositionEnum $position;

    public function render()
    {
        return view('livewire.steps.position-step');
    }
}
