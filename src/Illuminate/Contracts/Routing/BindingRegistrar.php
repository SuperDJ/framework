<?php

namespace Illuminate\Contracts\Routing;

interface BindingRegistrar
{
    /**
     * Add a new route parameter binder.
     *
     * @param  string  $key
     * @param  string|callable  $binder
     * @return void
     */
    public function bind(string $key, string|callable $binder): void;

    /**
     * Get the binding callback for a given binding.
     *
     * @param  string  $key
     * @return \Closure
     */
    public function getBindingCallback(string $key): \Closure;
}
