<?php

class Lasagna
{
    public function expectedCookTime(): int
    {
        return 40;
    }

    public function remainingCookTime($elapsed_minutes): int
    {
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep * 2;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes): int
    {
        return $elapsed_minutes + $this->totalPreparationTime($layers_to_prep);
    }

    public function alarm(): string
    {
        return "Ding!";
    }
}