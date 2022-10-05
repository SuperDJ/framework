<?php

namespace Illuminate\Contracts\Routing;

interface Registrar
{
    /**
     * Register a new GET route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function get(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new POST route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function post(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new PUT route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function put(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new DELETE route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function delete(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new PATCH route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function patch(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new OPTIONS route with the router.
     *
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function options(string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Register a new route with the given verbs.
     *
     * @param  array|string  $methods
     * @param  string  $uri
     * @param  array|string|callable  $action
     * @return \Illuminate\Routing\Route
     */
    public function match($methods, string $uri, array|string|callable $action): \Illuminate\Routing\Route;

    /**
     * Route a resource to a controller.
     *
     * @param  string  $name
     * @param  string  $controller
     * @param  array  $options
     * @return \Illuminate\Routing\PendingResourceRegistration
     */
    public function resource(string $name, string $controller, array $options = []): \Illuminate\Routing\PendingResourceRegistration;

    /**
     * Create a route group with shared attributes.
     *
     * @param  array  $attributes
     * @param  \Closure|string  $routes
     * @return void
     */
    public function group(array $attributes, \Closure|string $routes): void;

    /**
     * Substitute the route bindings onto the route.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return \Illuminate\Routing\Route
     */
    public function substituteBindings(\Illuminate\Routing\Route $route): \Illuminate\Routing\Route;

    /**
     * Substitute the implicit Eloquent model bindings for the route.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return void
     */
    public function substituteImplicitBindings(\Illuminate\Routing\Route $route): void;
}
