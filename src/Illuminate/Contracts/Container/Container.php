<?php

namespace Illuminate\Contracts\Container;

use Closure;
use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    /**
     * Determine if the given abstract type has been bound.
     *
     * @param  string  $abstract
     * @return bool
     */
    public function bound(string $abstract): bool;

    /**
     * Alias a type to a different name.
     *
     * @param  string  $abstract
     * @param  string  $alias
     * @return void
     *
     * @throws \LogicException
     */
    public function alias(string $abstract, string $alias): void;

    /**
     * Assign a set of tags to a given binding.
     *
     * @param  array|string  $abstracts
     * @param  array|mixed  ...$tags
     * @return void
     */
    public function tag(array|string $abstracts, mixed $tags): void;

    /**
     * Resolve all of the bindings for a given tag.
     *
     * @param  string  $tag
     * @return iterable
     */
    public function tagged(string $tag): iterable;

    /**
     * Register a binding with the container.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @param  bool  $shared
     * @return void
     */
    public function bind(string $abstract, Closure|string $concrete = null, bool $shared = false): void;

    /**
     * Bind a callback to resolve with Container::call.
     *
     * @param  array|string  $method
     * @param  \Closure  $callback
     * @return void
     */
    public function bindMethod(array|string $method, Closure $callback): void;

    /**
     * Register a binding if it hasn't already been registered.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @param  bool  $shared
     * @return void
     */
    public function bindIf(string $abstract, Closure|string|null $concrete = null, bool $shared = false): void;

    /**
     * Register a shared binding in the container.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @return void
     */
    public function singleton(string $abstract, Closure|string|null $concrete = null): void;

    /**
     * Register a shared binding if it hasn't already been registered.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @return void
     */
    public function singletonIf(string $abstract, Closure|string|null $concrete = null): void;

    /**
     * Register a scoped binding in the container.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @return void
     */
    public function scoped(string $abstract, Closure|string|null $concrete = null): void;

    /**
     * Register a scoped binding if it hasn't already been registered.
     *
     * @param  string  $abstract
     * @param  \Closure|string|null  $concrete
     * @return void
     */
    public function scopedIf(string $abstract, Closure|string|null $concrete = null): void;

    /**
     * "Extend" an abstract type in the container.
     *
     * @param  string  $abstract
     * @param  \Closure  $closure
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function extend(string $abstract, Closure $closure): void;

    /**
     * Register an existing instance as shared in the container.
     *
     * @param  string  $abstract
     * @param  mixed  $instance
     * @return mixed
     */
    public function instance(string $abstract, mixed $instance): mixed;

    /**
     * Add a contextual binding to the container.
     *
     * @param  string  $concrete
     * @param  string  $abstract
     * @param  \Closure|string  $implementation
     * @return void
     */
    public function addContextualBinding(string $concrete, string $abstract, Closure|string $implementation): void;

    /**
     * Define a contextual binding.
     *
     * @param  string|array  $concrete
     * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
     */
    public function when(string|array $concrete): \Illuminate\Contracts\Container\ContextualBindingBuilder;

    /**
     * Get a closure to resolve the given type from the container.
     *
     * @param  string  $abstract
     * @return \Closure
     */
    public function factory(string $abstract): Closure;

    /**
     * Flush the container of all bindings and resolved instances.
     *
     * @return void
     */
    public function flush(): void;

    /**
     * Resolve the given type from the container.
     *
     * @param  string  $abstract
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function make(string $abstract, array $parameters = []): mixed;

    /**
     * Call the given Closure / class@method and inject its dependencies.
     *
     * @param  callable|string  $callback
     * @param  array  $parameters
     * @param  string|null  $defaultMethod
     * @return mixed
     */
    public function call(callable|string $callback, array $parameters = [], string|null $defaultMethod = null): mixed;

    /**
     * Determine if the given abstract type has been resolved.
     *
     * @param  string  $abstract
     * @return bool
     */
    public function resolved(string $abstract): bool;

    /**
     * Register a new before resolving callback.
     *
     * @param  \Closure|string  $abstract
     * @param  \Closure|null  $callback
     * @return void
     */
    public function beforeResolving(Closure|string $abstract, Closure|null $callback = null): void;

    /**
     * Register a new resolving callback.
     *
     * @param  \Closure|string  $abstract
     * @param  \Closure|null  $callback
     * @return void
     */
    public function resolving(Closure|string $abstract, Closure|null $callback = null): void;

    /**
     * Register a new after resolving callback.
     *
     * @param  \Closure|string  $abstract
     * @param  \Closure|null  $callback
     * @return void
     */
    public function afterResolving(Closure|string $abstract, Closure|null $callback = null): void;
}
