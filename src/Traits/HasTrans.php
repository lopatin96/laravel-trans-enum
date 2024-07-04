<?php

namespace Atin\LaravelTransEnum\Traits;

use function Symfony\Component\String\u;

trait HasTrans
{
    public function title(array $replace = []): ?string
    {
        return $this->trans($replace, 'title');
    }

    public function description(array $replace = []): ?string
    {
        return $this->trans($replace, 'description');
    }

    private function trans(array $replace = [], string $attribute): ?string
    {
        return trans($this->getKey($attribute), $replace);
    }

    private function getKey(string $attribute): ?string
    {
        return 'enums/'
            . str_replace('_', '-', u(class_basename(__CLASS__))->snake()->toString())
            . '.'
            . $this->value
            . ':'
            . $attribute;
    }
}
