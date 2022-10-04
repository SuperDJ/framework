<?php

namespace Illuminate\Contracts\Auth;

interface StatefulGuard extends Guard
{
    /**
     * Attempt to authenticate a user using the given credentials.
     *
     * @param  array  $credentials
     * @param  bool  $remember
     * @return bool
     */
    public function attempt(array $credentials = [], bool $remember = false): bool;

    /**
     * Log a user into the application without sessions or cookies.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function once(array $credentials = []): bool;

    /**
     * Log a user into the application.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function login(Authenticatable $user, bool $remember = false): void;

    /**
     * Log the given user ID into the application.
     *
     * @param  mixed  $id
     * @param  bool  $remember
     * @return \Illuminate\Contracts\Auth\Authenticatable|bool
     */
    public function loginUsingId(mixed $id, bool $remember = false): \Illuminate\Contracts\Auth\Authenticatable|bool;

    /**
     * Log the given user ID into the application without sessions or cookies.
     *
     * @param  mixed  $id
     * @return \Illuminate\Contracts\Auth\Authenticatable|bool
     */
    public function onceUsingId(mixed $id): \Illuminate\Contracts\Auth\Authenticatable|bool;

    /**
     * Determine if the user was authenticated via "remember me" cookie.
     *
     * @return bool
     */
    public function viaRemember(): bool;

    /**
     * Log the user out of the application.
     *
     * @return void
     */
    public function logout(): void;
}
