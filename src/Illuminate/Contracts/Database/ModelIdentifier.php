<?php

namespace Illuminate\Contracts\Database;

class ModelIdentifier
{

    /**
     * The class name of the model collection.
     *
     * @var string|null
     */
    public $collectionClass;

    /**
     * Create a new model identifier.
     *
     * @param  string  $class The class name of the model.
     * @param  mixed  $id The unique identifier of the model. This may be either a single ID or an array of IDs.
     * @param  array  $relations The relationships loaded on the model.
     * @param  string|null  $connection The connection name of the model.
     * @return void
     */
    public function __construct(public string $class, public mixed $id, public array $relations, public string|null $connection)
    {
    }

    /**
     * Specify the collection class that should be used when serializing / restoring collections.
     *
     * @param  string|null  $collectionClass
     * @return $this
     */
    public function useCollectionClass(string|null $collectionClass): self
    {
        $this->collectionClass = $collectionClass;

        return $this;
    }
}
