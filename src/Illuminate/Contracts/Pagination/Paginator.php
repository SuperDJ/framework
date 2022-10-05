<?php

namespace Illuminate\Contracts\Pagination;

interface Paginator
{
    /**
     * Get the URL for a given page.
     *
     * @param  int  $page
     * @return string
     */
    public function url(int $page): string;

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
     * The URL for the next page, or null.
     *
     * @return string|null
     */
    public function nextPageUrl(): string|null;

    /**
     * Get the URL for the previous page, or null.
     *
     * @return string|null
     */
    public function previousPageUrl(): string|null;

    /**
     * Get all of the items being paginated.
     *
     * @return array
     */
    public function items(): array;

    /**
     * Get the "index" of the first item being paginated.
     *
     * @return int
     */
    public function firstItem(): int;

    /**
     * Get the "index" of the last item being paginated.
     *
     * @return int
     */
    public function lastItem(): int;

    /**
     * Determine how many items are being shown per page.
     *
     * @return int
     */
    public function perPage(): int;

    /**
     * Determine the current page being paginated.
     *
     * @return int
     */
    public function currentPage(): int;

    /**
     * Determine if there are enough items to split into multiple pages.
     *
     * @return bool
     */
    public function hasPages(): bool;

    /**
     * Determine if there are more items in the data store.
     *
     * @return bool
     */
    public function hasMorePages(): bool;

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
