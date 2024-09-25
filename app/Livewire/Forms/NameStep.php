<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Satoved\LivewireSteps\Livewire\Forms\StepForm;

class NameStep extends StepForm
{
    #[Validate(['required', 'string', 'min:2'])]
    public $first_name;

    #[Validate(['required', 'string', 'min:2'])]
    public $last_name;

    public function render()
    {
        return view('livewire.steps.name-step');
    }
}
