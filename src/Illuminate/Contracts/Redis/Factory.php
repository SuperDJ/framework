<?php

namespace Illuminate\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Redis\Connections\Connection
     */
    public function connection(string|null $name = null): \Illuminate\Redis\Connections\Connection;
}
