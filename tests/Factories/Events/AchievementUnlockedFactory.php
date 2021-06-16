<?php

namespace Tests\Factories\Events;

use App\Domain\Experience\Events\AchievementUnlocked;
use App\Domain\Experience\ValueObjects\UserExperienceId;

class AchievementUnlockedFactory
{
    private string $email = 'test@spatie.be';

    private string $title;

    public static function new(): self
    {
        return new self();
    }

    public function create(): AchievementUnlocked
    {
        return new AchievementUnlocked(
            new UserExperienceId($this->email, null),
            $this->title,
        );
    }

    public function withEmail(string $email): self
    {
        $clone = clone $this;

        $clone->email = $email;

        return $clone;
    }

    public function withTitle(string $title): self
    {
        $clone = clone $this;

        $clone->title = $title;

        return $clone;
    }
}
