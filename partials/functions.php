<?php

function generatePassword(int $selected_length, string $pw_chars)
{
    $newPsw = '';

    for ($i = 0; $i <= $selected_length; $i++) {
        $ran = rand(0, strlen($pw_chars) - 1);
        $newChar = $pw_chars[$ran];
        $newPsw .= $newChar;
    }

    return $newPsw;
}
