<?php

declare(strict_types=1);

namespace SergeyAntonov\OtusComposerPackage;

class Reverser
{
    public function execute(string $baseString): string
    {
        $resultString = "";
        for($i = mb_strlen($baseString, "UTF-8"); $i >= 0; $i--) {
            $resultString .= mb_substr($baseString, $i, 1, "UTF-8");
        }
        return $resultString;
    }
}