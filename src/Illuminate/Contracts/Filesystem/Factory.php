<?php

namespace Illuminate\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string|null  $name
     * @return \Illuminate\Contracts\Filesystem\Filesystem
     */
    public function disk(string|null $name = null): \Illuminate\Contracts\Filesystem\Filesystem;
}
