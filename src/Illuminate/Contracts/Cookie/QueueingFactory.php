<?php

namespace Illuminate\Contracts\Cookie;

interface QueueingFactory extends Factory
{
    /**
     * Queue a cookie to send with the next response.
     *
     * @param  array  $parameters
     * @return void
     */
    public function queue(array ...$parameters): void;

    /**
     * Remove a cookie from the queue.
     *
     * @param  string  $name
     * @param  string|null  $path
     * @return void
     */
    public function unqueue(string $name, string|null $path = null): void;

    /**
     * Get the cookies which have been queued for the next request.
     *
     * @return array
     */
    public function getQueuedCookies(): array;
}
