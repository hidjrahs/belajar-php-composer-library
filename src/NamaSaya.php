<?php

namespace Hidjrah\BelajarPhpComposerLibrary;

class NamaSaya
{
    public function __construct(private string $name)
    {
    }

    public function namaSaya(string $name): string
    {
        return "Hai saya $name, Adapun nama saya $this->name";
    }
}