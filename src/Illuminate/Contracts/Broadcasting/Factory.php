<?php

namespace Illuminate\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Contracts\Broadcasting\Broadcaster
     */
    public function connection(string|null $name = null): \Illuminate\Contracts\Broadcasting\Broadcaster;
}
