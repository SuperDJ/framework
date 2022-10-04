<?php

namespace Illuminate\Contracts\Cache;

use Closure;
use Psr\SimpleCache\CacheInterface;

interface Repository extends CacheInterface
{
    /**
     * Retrieve an item from the cache and delete it.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function pull(string $key, mixed $default = null): mixed;

    /**
     * Store an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @return bool
     */
    public function put(string $key, mixed $value, \DateTimeInterface|\DateInterval|int|null $ttl = null): bool;

    /**
     * Store an item in the cache if the key does not exist.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @return bool
     */
    public function add(string $key, mixed $value, \DateTimeInterface|\DateInterval|int|null $ttl = null): bool;

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function increment(string $key, mixed $value = 1): int|bool;

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function decrement(string $key, mixed $value = 1): int|bool;

    /**
     * Store an item in the cache indefinitely.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return bool
     */
    public function forever(string $key, mixed $value): bool;

    /**
     * Get an item from the cache, or execute the given Closure and store the result.
     *
     * @param  string  $key
     * @param  \DateTimeInterface|\DateInterval|int|null  $ttl
     * @param  \Closure  $callback
     * @return mixed
     */
    public function remember(string $key, \DateTimeInterface|\DateInterval|int|null $ttl, Closure $callback): mixed;

    /**
     * Get an item from the cache, or execute the given Closure and store the result forever.
     *
     * @param  string  $key
     * @param  \Closure  $callback
     * @return mixed
     */
    public function sear(string $key, Closure $callback): mixed;

    /**
     * Get an item from the cache, or execute the given Closure and store the result forever.
     *
     * @param  string  $key
     * @param  \Closure  $callback
     * @return mixed
     */
    public function rememberForever(string $key, Closure $callback): mixed;

    /**
     * Remove an item from the cache.
     *
     * @param  string  $key
     * @return bool
     */
    public function forget(string $key): bool;

    /**
     * Get the cache store implementation.
     *
     * @return \Illuminate\Contracts\Cache\Store
     */
    public function getStore(): \Illuminate\Contracts\Cache\Store;
}
