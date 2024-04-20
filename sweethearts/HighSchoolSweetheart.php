<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return $this->firstLetter(strtoupper($name)) . ".";
    }

    public function initials(string $name): string
    {
        $words = explode(" ", $name);
        $initials = [];

        foreach ($words as $word) {
            $initials[] = $this->initial($word);
        }

        return implode(" ", $initials);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials_a = $this->initials($sweetheart_a);
        $initials_b = $this->initials($sweetheart_b);

        return <<<EXPECTED_HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $initials_a  +  $initials_b     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            EXPECTED_HEART;
    }
}
