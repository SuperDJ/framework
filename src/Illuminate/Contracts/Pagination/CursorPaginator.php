<?php

namespace Illuminate\Contracts\Pagination;

interface CursorPaginator
{
    /**
     * Get the URL for a given cursor.
     *
     * @param  \Illuminate\Pagination\Cursor|null  $cursor
     * @return string
     */
    public function url(\Illuminate\Pagination\Cursor|null $cursor): string;

    /**
     * Add a set of query string values to the paginator.
     *
     * @param  array|string|null  $key
     * @param  string|null  $value
     * @return $this
     */
    public function appends(array|string|null $key, string|null $value = null): self;

    /**
     * Get / set the URL fragment to be appended to URLs.
     *
     * @param  string|null  $fragment
     * @return $this|string|null
     */
    public function fragment(string|null $fragment = null): self|string|null;

    /**
     * Add all current query string values to the paginator.
     *
     * @return $this
     */
    public function withQueryString(): self;

    /**
     * Get the URL for the previous page, or null.
     *
     * @return string|null
     */
    public function previousPageUrl(): string|null;

    /**
     * The URL for the next page, or null.
     *
     * @return string|null
     */
    public function nextPageUrl(): string|null;

    /**
     * Get all of the items being paginated.
     *
     * @return array
     */
    public function items(): array;

    /**
     * Get the "cursor" of the previous set of items.
     *
     * @return \Illuminate\Pagination\Cursor|null
     */
    public function previousCursor(): \Illuminate\Pagination\Cursor|null;

    /**
     * Get the "cursor" of the next set of items.
     *
     * @return \Illuminate\Pagination\Cursor|null
     */
    public function nextCursor(): \Illuminate\Pagination\Cursor|null;

    /**
     * Determine how many items are being shown per page.
     *
     * @return int
     */
    public function perPage(): int;

    /**
     * Get the current cursor being paginated.
     *
     * @return \Illuminate\Pagination\Cursor|null
     */
    public function cursor(): \Illuminate\Pagination\Cursor|null;

    /**
     * Determine if there are enough items to split into multiple pages.
     *
     * @return bool
     */
    public function hasPages(): bool;

    /**
     * Get the base path for paginator generated URLs.
     *
     * @return string|null
     */
    public function path(): string|null;

    /**
     * Determine if the list of items is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Determine if the list of items is not empty.
     *
     * @return bool
     */
    public function isNotEmpty(): bool;

    /**
     * Render the paginator using a given view.
     *
     * @param  string|null  $view
     * @param  array  $data
     * @return string
     */
    public function render(string|null $view = null, array $data = []): string;
}
