<?php

namespace Illuminate\Contracts\Events;

interface Dispatcher
{
    /**
     * Register an event listener with the dispatcher.
     *
     * @param  \Closure|string|array  $events
     * @param  \Closure|string|array|null  $listener
     * @return void
     */
    public function listen(\Closure|string|array $events, \Closure|string|array|null $listener = null): void;

    /**
     * Determine if a given event has listeners.
     *
     * @param  string  $eventName
     * @return bool
     */
    public function hasListeners(string $eventName): bool;

    /**
     * Register an event subscriber with the dispatcher.
     *
     * @param  object|string  $subscriber
     * @return void
     */
    public function subscribe(object|string $subscriber): void;

    /**
     * Dispatch an event until the first non-null response is returned.
     *
     * @param  string|object  $event
     * @param  mixed  $payload
     * @return array|null
     */
    public function until(string|object $event, mixed $payload = []): array|null;

    /**
     * Dispatch an event and call the listeners.
     *
     * @param  string|object  $event
     * @param  mixed  $payload
     * @param  bool  $halt
     * @return array|null
     */
    public function dispatch(string|object $event, mixed $payload = [], bool $halt = false): array|null;

    /**
     * Register an event and payload to be fired later.
     *
     * @param  string  $event
     * @param  array  $payload
     * @return void
     */
    public function push(string $event, array $payload = []): void;

    /**
     * Flush a set of pushed events.
     *
     * @param  string  $event
     * @return void
     */
    public function flush(string $event): void;

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param  string  $event
     * @return void
     */
    public function forget(string $event): void;

    /**
     * Forget all of the queued listeners.
     *
     * @return void
     */
    public function forgetPushed(): void;
}
