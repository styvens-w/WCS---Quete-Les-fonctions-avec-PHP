<?php

function writeSecretSentence(string $animal, string $element): string
{
    return "$animal s'incline face à $element";
}

echo writeSecretSentence("Le chat", "La terre");