<?php

namespace Illuminate\Contracts\Auth;

interface Guard
{
    /**
     * Determine if the current user is authenticated.
     *
     * @return bool
     */
    public function check(): bool;

    /**
     * Determine if the current user is a guest.
     *
     * @return bool
     */
    public function guest(): bool;

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user(): \Illuminate\Contracts\Auth\Authenticatable|null;

    /**
     * Get the ID for the currently authenticated user.
     *
     * @return int|string|null
     */
    public function id(): int|string|null;

    /**
     * Validate a user's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validate(array $credentials = []): bool;

    /**
     * Determine if the guard has a user instance.
     *
     * @return bool
     */
    public function hasUser(): bool;

    /**
     * Set the current user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function setUser(Authenticatable $user): void;
}
