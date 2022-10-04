<?php

namespace Illuminate\Contracts\Auth;

interface SupportsBasicAuth
{
    /**
     * Attempt to authenticate using HTTP Basic Auth.
     *
     * @param  string  $field
     * @param  array  $extraConditions
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function basic(string $field = 'email', array $extraConditions = []): \Symfony\Component\HttpFoundation\Response|null;

    /**
     * Perform a stateless HTTP Basic login attempt.
     *
     * @param  string  $field
     * @param  array  $extraConditions
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function onceBasic(string $field = 'email', array $extraConditions = []): \Symfony\Component\HttpFoundation\Response|null;
}
