<?php

namespace Illuminate\Contracts\Session;

interface Session
{
    /**
     * Get the name of the session.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set the name of the session.
     *
     * @param  string  $name
     * @return void
     */
    public function setName(string $name): void;

    /**
     * Get the current session ID.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Set the session ID.
     *
     * @param  string  $id
     * @return void
     */
    public function setId(string $id): void;

    /**
     * Start the session, reading the data from a handler.
     *
     * @return bool
     */
    public function start(): bool;

    /**
     * Save the session data to storage.
     *
     * @return void
     */
    public function save(): void;

    /**
     * Get all of the session data.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Checks if a key exists.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function exists(string|array $key): bool;

    /**
     * Checks if a key is present and not null.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function has(string|array $key): bool;

    /**
     * Get an item from the session.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Get the value of a given key and then forget it.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function pull(string $key, mixed $default = null): mixed;

    /**
     * Put a key / value pair or array of key / value pairs in the session.
     *
     * @param  string|array  $key
     * @param  mixed  $value
     * @return void
     */
    public function put(string|array $key, mixed $value = null): void;

    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    public function token(): string;

    /**
     * Regenerate the CSRF token value.
     *
     * @return void
     */
    public function regenerateToken(): void;

    /**
     * Remove an item from the session, returning its value.
     *
     * @param  string  $key
     * @return mixed
     */
    public function remove(string $key): mixed;

    /**
     * Remove one or many items from the session.
     *
     * @param  string|array  $keys
     * @return void
     */
    public function forget(string|array $keys): void;

    /**
     * Remove all of the items from the session.
     *
     * @return void
     */
    public function flush(): void;

    /**
     * Flush the session data and regenerate the ID.
     *
     * @return bool
     */
    public function invalidate(): bool;

    /**
     * Generate a new session identifier.
     *
     * @param  bool  $destroy
     * @return bool
     */
    public function regenerate(bool $destroy = false): bool;

    /**
     * Generate a new session ID for the session.
     *
     * @param  bool  $destroy
     * @return bool
     */
    public function migrate(bool $destroy = false): bool;

    /**
     * Determine if the session has been started.
     *
     * @return bool
     */
    public function isStarted(): bool;

    /**
     * Get the previous URL from the session.
     *
     * @return string|null
     */
    public function previousUrl(): string|null;

    /**
     * Set the "previous" URL in the session.
     *
     * @param  string  $url
     * @return void
     */
    public function setPreviousUrl(string $url): void;

    /**
     * Get the session handler instance.
     *
     * @return \SessionHandlerInterface
     */
    public function getHandler(): \SessionHandlerInterface;

    /**
     * Determine if the session handler needs a request.
     *
     * @return bool
     */
    public function handlerNeedsRequest(): bool;

    /**
     * Set the request on the handler instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function setRequestOnHandler(\Illuminate\Http\Request $request): void;
}
