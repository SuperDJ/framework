<?php

namespace Illuminate\Contracts\Validation;

interface InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke(string $attribute, mixed $value, \Closure|\Illuminate\Translation\PotentiallyTranslatedString $fail): void;
}
