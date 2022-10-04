<?php

namespace Illuminate\Contracts\Auth\Access;

interface Gate
{
    /**
     * Determine if a given ability has been defined.
     *
     * @param  string  $ability
     * @return bool
     */
    public function has(string $ability): bool;

    /**
     * Define a new ability.
     *
     * @param  string  $ability
     * @param  callable|string  $callback
     * @return $this
     */
    public function define(string $ability, callable|string $callback): self;

    /**
     * Define abilities for a resource.
     *
     * @param  string  $name
     * @param  string  $class
     * @param  array|null  $abilities
     * @return $this
     */
    public function resource(string $name, string $class, array|null $abilities = null): self;

    /**
     * Define a policy class for a given class type.
     *
     * @param  string  $class
     * @param  string  $policy
     * @return $this
     */
    public function policy(string $class, string $policy): self;

    /**
     * Register a callback to run before all Gate checks.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function before(callable $callback): self;

    /**
     * Register a callback to run after all Gate checks.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function after(callable $callback): self;

    /**
     * Determine if the given ability should be granted for the current user.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function allows(string $ability, array $arguments = []): bool;

    /**
     * Determine if the given ability should be denied for the current user.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function denies(string $ability, array $arguments = []): bool;

    /**
     * Determine if all of the given abilities should be granted for the current user.
     *
     * @param  iterable|string  $abilities
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function check(iterable|string $abilities, array $arguments = []): bool;

    /**
     * Determine if any one of the given abilities should be granted for the current user.
     *
     * @param  iterable|string  $abilities
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function any(iterable|string $abilities, array $arguments = []): bool;

    /**
     * Determine if the given ability should be granted for the current user.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return \Illuminate\Auth\Access\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function authorize(string $ability, array $arguments = []): \Illuminate\Auth\Access\Response;

    /**
     * Inspect the user for the given ability.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return \Illuminate\Auth\Access\Response
     */
    public function inspect(string $ability, array $arguments = []): \Illuminate\Auth\Access\Response;

    /**
     * Get the raw result from the authorization callback.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return mixed
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function raw(string $ability, array $arguments = []): mixed;

    /**
     * Get a policy instance for a given class.
     *
     * @param  object|string  $class
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function getPolicyFor(object|string $class): mixed;

    /**
     * Get a guard instance for the given user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|mixed  $user
     * @return static
     */
    public function forUser(\Illuminate\Contracts\Auth\Authenticatable $user): static;

    /**
     * Get all of the defined abilities.
     *
     * @return array
     */
    public function abilities(): array;
}
