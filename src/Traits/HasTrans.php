<?php

namespace Atin\LaravelTransEnum\Traits;

use function Symfony\Component\String\u;

trait HasTrans
{
    public function trans($replace = [], $locale = null): ?string
    {
        return trans($this->getKey(), $replace, $locale);
    }

    public function getKey(): ?string
    {
        return 'enums/' . u(class_basename(__CLASS__))->snake()->toString() . '.' . $this->value;
    }
}