<?php

namespace App\Enums;

enum PositionEnum: string
{
    case BackendDeveloper = 'Backend Developer';
    case FrontendDeveloper = 'Frontend Developer';
    case FullStackDeveloper = 'Full-Stack Developer';

    /**
     * @return array<SubjectEnum>
     */
    public function subjectsOfInterest(): array
    {
        return match ($this) {
            self::BackendDeveloper => [
                SubjectEnum::Laravel,
            ],
            self::FrontendDeveloper => [
                SubjectEnum::TailwindCSS,
                SubjectEnum::AlpineJS,
            ],
            self::FullStackDeveloper => [
                SubjectEnum::TailwindCSS,
                SubjectEnum::AlpineJS,
                SubjectEnum::Laravel,
                SubjectEnum::Livewire,
            ],
        };
    }
}