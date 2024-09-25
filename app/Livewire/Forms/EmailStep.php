<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Satoved\LivewireSteps\Livewire\Forms\StepForm;

class EmailStep extends StepForm
{
    #[Validate('required', 'email')]
    public $email;

    public function render()
    {
        return view('livewire.steps.email-step');
    }
}
