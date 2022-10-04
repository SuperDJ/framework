<?php

namespace Illuminate\Contracts\Cookie;

interface Factory
{
    /**
     * Create a new cookie instance.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  int  $minutes
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null  $secure
     * @param  bool  $httpOnly
     * @param  bool  $raw
     * @param  string|null  $sameSite
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function make(string $name, string $value, int $minutes = 0, string|null $path = null, string|null $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, string|null $sameSite = null): \Symfony\Component\HttpFoundation\Cookie;

    /**
     * Create a cookie that lasts "forever" (five years).
     *
     * @param  string  $name
     * @param  string  $value
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null  $secure
     * @param  bool  $httpOnly
     * @param  bool  $raw
     * @param  string|null  $sameSite
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function forever(string $name, string $value, string|null $path = null, string|null $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, string|null $sameSite = null): \Symfony\Component\HttpFoundation\Cookie;

    /**
     * Expire the given cookie.
     *
     * @param  string  $name
     * @param  string|null  $path
     * @param  string|null  $domain
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function forget(string $name, string|null $path = null, string|null $domain = null): \Symfony\Component\HttpFoundation\Cookie;
}
