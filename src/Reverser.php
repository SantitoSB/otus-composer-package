<?php

declare(strict_types=1);

namespace SergeyAntonov\OtusComposerPackage;

class Reverser
{
    public function execute(string $baseString): string
    {
        return strrev($baseString);
    }
}