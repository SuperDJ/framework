<?php

namespace Illuminate\Contracts\Routing;

interface ResponseFactory
{
    /**
     * Create a new response instance.
     *
     * @param  array|string  $content
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function make(array|string $content = '', int $status = 200, array $headers = []): \Illuminate\Http\Response;

    /**
     * Create a new "no content" response.
     *
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function noContent(int $status = 204, array $headers = []): \Illuminate\Http\Response;

    /**
     * Create a new response for a given view.
     *
     * @param  string|array  $view
     * @param  array  $data
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function view(string|array $view, array $data = [], int $status = 200, array $headers = []): \Illuminate\Http\Response;

    /**
     * Create a new JSON response instance.
     *
     * @param  mixed  $data
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function json(mixed $data = [], int $status = 200, array $headers = [], int $options = 0): \Illuminate\Http\JsonResponse;

    /**
     * Create a new JSONP response instance.
     *
     * @param  string  $callback
     * @param  mixed  $data
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function jsonp(string $callback, mixed $data = [], int $status = 200, array $headers = [], int $options = 0): \Illuminate\Http\JsonResponse;

    /**
     * Create a new streamed response instance.
     *
     * @param  \Closure  $callback
     * @param  int  $status
     * @param  array  $headers
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function stream(\Closure $callback, int $status = 200, array $headers = []): \Symfony\Component\HttpFoundation\StreamedResponse;

    /**
     * Create a new streamed response instance as a file download.
     *
     * @param  \Closure  $callback
     * @param  string|null  $name
     * @param  array  $headers
     * @param  string|null  $disposition
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function streamDownload(\Closure $callback, string|null $name = null, array $headers = [], string|null $disposition = 'attachment'): \Symfony\Component\HttpFoundation\StreamedResponse;

    /**
     * Create a new file download response.
     *
     * @param  \SplFileInfo|string  $file
     * @param  string|null  $name
     * @param  array  $headers
     * @param  string|null  $disposition
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download(\SplFileInfo|string $file, string|null $name = null, array $headers = [], string|null $disposition = 'attachment'): \Symfony\Component\HttpFoundation\BinaryFileResponse;

    /**
     * Return the raw contents of a binary file.
     *
     * @param  \SplFileInfo|string  $file
     * @param  array  $headers
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function file(\SplFileInfo|string $file, array $headers = []): \Symfony\Component\HttpFoundation\BinaryFileResponse;

    /**
     * Create a new redirect response to the given path.
     *
     * @param  string  $path
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null): \Illuminate\Http\RedirectResponse;

    /**
     * Create a new redirect response to a named route.
     *
     * @param  string  $route
     * @param  mixed  $parameters
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToRoute(string $route, mixed $parameters = [], int $status = 302, array $headers = []): \Illuminate\Http\RedirectResponse;

    /**
     * Create a new redirect response to a controller action.
     *
     * @param  string  $action
     * @param  mixed  $parameters
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToAction(string $action, mixed $parameters = [], int $status = 302, array $headers = []): \Illuminate\Http\RedirectResponse;

    /**
     * Create a new redirect response, while putting the current URL in the session.
     *
     * @param  string  $path
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null): \Illuminate\Http\RedirectResponse;

    /**
     * Create a new redirect response to the previously intended location.
     *
     * @param  string  $default
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null): \Illuminate\Http\RedirectResponse;
}
