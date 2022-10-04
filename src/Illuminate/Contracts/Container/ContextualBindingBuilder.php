<?php

namespace Illuminate\Contracts\Container;

interface ContextualBindingBuilder
{
    /**
     * Define the abstract target that depends on the context.
     *
     * @param  string  $abstract
     * @return $this
     */
    public function needs(string $abstract): self;

    /**
     * Define the implementation for the contextual binding.
     *
     * @param  \Closure|string|array  $implementation
     * @return void
     */
    public function give(\Closure|string|array $implementation): void;

    /**
     * Define tagged services to be used as the implementation for the contextual binding.
     *
     * @param  string  $tag
     * @return void
     */
    public function giveTagged(string $tag): void;

    /**
     * Specify the configuration item to bind as a primitive.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return void
     */
    public function giveConfig(string $key, mixed $default = null): void;
}
