<?php

namespace Atin\LaravelTransEnum\Traits;

trait HasTrans
{
    public function trans($replace = [], $locale = null): ?string
    {
        return trans('enums/' . class_basename(__CLASS__) . '.' . $this->value, $replace, $locale);
    }
}