<?php

namespace Illuminate\Contracts\Mail;

interface Factory
{
    /**
     * Get a mailer instance by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Contracts\Mail\Mailer
     */
    public function mailer(string|null $name = null): \Illuminate\Contracts\Mail\Mailer;
}
