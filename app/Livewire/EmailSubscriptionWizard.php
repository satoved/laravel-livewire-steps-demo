<?php

namespace App\Livewire;

use App\Livewire\Forms\EmailStep;
use App\Livewire\Forms\NameStep;
use App\Livewire\Forms\SubjectsStep;
use Livewire\Component;
use Satoved\LivewireSteps\Livewire\WizardComponent;

class EmailSubscriptionWizard extends WizardComponent
{
    public NameStep $nameStep;
    public EmailStep $emailStep;
    public SubjectsStep $subjectsStep;

    public function render()
    {
        return view('livewire.email-subscription-wizard');
    }
}
