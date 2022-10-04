<?php

namespace Illuminate\Contracts\Auth;

interface Factory
{
    /**
     * Get a guard instance by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
     */
    public function guard(string|null $name = null): \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard;

    /**
     * Set the default guard the factory should serve.
     *
     * @param  string  $name
     * @return void
     */
    public function shouldUse(string $name): void;
}
