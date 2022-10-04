<?php

namespace Illuminate\Contracts\Http;

interface Kernel
{
    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap(): void;

    /**
     * Handle an incoming HTTP request.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response;

    /**
     * Perform any final actions for the request lifecycle.
     *
     * @param  \Symfony\Component\HttpFoundation\Request  $request
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @return void
     */
    public function terminate(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response): void;

    /**
     * Get the Laravel application instance.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function getApplication(): \Illuminate\Contracts\Foundation\Application;
}
