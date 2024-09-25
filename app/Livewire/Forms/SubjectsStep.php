<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Satoved\LivewireSteps\Livewire\Forms\StepForm;

class SubjectsStep extends StepForm
{
    #[Validate(['required', 'array'])]
    public $subjects = [];

    public function render()
    {
        return view('livewire.steps.subjects-step');
    }
}
