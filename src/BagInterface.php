<?php

namespace MamadouAlySy;

use Countable;

interface BagInterface extends Countable
{
    /**
     * Returns bag items as an array
     *
     * @return array<mixed>
     */
    public function all(): array;

    /**
     * Add new item in the bag with the given key
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function add(string $key, mixed $value): void;

    /**
     * Checks if the given key exists in the bag
     *
     * @param string $key
     * @return boolean
     */
    public function contains(string $key): bool;

    /**
     * Get the items of the bag with the given key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Remove an item from the bag
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key): void;
}
