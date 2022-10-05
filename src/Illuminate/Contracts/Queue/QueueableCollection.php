<?php

namespace Illuminate\Contracts\Queue;

interface QueueableCollection
{
    /**
     * Get the type of the entities being queued.
     *
     * @return string|null
     */
    public function getQueueableClass(): string|null;

    /**
     * Get the identifiers for all of the entities.
     *
     * @return array<int, mixed>
     */
    public function getQueueableIds(): array;

    /**
     * Get the relationships of the entities being queued.
     *
     * @return array<int, string>
     */
    public function getQueueableRelations(): array;

    /**
     * Get the connection of the entities being queued.
     *
     * @return string|null
     */
    public function getQueueableConnection(): string|null;
}
