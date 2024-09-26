<?php

namespace App\Livewire;

use App\Enums\PositionEnum;
use App\Enums\SubjectEnum;
use App\Livewire\Forms\EmailStep;
use App\Livewire\Forms\NameStep;
use App\Livewire\Forms\PositionStep;
use App\Livewire\Forms\SubjectsStep;
use Satoved\LivewireSteps\Livewire\WizardComponent;

class EmailSubscriptionWizard extends WizardComponent
{
    public NameStep $name_step;
    public EmailStep $email_step;
    public PositionStep $position_step;
    public SubjectsStep $subjects_step;

    public $subscribed = false;

    public function proceed()
    {
        $this->currentStep()->validate();

        if ($this->isLastStep()) {
            $this->subscribed = true;
            return;
        }

        $this->nextStep();
    }

    public function updatedPositionStepPosition(PositionEnum $position)
    {
        $this->subjects_step->subjects = array_map(
            fn (SubjectEnum $subjectEnum) => $subjectEnum->value,
            $position->subjectsOfInterest(),
        );
    }

    public function render()
    {
        return view('livewire.email-subscription-wizard');
    }
}
