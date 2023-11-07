<?php

namespace Atin\LaravelTransEnum\Traits;

trait HasTrans
{
    public function trans(): string
    {
        return trans('enums.' . $this->value);
    }
}