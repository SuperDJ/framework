<?php

namespace Illuminate\Contracts\Support;

use Countable;

interface MessageBag extends Arrayable, Countable
{
    /**
     * Get the keys present in the message bag.
     *
     * @return array
     */
    public function keys(): array;

    /**
     * Add a message to the bag.
     *
     * @param  string  $key
     * @param  string  $message
     * @return $this
     */
    public function add(string $key, string $message): self;

    /**
     * Merge a new array of messages into the bag.
     *
     * @param  \Illuminate\Contracts\Support\MessageProvider|array  $messages
     * @return $this
     */
    public function merge(\Illuminate\Contracts\Support\MessageProvider|array $messages): self;

    /**
     * Determine if messages exist for a given key.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function has(string|array $key): bool;

    /**
     * Get the first message from the bag for a given key.
     *
     * @param  string|null  $key
     * @param  string|null  $format
     * @return string
     */
    public function first(string|null $key = null, string|null $format = null): string;

    /**
     * Get all of the messages from the bag for a given key.
     *
     * @param  string  $key
     * @param  string|null  $format
     * @return array
     */
    public function get(string $key, string|null $format = null): array;

    /**
     * Get all of the messages for every key in the bag.
     *
     * @param  string|null  $format
     * @return array
     */
    public function all(string|null $format = null): array;

    /**
     * Get the raw messages in the container.
     *
     * @return array
     */
    public function getMessages(): array;

    /**
     * Get the default message format.
     *
     * @return string
     */
    public function getFormat(): string;

    /**
     * Set the default message format.
     *
     * @param  string  $format
     * @return $this
     */
    public function setFormat(string $format = ':message'): self;

    /**
     * Determine if the message bag has any messages.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Determine if the message bag has any messages.
     *
     * @return bool
     */
    public function isNotEmpty(): bool;
}
