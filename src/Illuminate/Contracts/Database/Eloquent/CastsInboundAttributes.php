<?php

namespace Illuminate\Contracts\Database\Eloquent;

interface CastsInboundAttributes
{
    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set(\Illuminate\Database\Eloquent\Model $model, string $key, mixed $value, array $attributes): mixed;
}
